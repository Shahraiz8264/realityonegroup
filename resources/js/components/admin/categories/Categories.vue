<template>


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.categories }}</h1>
                </div>
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div> -->
                </div>
            </div>
        </section>
        <!-- Main content -->
        <div class="loading" v-if="loader">Loading</div>
        <section class="content" v-else>

        <!-- Default box -->
        <div class="card card-secondary card-outline">
            <div class="card-header d-flex justify-content-end">
                <a class="btn btn-secondary" href="/admin/categories/create">
                    {{ Lang.add_new_msg.replace(':attribute',Lang.category) }}
                </a>
                
<!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
            </div>
            <div class="card-body p-0" v-if="data">
                <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="false" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order" />
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        </section>

    <!-- /.content -->
</template>



<script>
import useCategories from '../../../composables/categories';
import {Language} from '../../../helpers/lang/lang';
import Datatables from '../../commons/Datatables.vue';
import useService  from '../../../services/';
import VueElementLoading from 'vue-element-loading';


export default {

  components: { Datatables,VueElementLoading },

    data(){
        return {
            Lang:Language,
            data:[],
            columns:[],
            pageNo:1,
            pageSize:10,
            loader:false,
            store_modal_loader:false,
            order:'desc',
            orderBy:'created_at',
            pages:1,
            filter:{
                search:'',
            },
            errors:[],
            is_show_modal:false,
            formTitle: "Add New Category",
            form:{
                name:'',
                slug:'',
                image:'',
                logo:'',
                show_on_home:0,
            },
            formFields:[
                {
                    name:"name",
                    type:"text",
                    label:Language.name,
                    placeholder:Language.placeholder_msg.replace(':attribute',Language.name),
                },
                {
                    name:"slug",
                    type:"text",
                    label:Language.slug,
                    placeholder:Language.placeholder_msg.replace(':attribute',Language.slug),
                },
                {
                    name:"show_on_home",
                    type:"checkbox",
                    label:Language.show_on_home,
                    placeholder:Language.placeholder_msg.replace(':attribute',Language.show_on_home),
                },
                {
                    name:"image",
                    type:"file",
                    label:Language.image,
                    placeholder:Language.placeholder_msg.replace(':attribute',Language.image),
                },
                {
                    name:"logo",
                    type:"file",
                    label:Language.logo,
                    placeholder:Language.placeholder_msg.replace(':attribute',Language.logo),
                }
            ],
            id:0,
        }
    },
    beforeMount(){
        this.loader = true
    },
    mounted(){
        this.loader = false
        let ref = this;
        this.columns = [
            {
                label:'S.no',
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:'Name',
                field:'name',
                orignal_name:'name',
                width:'4%',
                sorted:true,
                has_html:true,
            },
            {
                label:'SLug',
                field:'slug',
                orignal_name:'slug',
                width:'4%',
                sorted:true,
                has_html:false,
            },
            {
                label:'Status',
                field:'status',
                orignal_name:'is_active',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:'Created At',
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
            {
                label:'Action',
                field:'action',
                orignal_name:'action',
                width:'4%',
                sorted:false,
                has_html:false,
                dropdown:[
                    {
                        name:(row) => {
                            if(row.is_active)

                                return Language.inactive
                            else
                                return Language.active
                        },
                        icon:(row) => {
                            return 'fa fa-list-alt mr-2'
                        },
                        action:(row) =>{
                            ref.updateStatus(row.id)
                        }
                    },
                    {
                        name:(row) => {
                            return Language.edit
                        },
                        icon:(row) => {
                            return 'fa fa-edit mr-2'
                        },
                        action:(row) =>{
                            ref.edit(row.id)
                        }
                    }



                ]


            },
        ]
        this.getCategories(this.pageNo,this.pageSize,this.filter);
    },

    methods:{
        setPageNo(pageNo){
            this.pageNo = pageNo;

            this.getCategories(this.pageNo,this.pageSize,this.filter);
        },
        setPageSize(pageSize){
            this.pageSize = pageSize
            this.getCategories();
        },
        setOrder(orderBy){
            this.orderBy = orderBy
            this.order = this.order == 'desc'?'asc':'desc';
            this.getCategories();
        },
        setFilter(filter){
            this.filter = {
                search:filter
            }

            this.getCategories(this.pageNo,this.pageSize,this.filter);
        },
        async getCategories(){

            const { categories, getCategories } = useCategories();
            this.loader = true
            let ref = this

            try{
                await getCategories(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);

                ref.data = categories
                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async updateStatus(id){


            const {confirmAlert} = useService();
            let ref = this
                confirmAlert(async () => {
                    this.loader = true
                        const { udpateStatus } = useCategories();
                        await udpateStatus(id)
                        ref.getCategories(ref.pageNo,ref.pageSize,ref.filter);
                })
        },

        
        async formSubmit(){
            if(this.id == 0){
                await this.store();
            }else{
                await this.update();
            }

        },
        async edit(id){
            const {category,getCategory} = useCategories();
            this.id = id;
            await getCategory(id);
            this.form.name = category.value.name;
            this.form.slug = category.value.slug;
            this.form.image = category.value.image;
            this.form.logo = category.value.logo;
            this.form.show_on_home = category.value.show_on_home === 1;
            this.formTitle = "Edit Category";
            this.is_show_modal = true;
        },
        async store(){
            const {storeCategory,errors} = useCategories();
            const {errorAlert,successAlert} = useService();

            this.errors = [];
            let ref = this;
            if(!this.store_modal_loader){
                this.store_modal_loader = true;
                this.form.show_on_home = this.form.show_on_home ? 1 : 0;
                await storeCategory(this.form).then((response) => {
                    successAlert(Language.success_msg.replace(':attribute',Language.category).replace(':action',Language.saved));
                    ref.store_modal_loader = false;
                    ref.is_show_modal = false;
                    ref.getCategories();
                }).catch((e) => {
                    ref.store_modal_loader = false;
                    if(e.response.status === 422){
                        ref.errors = e.response.data.errors
                    }else if(e.response.status == 500){
                        errorAlert(e.message)
                    }else{

                        errorAlert(e.response.data.message)
                    }
                })
            }

        },
        async update(){
            const {update,errors} = useCategories();
            const {errorAlert,successAlert} = useService();

            this.errors = [];
            let ref = this;
            this.form.show_on_home = this.form.show_on_home ? 1 : 0;

                if(!this.store_modal_loader){
                        this.store_modal_loader = true;
                        await update(this.id,this.form).then((response) => {
                        successAlert(Language.success_msg.replace(':attribute',Language.category).replace(':action',Language.updated));
                        ref.store_modal_loader = false;
                        ref.is_show_modal = false;
                        ref.id = 0;
                        ref.getCategories();
                    }).catch((e) => {
                        ref.store_modal_loader = false;
                        if(e.response.status === 422){
                            ref.errors = e.response.data.errors
                        }else if(e.response.status == 500){
                            errorAlert(e.message)
                        }else{

                            errorAlert(e.response.data.message)
                        }
                    })
                }
            }



    },
    watch:{
        'form.name':function(newValue){
            this.form.slug = this.form.name
            .toString()                     // Cast to string
            .toLowerCase()                  // Convert the string to lowercase letters
            .trim()                         // Remove whitespace from both sides of a string
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/&/g, '-and-')           // Replace & with 'and'
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-');        // Replace multiple - with single -
        }
    }



}
</script>


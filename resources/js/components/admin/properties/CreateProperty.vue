<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg.replace(':attribute',Lang.property) }}</h1>
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
        <section class="content">

        <!-- Default box -->
        <div class="card card-secondary card-outline">
            
            <div class="card-body">
                <Form :fields="FormFields" :data="FormData" :action="store" :name="name" :errors="errors"/>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import useProperties from '../../../composables/properties';
import useDevelopers from '../../../composables/developers';
import usePropertyTypes from '../../../composables/propertytypes';
import useService  from '../../../services/index';
import useGenerals from '../../../composables/general';

export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            errors:{},
            FormFields:[],
            developerOptions:[],
            typesOptions:[],
            citiesOptions:[],
            FormData:{
                name:'',
                slug:'',
                description:'',
                address:'',
                city:'',
                country:'',
                media:[],
                gallery:[]
            },
            name:"Create Property",
        }
    },
    mounted(){ 
        let ref = this;
        ref.getDevelopers();
        ref.getPropertyTypes();
        ref.getCities();
        ref.FormFields = [
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.slug,
                    field:"slug",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.description,
                    field:"description",
                    class:"form-control",
                    type:"textarea",
                    grid:"col-md-12 col-12",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
             
                {
                    label:Language.city,
                    field:"city",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.country,
                    field:"country",
                    class:"form-control",
                    grid:"col-md-6 col-12",
                    type:"text",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },
                {
                    label:Language.address,
                    field:"address",
                    class:"form-control address",
                    grid:"col-md-12 col-12",
                    type:"map",
                    placeholder:function(){
                        return "Enter "+this.label
                    },
                    required:true,
                },

                {
                    label:Language.gallery,
                    field:"gallery",
                    class:"files",
                    grid:"col-md-12 col-12",
                    type:"file",
                    placeholder:function(){
                        return "Upload"+this.label
                    },
                    multiple:true,
                    server:{
                        process : (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            const formData = new FormData();
                            formData.append(fieldName, file, file.name);

                            const request = new XMLHttpRequest();
                            request.open('POST', '/admin/properties/media/store');

                            request.upload.onprogress = (e) => {
                                progress(e.lengthComputable, e.loaded, e.total);
                            };

                  
                            let data = [];
                            request.onload = function () {
                                if (request.status >= 200 && request.status < 300) {
                                    // the load method accepts either a string (id) or an object
                                    load(request.responseText);
                                    
                                    //data.push(request.response);
                                    ref.FormData.media.push(request.response);
                                    
                                } else {
                                    // Can call the error method if something is wrong, should exit after
                                    error('oh no');
                                }
                            };

                            request.send(formData);

                            // Should expose an abort method so the request can be cancelled
                            return {
                                abort: () => {
                                    // This function is entered if the user has tapped the cancel button
                                    request.abort();

                                    // Let FilePond know the request has been cancelled
                                    abort();
                                },
                            };
                            
                        },
                        revert: (uniqueFileId, load, error) => {
                            const formData = new FormData();
                            
                            //formData.append(fieldName, file, file.name);
                            console.log(uniqueFileId)
                            const request = new XMLHttpRequest();
                            request.open('DELETE', '/admin/properties/media/delete/'+uniqueFileId);

                            request.onload = function () {
                                if (request.status >= 200 && request.status < 300) {
                                    // the load method accepts either a string (id) or an object
                                    load(request.responseText);
                                    ref.FormData.media.splice(uniqueFileId,1);
                                } else {
                                    // Can call the error method if something is wrong, should exit after
                                    error('oh no');
                                }
                            };

                            request.send(formData);
                            load();
                        },
                        //store:"/admin/properties/media/store",
                    },
                    required:false,
                    fileType:"image/jpeg, image/png"
                },
                
        ]

        // var autocomplete = new google.maps.places.Autocomplete(
        //     document.getElementById("address"),
        // );
    },

    methods:{
        async store(){
            const {storeProperty,errors} = useProperties();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            console.log(this.FormData);
            await storeProperty(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.property).replace(':action',Language.saved))
                setTimeout(() => {
                    window.location.href = '/admin/properties';
                }, 3000);
            }).catch((e) => {
                if(e.response.status === 422){
                    this.errors = e.response.data.errors
                    console.log(this.errors);
                }else if(e.response.status == 500){
                    errorAlert(e.message)
                }else{

                    errorAlert(e.response.data.message)
                }
            });;
            this.loader =false;
            // this.errors = errors.value;
            
    
        },
        async getDevelopers(){
            const {developers,getDevelopersPublic} = useDevelopers();
            await getDevelopersPublic();
            this.developerOptions = developers.value;
            //console.log(this.developerOptions);
        },
        async getPropertyTypes(){
            const {propertyTypes,getPropertyTypesPublic} = usePropertyTypes();
            await getPropertyTypesPublic();
            this.typesOptions = propertyTypes.value;
            //console.log(this.developerOptions);
        },
        async getCities(){
            const {data,getCitiesByCountry} = useGenerals();
            await getCitiesByCountry();
            this.citiesOptions = data.value;
        },
        setFormData(field,data){
            this.FormData[field] = data; 
            console.log(this.FormData);
        }

   }
}
</script>
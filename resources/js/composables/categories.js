import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services/';

export default function useIdeas() {
    const categories = ref([]);
    const errors = ref([]);
    const category = ref({});
    const { errorAlert } = useService();
    const getCategories = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/categories/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            categories.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeCategory = async(data) => {

        await axiosWrapper.post(`/admin/categories`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/categories/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/categories/update/${id}`, data)
    }
    const getCategory = async(id) => {
        await axiosWrapper.get(`/admin/categories/${id}`).then((response) => {
            category.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getCategoriesPublic = async() => {
        await axiosWrapper.get(`/categories`).then((response) => {
            categories.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    return {
        getCategories,
        getCategoriesPublic,
        categories,
        storeCategory,
        udpateStatus,
        getCategory,
        category,
        update,
        errors
    }
}
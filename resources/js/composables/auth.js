import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router';
import { axiosWrapper } from '../helpers/index';
import useService from '../services/';

export default function useAuth() {
    const code = ref([]);
    const errors = ref([]);
    const router = useRouter() 

    const login = async(user) => {
        const { errorAlert,showLoader,hideLoader } = useService();
        await axiosWrapper.post('/login',user).then((response) => {
            
            localStorage.setItem('user', response.data.data.user);
            localStorage.setItem('token', response.data.data.token);
            
            window.location.href = response.data.data.route;
            

        }).catch((e) => {
            if (e.response.status === 422) {
                errorAlert(e.message)
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {
                errorAlert(e.response.data.message)
            }
            
        });
        
    }

    const getHonorCode = async(role) => {
        await axiosWrapper.get(`/honor-code`, { role }).then((response) => {
            code.value = response.data.data
        });

    }

    const signUp = async(data) => {
        const { errorAlert } = useService();
        await axiosWrapper.post(`/register`, data).then((response) => {

            localStorage.setItem('dashboard', response.data.data.dasboard);
            localStorage.setItem('user', response.data.data.user);
            localStorage.removeItem('user_type');
            window.location.href = response.data.data.route;

        }).catch((e) => {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {

                errorAlert(e.response.data.message)
            }
        });
    }

    const updateProfile = async(url, data) => {

        return await axiosWrapper.post(url, data)
    }
    return {
        code,
        getHonorCode,
        signUp,
        errors,
        updateProfile,
        login
    }
}
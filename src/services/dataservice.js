import Axios from 'axios';

export const BACKEND_URL = "http://localhost/VUE/cimjegyzek/backend/";
export default {
    szemelyek() {
        return Axios.get(BACKEND_URL + 'szemelyek.php')
            .then(res=>{
                console.log(res);
                return res
            })
            .catch(err=>{return Promise.reject(err)})
    }
}
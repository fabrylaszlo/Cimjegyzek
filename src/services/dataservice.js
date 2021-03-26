import Axios from 'axios';

export const BACKEND_URL = "http://localhost/VUE/cimjegyzek/backend/";
export default {
    szemelyek() {
        return Axios.get(BACKEND_URL + 'szemelyek.php')
            .then(res => {
                console.log(res);
                return res
            })
            .catch(err => {
                return Promise.reject(err)
            })
    },
    search(data) {
        return Axios.post(BACKEND_URL + 'search.php', data, {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).then(res => {return res})
        .catch(err=>{return Promise.reject(err)});
    }
}
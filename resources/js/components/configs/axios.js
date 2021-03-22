import axios from 'axios'

axios.defaults.baseURL = '/assets/data/'
axios.interceptors.response.use(function (response) {
    return response.data;
})

export default axios

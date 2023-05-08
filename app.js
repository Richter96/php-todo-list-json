const { createApp } = Vue

createApp({
    data() {
        return {
            list: null,
            url_api_list: 'getList.php'
        }
    },
    mounted() {
        /* qui facciamo una chiamata axios */
        axios
            .get(this.url_api_list)
            .then(response => {
                console.log(response)
            })
            .catch(error => {
                console.error(error.message);
            })
    },
}).mount('#app')
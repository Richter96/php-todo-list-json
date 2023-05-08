const { createApp } = Vue

createApp({
    data() {
        return {
            lists_todo: null,
            url_api_list: 'getList.php',
            new_item_list: ''
        }
    },
    methods: {
        add_item() {
            console.log('add');
            axios.post()

        }
    },
    mounted() {
        /* qui facciamo una chiamata axios */
        axios
            .get(this.url_api_list)
            .then(response => {
                console.log(response)
                this.lists_todo = response.data
            })
            .catch(error => {
                console.error(error.message);
            });

    },
}).mount('#app')
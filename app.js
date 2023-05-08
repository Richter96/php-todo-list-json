const { createApp } = Vue

createApp({
    data() {
        return {
            lists_todo: null,
            url_api_list: 'getList.php',
            new_item_list: 'ciao'
        }
    },
    methods: {
        add_item() {
            console.log('add list item');
            const data = {
                new_item: this.new_item_list
            }
            console.log(data);

            axios.post('StoreItem.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.error(error.message);
                });
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
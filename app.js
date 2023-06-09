const { createApp } = Vue

createApp({
    data() {
        return {
            lists_todo: null,
            url_api_list: 'app/http/Controllers/TasksController/index.php',
            new_item_list: ''
        }
    },
    methods: {
        add_item(event) {
            console.log('add list item');
            const data = {
                new_item: this.new_item_list
            }
            console.log(data);

            axios.post('app/http/Controllers/TasksController/Store.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.lists_todo = response.data
                    console.log(this.lists_todo);
                })
                .catch(error => {
                    console.error(error.message);
                });
            event.preventDefault();
        },

        complet_task(index) {
            // console.log('completed', index);
            // console.log('completed', this.lists_todo[index].done);
            // this.lists_todo[index].done ^= 1

            // passo tramite chiamata post l'index al file completedTask
            // console.log('add list item');
            const data = {
                index_item: index
            }
            // console.log(data);

            axios.post('app/http/Controllers/TasksController/completeTask.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.lists_todo = response.data
                    // console.log(this.lists_todo);
                })
                .catch(error => {
                    console.error(error.message);
                });
        },

        delete_item(index) {
            console.log('elimina item');
            console.log(index);

            const data = {
                index_item: index
            }

            axios.post('app/http/Controllers/TasksController/delateTask.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.lists_todo = response.data
                    console.log(this.lists_todo);
                })
                .catch(error => {
                    console.error(error.message);
                });
        }
    },
    mounted() {
        /* qui facciamo una chiamata axios pre prendere i dati dal file json*/
        axios
            .get(this.url_api_list)
            .then(response => {
                console.log(response)
                this.lists_todo = response.data
                console.log(this.lists_todo);
            })
            .catch(error => {
                console.error(error.message);
            });
    },
}).mount('#app')
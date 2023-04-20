const { createApp } = Vue

createApp({
  data() {
    return {
        toDoList: [],
        task: ''
    }
  },
  methods: {
        getToDoList() {
            axios.get('server.php')
            .then(response => {
                this.toDoList = response.data;
            })
        },

        addTask() {
            const data = {
                task: this.task
            };
            axios.post('server.php', data, {
                headers: {'Content-Type': 'multipart/form-data'}
            })
            .then(response => {
                this.toDoList = response.data;
                this.task= '';
            });
        }
    },
  mounted() {
    this.getToDoList();
  }
}).mount('#app')
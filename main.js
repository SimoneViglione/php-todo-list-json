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

        }
  },
  mounted() {
    this.getToDoList();
  }
}).mount('#app')
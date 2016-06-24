  Vue.component('tasks', {
    template:'#tasks-template',
    props: ['list'],

    ready() {
      this.$http.get('/api/accounts')
      .then(response => {
        this.list=JSON.parse(this.list);
      })
    },

    methods:{
      deleteTask: function(task){
        this.list.$remove(task);
      }
    }
  });
  new Vue({
    el:'body',
  });

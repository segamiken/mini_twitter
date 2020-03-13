import Router from 'vue-router'
import List from './components/List.vue'
import Form from './components/Form.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'list',
      component: List
    },
    {
        path: '/create',
        name: 'form',
        component: Form
    },
  ]
});
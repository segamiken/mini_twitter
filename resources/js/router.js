import Router from 'vue-router'
import List from './components/List.vue'
import Form from './components/Form.vue'
import Detail from './components/Detail.vue'

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
        name: 'create',
        component: Form
    },
    {
      path: '/:id',
      name: 'detail',
      component: Detail
    }

  ]
});
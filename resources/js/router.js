import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from './components/admin/Login'
import Index from './components/admin/Index'
Vue.use(VueRouter)

const routes = [
  {
    path: '/admin',
    redirect: '/admin/login'
  },
  {
    path: '/admin/login',
    component: Login
  },
  {
    path: '/admin/index',
    component: Index
  }
]

const router = new VueRouter({
  routes
})

export default router

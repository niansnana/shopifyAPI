import Vue from 'vue'
import VueRouter from 'vue-router'
// 前台的路由
import FrontIndex from './components/Index'
// 后台的路由
import Login from './components/admin/Login'
import Index from './components/admin/Index'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    redirect: '/index'
  },
  {
    path: '/index',
    component: FrontIndex
  },
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

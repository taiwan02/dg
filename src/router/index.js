import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    redirect: '/home'
  },
  {
    path: '/home',
    name: 'home',
    component: () => import('../views/home.vue')
  },
  {
    path: '/updateRecord',
    name: 'updateRecord',
    meta: {
      title: '更新记录'
    },
    component: () => import('../views/updateRecord.vue')
  },
  {
    path: '/fwip',
    name: 'fwip',
    component: () => import('../views/fwip.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router

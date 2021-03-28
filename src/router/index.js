import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Keresés from '../views/Kereses.vue'
import Login from '../views/Login.vue'
const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/search',
    name: 'Keresés',
    component: Keresés
  },
  {
    path: '/login',
    name: 'Login',
   component: Login
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

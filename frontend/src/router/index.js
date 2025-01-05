import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    name: "index",
    path: "/",
    component:() => import('@pages/index.vue')
  },
  {
    name: "champions",
    path: "/champions",
    component:() => import('@pages/champions.vue')
  },
  {
    name: "create",
    path: "/create",
    component:() => import('@pages/createchamp.vue')
  }
]

export const router = createRouter({
  routes,
  history: createWebHistory(),
  linkActiveClass: "active"
})
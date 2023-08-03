// Mapping our view components to the routes using Vue Router
import { createRouter, createWebHistory } from "vue-router";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import ProductListing from "../views/ProductListing.vue";
import ProductDescription from "../views/ProductDescription.vue";


const routes = [
  {
    path: '/login',
    name: 'login',
    component: Login
  },
  {
    path: '/register',
    name: 'register',
    component: Register
  },
  {
    path: '/productListing',
    name: 'productListing',
    component: ProductListing
  },
  {
    path: '/productDescription',
    name: 'productDescription',
    component: ProductDescription
  },
];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
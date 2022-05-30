import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Product from "../views/Product.vue";
import Cart from "../views/Cart.vue";
import About from "../views/About.vue";
import Contact from "../views/Contact.vue";
import AddProduct from "../views/AddProduct.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/login", component: Login },
  { path: "/product", component: Product },
  { path: "/cart", component: Cart },
  { path: "/about", component: About },
  { path: "/contact", component: Contact },
  { path: "/addProduct", component: AddProduct },



];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;

import { createRouter, createWebHistory } from "vue-router";
import routes from "./routes.ts";

const router = createRouter({
  routes,
  history: createWebHistory(),
  linkActiveClass: 'active'
});

export default router;
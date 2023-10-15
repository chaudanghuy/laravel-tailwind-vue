import HomePage from "../pages/HomePage.vue"
import Listings from "../pages/Listings.vue"
import NotFoundErrorPage from "../pages/errors/NotFoundErrorPage.vue"

const routes = [
  {
    path: "/",
    component: HomePage,
    name: "home"
  },
  {
    path: "/listings",
    component: Listings,
    name: "listings"
  },
  {
    path: "/:notFound(.*)",
    component: NotFoundErrorPage,
    name: "NotFoundErrorPage"
  }
];

export default routes;
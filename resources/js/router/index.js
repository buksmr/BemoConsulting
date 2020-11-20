import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Contact from "../views/Contact.vue";

import auth from "../store/auth";
//import auth from './middleware/auth'

export default new Router({
    mode: "history",
    baseurl: "/api/v1",
    base: "bemconsulting",

    routes: [
        {
            path: "/home",
            name: "home",
            component: Home,

            meta: {
                requiresAuth: true
            }
        },

        {
            path: "/",
            name: "login",
            component: Login
        },

        {
            path: "/contact",
            name: "contact",
            component: Contact,
            meta: {
                requiresAuth: true
            }
        }
    ]
});

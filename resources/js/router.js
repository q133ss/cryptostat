import vueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(vueRouter);

import Index from './views/index';
import Rating from "./views/rating";
import Strategy from "./views/strategy";

const routes = [
    // {
    //     path: '/dashboard',
    //     component: Index
    // },
    {
        path: '/rating',
        component: Rating
    },
    {
        path: '/strategy',
        component: Strategy
    }
];

export default new vueRouter({
    mode: "history",
    routes: routes
});

import { RouteRecordRaw } from "vue-router";

const routes: Array<RouteRecordRaw> = [
    {
        path: '/admin',
        name: 'Dashboard',
        component: (() => import('@back/pages/Dashboard.vue')),
    },
    {
        path: '/login',
        name: 'Login',
        component: (() => import('@back/pages/Login.vue')),
    }
];

export default routes;
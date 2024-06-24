import { createRouter, createWebHistory } from 'vue-router'
import routes from '@back/router/Routes'
import Middlewares from '@back/router/middlewares'

const router = createRouter({
    history: createWebHistory(''),
    routes
});

router.beforeEach(Middlewares.handle);

export default router

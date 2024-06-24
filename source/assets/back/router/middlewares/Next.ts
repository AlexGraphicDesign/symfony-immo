import { NavigationGuardNext, RouteLocationNormalized } from 'vue-router';

export default {
    handle: async (
        to: RouteLocationNormalized,
        from: RouteLocationNormalized,
        next: NavigationGuardNext,
    ) => {
        next();
        return true;
    },
};

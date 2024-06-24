import { NavigationGuardNext, RouteLocationNormalized } from 'vue-router';
import Next from '@back/router/middlewares/Next';

const middlewares = [
    Next,
];

export default {
    handle: async (
        to: RouteLocationNormalized,
        from: RouteLocationNormalized,
        next: NavigationGuardNext,
    ) => {
        let hasNextCalled = false;

        for (let index = 0; index < middlewares.length; index++) {
            if (!hasNextCalled) {
                const result = await middlewares[index].handle(to, from, next);
                hasNextCalled = hasNextCalled || result;
            }
        }

        if (!hasNextCalled) {
            next();
        }
    },
};

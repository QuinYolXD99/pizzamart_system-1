import VueRouter from 'vue-router'
const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/pizzamart',
            redirect: {
                name: "home"
            }

        },
        {
            path: '/pizzamart/login',
            name: 'login',
            component: require(`./components/AccountForm.vue`)
        },
        {
            path: '/pizzamart/register',
            name: 'register',
            component: require(`./components/AccountForm.vue`)
        }, {
            path: '/pizzamart/home',
            name: 'home',
            component: require(`./components/Home.vue`)
        },
        // {
        //     path: '/pizzamart/*',
        //     redirect: {
        //         path: "/pizzamart/home"
        //     }
        // }
    ],
});

export default router;
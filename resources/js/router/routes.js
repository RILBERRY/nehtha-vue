import {  } from '../store/user'

const routes = [
    {
        path: '/vendor',
        component: () => import('../layouts/VendorsLayout.vue'),
        children: [
            {
                path: '',
                name: 'dashboard',
                component: () => import('../pages/DashboardPage.vue'),
                meta: {
                    name: 'Home',
                    permission: 'me'
                }
            },

            {
                path: '/vendor/requests',
                name: 'requests',
                component: () => import('../pages/RequestList.vue'),
                meta: {
                    name: 'Request',
                    permission: 'reqests.index'
                }
            },
            {
                path: '/vendor/products',
                name: 'products',
                // component: () => import('../pages/Products.vue'),
                component: () => import('../pages/CommingSoon.vue'),
                meta: {
                    name: 'Products',
                    permission: 'products.index'
                }
            },
            {
                path: '/vendor/users',
                name: 'users',
                component: () => import('../pages/Users.vue'),
                meta: {
                    name: 'Users',
                    permission: 'users.index'
                }
            },
        ]
    },
    {
        path: '/master',
        component: () => import('../layouts/MasterLayout.vue'),
        children: [
            {
                path: '',
                name: 'dashboard',
                component: () => import('../pages/master/DashboardPage.vue'),
                meta: {
                    name: 'Home',
                    permission: 'me'
                }
            },

            {
                path: '/master/requests',
                name: 'requests',
                component: () => import('../pages/RequestList.vue'),
                meta: {
                    name: 'Request',
                    permission: 'reqests.index'
                }
            },
            {
                path: '/products',
                name: 'products',
                // component: () => import('../pages/Products.vue'),
                component: () => import('../pages/CommingSoon.vue'),
                meta: {
                    name: 'Products',
                    permission: 'products.index'
                }
            },
            {
                path: '/users',
                name: 'users',
                component: () => import('../pages/Users.vue'),
                meta: {
                    name: 'Users',
                    permission: 'users.index'
                }
            },

            // {
            //     path: 'users/:id',
            //     name: 'user',
            //     props: true,
            //     component: () => import('../pages/UserPage.vue'),
            //     meta: {
            //         name: 'User',
            //         permission: 'users.show'
            //     },
            //     beforeEnter: async (to) => {
            //         try {
            //             const user = useUserStore()
            //             await user.getModel(to.params.id, ['roles'])
            //         } catch (error) {
            //             return false
            //         }
            //     }
            // }
        ]
    },
    {
        path: '/login',
        component: () => import('../layouts/LoginLayout.vue'),
        children: [
            {
                path: '',
                name: 'login',
                component: () => import('../pages/LoginPage.vue')
            }
        ]
    }
]

export default routes

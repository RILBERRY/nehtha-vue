import {  } from '../store/user'

const routes = [
    {
        path: '',
        component: () => import('../layouts/CustomerLayout.vue'),
        children: [
            {
                path: '',
                name: 'dashboard',
                component: () => import('../pages/customer/DashboardPage.vue'),
                meta: {
                    name: 'Home',
                    permission: 'me'
                }
            },
            {
                path: '/memo/create',
                name: 'create-memos',
                component: () => import('../pages/customer/CreateMemo.vue'),
                meta: {
                    name: 'Memo',
                    permission: 'products.index'
                }
            },
            {
                path: '/memo',
                name: 'memos',
                // component: () => import('../pages/customer/Products.vue'),
                component: () => import('../pages/customer/CreateMemo.vue'),
                meta: {
                    name: 'Memo',
                    permission: 'products.index'
                }
            },
            {
                path: 'requests',
                name: 'requests',
                component: () => import('../pages/customer/RequestList.vue'),
                meta: {
                    name: 'Request',
                    permission: 'reqests.index'
                }
            },
        ]
    },
    {
        path: '/vendor',
        component: () => import('../layouts/VendorsLayout.vue'),
        children: [
            {
                path: '',
                name: 'vendor-dashboard',
                component: () => import('../pages/vendor/DashboardPage.vue'),
                meta: {
                    name: 'VendorHome',
                    permission: 'me'
                }
            },

            {
                path: '/vendor/requests',
                name: 'vendor-requests',
                component: () => import('../pages/vendor/RequestList.vue'),
                meta: {
                    name: 'VendorRequest',
                    permission: 'reqests.index'
                }
            },
            {
                path: '/vendor/products',
                name: 'vendor-products',
                // component: () => import('../pages/vendor/Products.vue'),
                component: () => import('../pages/vendor/CommingSoon.vue'),
                meta: {
                    name: 'VendorProducts',
                    permission: 'products.index'
                }
            },
            {
                path: '/vendor/users',
                name: 'vendor-users',
                component: () => import('../pages/vendor/Users.vue'),
                meta: {
                    name: 'VendorUsers',
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
                name: 'master-dashboard',
                component: () => import('../pages/master/DashboardPage.vue'),
                meta: {
                    name: 'MasterHome',
                    permission: 'me'
                }
            },

            {
                path: '/master/requests',
                name: 'master-requests',
                component: () => import('../pages/master/RequestList.vue'),
                meta: {
                    name: 'MasterRequest',
                    permission: 'reqests.index'
                }
            },
            {
                path: '/products',
                name: 'master-products',
                // component: () => import('../pages/master/Products.vue'),
                component: () => import('../pages/master/CommingSoon.vue'),
                meta: {
                    name: 'MasterProducts',
                    permission: 'products.index'
                }
            },
            {
                path: '/users',
                name: 'master-users',
                component: () => import('../pages/master/Users.vue'),
                meta: {
                    name: 'MasterUsers',
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

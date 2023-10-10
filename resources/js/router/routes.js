import { useUserStore } from '../store/user'

const routes = [
    {
        path: '/',
        component: () => import('../layouts/DashboardLayout.vue'),
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

            // {
            //     path: 'users',
            //     name: 'users',
            //     component: () => import('../pages/UsersPage.vue'),
            //     meta: {
            //         name: 'Users',
            //         permission: 'users.index'
            //     }
            // },

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
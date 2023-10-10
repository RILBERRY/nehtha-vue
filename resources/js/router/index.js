import { createRouter, createWebHashHistory } from 'vue-router'
import { useUserStore } from '../store/user'
import routes from './routes'
import { can } from '../auth'

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

// enable code below to guard routes if not authenticated or does not have permission

// const exempt = ['login']

// router.beforeEach((to, from, next) => {
//     if (exempt.includes(to.name)) {
//         return next()
//     }

//     const user = useUserStore()

//     if (user.auth == null) {
//         return next({
//             name: 'login',
//             query: {
//                 redirect: to.fullPath
//             }
//         })
//     }

//     if (can(to.meta.permission)) {
//         return next()
//     }

//     return next(false)
// })

export default router

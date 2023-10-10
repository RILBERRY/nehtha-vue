import { api } from './axios'

class Auth {
    constructor() {
        this.token = localStorage.getItem('token') || null
        this.setAuthorizationHeader(this.token)

        this.profile = {}
        this.roles = {}
        this.permissions = {}
    }

    isLoggedIn() {
        return !!this.id
    }

    hasToken() {
        return !!this.token
    }

    is(roles) {
        if (typeof roles == 'string') {
            roles = roles.split(',')
        }

        return roles.some(role => {
            role = role.toLowerCase()
            return this.roles[role] ? true : false
        })
    }

    can(permissions) {
        if (typeof permissions == 'string') {
            permissions = permissions.split(',')
        }

        return permissions.some(permission => {
            return this.permissions[permission] ? true : false
        })
    }

    async login(email, password) {
        return new Promise((resolve, reject) => {
            api.post('login', { email, password })
                .then(response => {
                    this.token = response.data.token
                    localStorage.setItem('token', this.token)
                    this.setAuthorizationHeader(this.token)
                    resolve(this)
                }).catch(error => {
                    reject(error)
                })
        })
    }

    async me() {
        return new Promise((resolve, reject) => {
            api.get('me')
                .then(response => {
                    this.setData(response.data)
                    this.setRoles(response.data)
                    this.setPermissions(response.data)
                    resolve(this)
                }).catch(error => {
                    this.resetAll()
                    reject(error)
                })
        })
    }

    async logout() {
        return new Promise((resolve, reject) => {
            api.post('logout')
                .then(() => {
                    this.resetAll()
                    resolve(this)
                }).catch(error => {
                    reject(error)
                })
        })
    }

    setAuthorizationHeader(token = null) {
        api.defaults.headers.common['Authorization'] = token ? 'Bearer ' + token : null
    }

    resetAll() {
        localStorage.removeItem('token')
        this.token = null
        this.setAuthorizationHeader(null)
        this.unsetData()
        this.unsetRoles()
        this.unsetPermissions()
    }

    setData(data) {
        let user = {
            id: data.id,
            name: data.name,
            email: data.email,
        }

        this.profile = Object.assign({}, {}, user)

        for (const key in this.profile) {
            this[key] = this.profile[key]
        }
    }

    unsetData() {
        for (const key in this.profile) {
            delete this[key]
        }

        this.profile = {}
    }

    setRoles(data) {
        data.roles.forEach(role => {
            role = role.toLowerCase()
            this.roles[role] = true
        })
    }

    unsetRoles() {
        this.roles = {}
    }

    setPermissions(data) {
        this.permissions = Object.assign({}, {}, data.permissions)
    }

    unsetPermissions() {
        this.permissions = {}
    }
}

const auth = new Auth()

/**
 * Check if authenticated user has a given permission
 * @param {string|array} permissions
 * @returns boolean
 */
const can = (permissions) => auth.can(permissions)

/**
 * Check if authenticated user has a given role
 * @param {string|array} roles
 * @returns boolean
 */
const is = (roles) => auth.is(roles)

/**
 * Get permissions for a given resource routes
 * @param {string} resource resource name
 * @param {string|array} routes route names
 * @returns array
 */
const getPermissionsFor = (resource, routes = ['store', 'update', 'destroy']) => {

    if (typeof routes == 'string') {
        routes = routes.split(',')
    }

    let permissionObject = {}

    routes.forEach(key => permissionObject[key] = can(`${resource}.${key}`))

    return permissionObject
}

export default auth

export { can, is, getPermissionsFor }

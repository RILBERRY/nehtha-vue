import { defineStore } from "pinia";
import { ref } from "vue";


export const useUserStore = defineStore('user', () => {

    const auth = ref(null)

    const setAuth = (payload) => auth.value = payload

    return {
        auth,
        setAuth
    }
})

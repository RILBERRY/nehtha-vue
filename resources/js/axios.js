import axios from "axios"

let url = import.meta.env.VITE_API_REQUEST_URL

const api = axios.create({ baseURL: url })

// set any default headers here

export { axios, api }

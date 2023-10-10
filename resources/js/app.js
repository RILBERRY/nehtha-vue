import '../sass/app.scss'
import router from './router'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './components/App.vue'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')

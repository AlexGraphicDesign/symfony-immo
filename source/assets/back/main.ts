import { createApp } from 'vue'
import './style.css'
import App from '@back/App.vue'
import router from '@back/router'

createApp(App).use(router).mount('#app')

import { createApp } from 'vue';
import App from './components/App.vue';
import axios from 'axios';

createApp(App).mount('#app');

window.axios = axios;

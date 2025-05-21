import '../bootstrap.js';
import { createApp } from 'vue';
import App from './vue/app.vue';


const loginApp = createApp({});
loginApp.component('app', App);
loginApp.mount('#login-app');

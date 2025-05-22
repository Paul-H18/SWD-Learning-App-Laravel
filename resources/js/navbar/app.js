import '../bootstrap.js';
import { createApp } from 'vue';
import Navbar from './vue/Navbar.vue';


const navbar = createApp({});
navbar.component('navbar', Navbar);
navbar.mount('#navbar');

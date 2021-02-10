require ('./bootstrap');
window.Vue = require('vue')
import Vuetify from '../plugins/vuetify'
import router from './router'


Vue.component('mainpage',require('./components/MainPage.vue').default)
//Vue.component('navbar',require('./components/Navbar.vue'))


const app = new Vue({
    vuetify: Vuetify,
    el:'#app',
    router
})
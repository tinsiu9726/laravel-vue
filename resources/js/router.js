import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import Home from './components/Home.vue'
import Address from './components/Address.vue'

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/address',
        component: Address
    },
]

export default new Router({
    mode: 'history',
    routes 
})
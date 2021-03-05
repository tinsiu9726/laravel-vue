import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import Home from './components/Home.vue'
import Form from './components/Form.vue'
import Address from './components/Address.vue'

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/form',
        component: Form
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
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import router from "./router";
import App from './components/App'


Vue.use(VueRouter)
Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    vuetify: new Vuetify({
        theme: {
            themes: {
                light: {
                    danger: '#F4511E',
                    primary: '#ff6f00', // #E53935
                    secondary: '#F4511E', // #FFCDD2
                    accent: '#FF6F00', // #3F51B5
                },
            },
        },
    })
});
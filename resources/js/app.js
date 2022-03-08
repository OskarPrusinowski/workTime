import Vue from 'vue'
import mainVue from "./components/mainVue"
import routes from "./routes"
import VueResource from "vue-resource"
import Vuetify from 'vuetify'

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(Vuetify);
console.log(Vuetify)
const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
    router: new VueRouter(routes),
    components: {
        mainVue
    }
});

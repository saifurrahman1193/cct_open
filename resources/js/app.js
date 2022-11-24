require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Vuetify from 'vuetify';
import StoreData from './store';


import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'

import Chartkick from 'vue-chartkick'
import Chart from 'chart.js'

Vue.use(Chartkick.use(Chart))


Vue.use(VueRouter)
Vue.use(Vuex)
Vue.use(Vuetify)

const store = new Vuex.Store(StoreData);


import {routes} from './routes';
let router = new VueRouter({
  routes: routes,
  mode: 'history', // will turn off some backward compatibility
  history: true,
  linkActiveClass: 'active'
});


// console.log('===================called==========================================')
        // console.log($route)

        // if (this.$route.query.token.length>50) {
        //     localStorage.setItem('token', this.$route.query.token);
        // }



// vue-meta
import VueMeta from 'vue-meta'
Vue.use(VueMeta)


// import plugin
import { TiptapVuetifyPlugin } from 'tiptap-vuetify'
// don't forget to import CSS styles
import 'tiptap-vuetify/dist/main.css'
// Vuetify's CSS styles
import 'vuetify/dist/vuetify.min.css'
// Vuetify Object (as described in the Vuetify 2 documentation)
const vuetify = new Vuetify()

Vue.use(TiptapVuetifyPlugin, {
    // the next line is important! You need to provide the Vuetify Object to this place.
    vuetify, // same as "vuetify: vuetify"
    // optional, default to 'md' (default vuetify icons before v2.0.0)
    iconsGroup: 'md'
  })



router.beforeEach((to, from, next) => {


    if (to.matched.some(record => record.meta.requiresLogin))
    {
        var isLoggedIn = false;
        var routenames = []

        function promiseHandler(is_looged_in, rnames = []){
            isLoggedIn = is_looged_in
            routenames = rnames
        };

        function afterPromise()
        {
            var routeName = router.currentRoute.name;


            if (isLoggedIn)
            {
                // console.log(routenames);
                // console.log(routeName);
                if ( routenames.includes(routeName) )
                {
                    next()
                }
                else{
                    next("/admin/dashboard")
                }
            }
            else
            {
                next("/admin")
            }
        }

        async function myPromise(){
            var promise = new Promise( (resolve, reject) => {
                axios.post('/api/auth/me?token='+localStorage.getItem('token'))
                .then(function (response) {
                    resolve(
                        promiseHandler(true, response.data.routenames)
                    );
                })
                .catch(function (error) {
                    resolve(
                        promiseHandler(false)
                    );
                })
            })
            await promise;
            afterPromise()
        }

        myPromise()

    }


    next()
})






// Vue.component('logincomponent', require('./components/LoginComponent.vue').default);


// frontend component registration
// components

// Vue.component('subheading_f', require('./frontend/components/subheading.vue').default);
// Vue.component('ourservices_f', require('./frontend/components/ourservices.vue').default);
// Vue.component('subservices_f', require('./frontend/components/subservices.vue').default);
// Vue.component('homecontainer_f', require('./frontend/components/homecontainer.vue').default);
// Vue.component('slider_f', require('./frontend/components/slider.vue').default);
// frontend component registration


// import homeapp from "./Home";
import maincontainer from "./frontend/components/maincontainer.vue";
import commonMethodMixin from "./mixins/common.vue";
// import logincomponent from "./components/LoginComponent.vue";

Vue.mixin(commonMethodMixin)

const app = new Vue({
    el: '#app',
    router,
    store,
    components: { maincontainer },
    vuetify: new Vuetify({
        icons: {
          iconfont: 'mdiSvg', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
        },
      }),
});

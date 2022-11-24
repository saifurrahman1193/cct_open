"use strict";

var _vue = _interopRequireDefault(require("vue"));

var _vueRouter = _interopRequireDefault(require("vue-router"));

var _vuex = _interopRequireDefault(require("vuex"));

var _vuetify = _interopRequireDefault(require("vuetify"));

var _store = _interopRequireDefault(require("./store"));

require("vuetify/dist/vuetify.min.css");

require("material-design-icons-iconfont/dist/material-design-icons.css");

var _vueChartkick = _interopRequireDefault(require("vue-chartkick"));

var _chart = _interopRequireDefault(require("chart.js"));

var _routes = require("./routes");

var _tiptapVuetify = require("tiptap-vuetify");

require("tiptap-vuetify/dist/main.css");

var _maincontainer = _interopRequireDefault(require("./frontend/components/maincontainer.vue"));

var _common = _interopRequireDefault(require("./mixins/common.vue"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

require('./bootstrap');

_vue["default"].use(_vueChartkick["default"].use(_chart["default"]));

_vue["default"].use(_vueRouter["default"]);

_vue["default"].use(_vuex["default"]);

_vue["default"].use(_vuetify["default"]);

var store = new _vuex["default"].Store(_store["default"]);
var router = new _vueRouter["default"]({
  routes: _routes.routes,
  mode: 'history',
  // will turn off some backward compatibility
  history: true,
  linkActiveClass: 'active'
}); // import plugin

// Vuetify Object (as described in the Vuetify 2 documentation)
var vuetify = new _vuetify["default"]();

_vue["default"].use(_tiptapVuetify.TiptapVuetifyPlugin, {
  // the next line is important! You need to provide the Vuetify Object to this place.
  vuetify: vuetify,
  // same as "vuetify: vuetify"
  // optional, default to 'md' (default vuetify icons before v2.0.0)
  iconsGroup: 'md'
});

router.beforeEach(function (to, from, next) {
  if (to.matched.some(function (record) {
    return record.meta.requiresLogin;
  })) {
    setTimeout(function () {
      // console.log(' this.isLoggedIn ============================== '+store.state.isLoggedIn)
      if (store.getters.getIsLoggedIn) {
        next();
      } else {
        next("/login?redirectedFrom=" + router.currentRoute.name);
      }
    }, 6000);
  } else if (to.matched.some(function (record) {
    return record.meta.requiresAdminLogin;
  })) {
    setTimeout(function () {
      // console.log(' this.isLoggedIn ============================== '+store.state.isLoggedIn)
      if (store.getters.getIsAdminLoggedIn) {
        console.log('current route name= ' + router.currentRoute.name + ', path = ' + router.currentRoute.path + ', module = ' + router.currentRoute.module);
        console.log('user modules = ' + store.getters.getCurrentUserModules);
        console.log('user modules = ' + store.getters.getCurrentUserModules.length);
        var routeName = router.currentRoute.name;

        if (store.getters.getCurrentUserModulesRouteNames.includes(routeName)) {
          next();
        } else {
          next("/admin/dashboard");
        }
      } else {
        next("/admin");
      }
    }, 6000);
  }

  next();
}); // Vue.component('logincomponent', require('./components/LoginComponent.vue').default);
// frontend component registration
// components
// Vue.component('subheading_f', require('./frontend/components/subheading.vue').default);
// Vue.component('ourservices_f', require('./frontend/components/ourservices.vue').default);
// Vue.component('subservices_f', require('./frontend/components/subservices.vue').default);
// Vue.component('homecontainer_f', require('./frontend/components/homecontainer.vue').default);
// Vue.component('slider_f', require('./frontend/components/slider.vue').default);
// frontend component registration
// import homeapp from "./Home";

// import logincomponent from "./components/LoginComponent.vue";
_vue["default"].mixin(_common["default"]);

var app = new _vue["default"]({
  el: '#app',
  router: router,
  store: store,
  components: {
    maincontainer: _maincontainer["default"]
  },
  vuetify: new _vuetify["default"]({
    icons: {
      iconfont: 'mdiSvg' // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'

    }
  })
});
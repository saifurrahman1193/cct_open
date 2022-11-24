window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');

} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'Content-Type': 'application/json;charset=UTF-8;application/x-www-form-urlencoded',
    "Access-Control-Allow-Origin": true,
    "Access-Control-Allow-Credentials": true,
    "Access-Control-Allow-Methods": "GET, POST, PATCH, PUT, DELETE, OPTIONS",
    "Access-Control-Allow-Headers": "Origin, Content-Type, X-Auth-Token, Accept, X-Access-Token, X-Key, x-hny-team",
    "Accept" : 'application/json, text/plain, */*'
};


import Echo from "laravel-echo"
window.Pusher = require('pusher-js')

 window.Echo = new Echo({
     broadcaster: 'pusher',

     key: '43028143efe8a2d5a3f5',
     cluster: 'ap2',
     encrypted: true,
     authEndpoint: '/api/broadcasting/auth',
     auth: {
        headers: {
          Accept: 'application/json',
          Authorization: 'Bearer ' + localStorage.getItem('token')
        },
      }



});
//  key: process.env.MIX_PUSHER_APP_KEY,
//  cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//  authEndpoint: '/broadcasting/auth',


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./jquery.appear.js');
require('./countTo.js');

require('inputmask/dist/inputmask/jquery.inputmask');
require('inputmask/dist/inputmask/inputmask.extensions');
require('inputmask/dist/inputmask/inputmask.phone.extensions');
require('inputmask/dist/inputmask/bindings/inputmask.binding');

window.Vue = require('vue');
Vue.use(require('vue-cookies'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('header_branch_selector', require('./components/headerBranchSelector.vue').default);

const app = new Vue({
    el: '#app'
});

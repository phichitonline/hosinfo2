require('./bootstrap');

require('alpinejs');

import Vue from 'vue';

//register component
Vue.component('vue-testpage', require('./components/TestComponent.vue').default);

//initialize vue
const app = new Vue({
    el: '#app',
});

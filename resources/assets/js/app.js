import "core-js/es/object/assign";
import Vue from 'vue';

import App from '../components/App.vue';
import router from './router.js';
import store from './store';
console.log('dadadadad');
var app = new Vue({
  el: '#app',
  render: h => h(App),
  router,
  store
});

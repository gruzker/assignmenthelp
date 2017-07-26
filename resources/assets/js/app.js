require('./bootstrap');

import Vue from 'vue'

// Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
  el: '#app',
  data: {
  	isMenuActive: false,
  }
});


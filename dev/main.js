import Vue from 'vue'
import App from './App.vue'

/*Add the data base connection 11.28*/
// import VueResource from 'vue-resource';

import vueEventCalendar from '../src/'
// import vueEventCalendar from '../dist'
// import '../dist/style.css'
Vue.use(vueEventCalendar, {locale: 'en', weekStartOn: 1})

/*added on 11.28*/
// Vue.use(VueResource)

new Vue({
  el: '#app',
  render: h => h(App)
})

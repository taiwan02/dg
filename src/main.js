import Vue from 'vue'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
// import VueParticles from 'vue-particles'
import headers from './views/header.vue'  
import 'lib-flexible'
import App from './App.vue'
import router from './router'
Vue.component('headers', headers)

Vue.use(ElementUI);
Vue.use(headers);
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

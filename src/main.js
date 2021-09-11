import Vue from 'vue'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import VueParticles from 'vue-particles'
// import './utils/flexible'  
import 'lib-flexible'
import App from './App.vue'
import router from './router'


Vue.use(ElementUI);
Vue.use(VueParticles);
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

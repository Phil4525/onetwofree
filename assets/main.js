
// import Vue from 'vue'
import Vue from "vue/dist/vue.js"
import App from './App.vue'
import VueRouter from 'vue-router'

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";
import { faCircleNotch } from "@fortawesome/free-solid-svg-icons";
import {
  faLinkedin,
  faTwitter,
  faFacebookMessenger,
  faInstagram,
  faMedium
} from "@fortawesome/free-brands-svg-icons";


library.add(
  faCircleNotch,
  faLinkedin,
  faTwitter,
  faFacebookMessenger,
  faInstagram,
  faMedium
);

Vue.component('font-awesome-icon', FontAwesomeIcon)


import { BootstrapVue } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)

Vue.config.productionTip = false

import Contact from './page/Contact'
import Works from './page/Works'
import Talent from './page/Talent'
import Agence from './page/Agence'
import Mentions from './page/Mentions'
import Accueil from './page/Accueil'
import FormulaireCR from './components/FormulaireCR'
import FormulaireBrief from './components/FormulaireBrief'
import CreationRefonte from './page/CreationRefonte'
import IdentiteMarque from './page/IdentiteMarque'
import Reseaux from './page/Reseaux'
import SitesEcommerce from './page/SitesEcommerce'
import StrategieContent from './page/StrategieContent'
import DeveloppementCode from './page/DeveloppementCode'
import StratDigitale from './page/StratDigitale'
import Realisations from './page/Realisations'
import WorksTest from './page/WorksTest'











const routes = [
  { path: '/contact', name: 'contact', component: Contact },
  { path: '/works', name: 'works', component: Works },
  { path: '/talent', name: 'talent', component: Talent },
  { path: '/agence', name: 'agence', component: Agence },
  { path: '/Mentions', name: 'Mentions', component: Mentions },
  { path: '/Accueil', name: 'Accueil', component: Accueil },
  { path: '/', redirect: { name: 'Accueil' }, component: Accueil },
  { path: '/FormulaireCR', name: 'FormulaireCR', component: FormulaireCR },
  { path: '/FormulaireBrief', name: 'FormulaireBrief', component: FormulaireBrief },
  { path: '/CreationRefonte', name: 'CreationRefonte', component: CreationRefonte },
  { path: '/IdentiteMarque', name: 'IdentiteMarque', component: IdentiteMarque },
  { path: '/Reseaux', name: 'Reseaux', component: Reseaux },
  { path: '/SitesEcommerce', name: 'SitesEcommerce', component: SitesEcommerce },
  { path: '/StrategieContent', name: 'StrategieContent', component: StrategieContent },
  { path: '/DeveloppementCode', name: 'DeveloppemengtCode', component: DeveloppementCode },
  { path: '/StratDigitale', name: 'StratDigitale', component: StratDigitale },
  { path: '/Realisations', name: 'Realisations', component: Realisations },
  { path: '/WorksTest', name: 'WorksTest', component: WorksTest },








]

const router = new VueRouter({
  routes // short for `routes: routes`
})
Vue.use(VueRouter)

new Vue({
  render: h => h(App),
  router,
})
  .$mount('#app')
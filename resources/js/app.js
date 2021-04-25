require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'

Vue.component('lastGame', require('./components/ScoreComponent.vue').default)
Vue.component('leaderboard', require('./components/LeaderboardComponent.vue').default)
Vue.component('createGame', require('./components/CreateGame.vue').default)

const app = new Vue({
    el: '#app',
    store
});

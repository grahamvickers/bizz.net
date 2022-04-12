require('./bootstrap');
import Vue from 'vue';
import Vuex from 'vuex';

import App from './components/App.vue';
import router from './router';

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: null,
    },
    mutations: {
        user (state, UserData) {
            state.user = UserData;
        }
    }
});

new Vue ({
    el: '#app',
    router,
    store,
    components: {App}
});


console.log("dynamic nav");

function showNav() {
    document.getElementById("navOverCon").style.width = "100%";
}
  
function hideNav() {
    document.getElementById("navOverCon").style.width = "0%";
}
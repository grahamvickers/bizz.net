import Vue from 'vue';
import Router from 'vue-router';
import Home from '../components/Home.vue';
import Profile from '../components/Profile.vue';
import Listing from '../components/Listing.vue';
import Create from '../components/Create.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }, 
        {
            path: '/create',
            name: 'create',
            component: Create
        }, 
        {
            path: '/profile',
            name: 'profile',
            component: Profile
        }, 
        {
            path: '/:id',
            name: 'listing',
            component: Listing
        }
    ]
});
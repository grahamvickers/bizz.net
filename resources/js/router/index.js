import Vue from 'vue';
import Router from 'vue-router';
import Home from '../components/Home.vue';
import Profile from '../components/Profile.vue';
import Listing from '../components/Listing.vue';
import CreateListing from '../components/Create.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
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
        }, 
        {
            path: '/create',
            name: 'create',
            component: CreateListing
        }
    ]
});
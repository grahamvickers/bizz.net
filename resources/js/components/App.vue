<template>
    <div class="wrapper">
        <nav id="sidebar" :class="{'closed': !showSidebar}">
            <div class="img"></div>
            <div class="sidebar-header">
                <h1>Vue Dashboard</h1>
            </div>
            <div class="links">
                <router-link to="/" class="btn btn-block btn-light">
                    Dashboard
                </router-link>
                <router-link to="/create" class="btn btn-block btn-light">
                    create
                </router-link>
                <logout />
            </div>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                <button type="button" class="btn btn-dark btn-sm" @click="showSidebar = !showSidebar">
                    <span v-if="showSidebar" class="fa fa-times"></span>
                    <span v-else class="fa fa-bars"></span>
                </button>
                <router-link to="/profile" class="h4 d-block float-right text-dark">
                    <span class="fa fa-user"></span>
                </router-link>
            </nav>
            <div class="pt-3 pb-3">
                <router-view v-bind:listings="theListings" />

            </div>
        </div>
    </div>
</template>

<script>
    import Logout from './partials/logout.vue';

    export default {
        name: 'app',
        data() {
            return {
                theListings: [],
                showSidebar: true
            }
        },
        created: function() {
            let vm = this;
            fetch(`http://localhost:8082/api/get-listings`) 
            .then(function(response){
            return response.json();
            }).then(function(data){
                // console.log(data)
                vm.theListings = data;
            })
        },
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        
        components: {
            Logout
        },

        // data() {
        //     return{
        //     }
        // },

        mounted() {
            //console.log(this.user);
            this.$store.commit('user', this.user);
            //console.log(this.$store.user);
        }
    }
</script>

<style lang="scss" scoped>

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    #content {
        background: #f8f9fa;
        padding:15px;

        .navbar {
            padding:0 !important;
        }
    }

    #sidebar {
        width: 250px;
        min-height: 100vh;
        transition: all 0.3s;
        position:relative;
        padding:15px;
        color:white;

        &:after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(27,27,27,.67);
            z-index: -1;
        }

        .img {
            content: '';
            position:absolute;
            top:0;
            left:0;
            z-index:-1;
            width:100%;
            height:100%;
            background:url('/images/nav-bg.jpg');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
        }

        h1 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            border-bottom: 1px solid;
            padding-bottom: 12px;
        }

        .links {
            background:transparent;
            padding:5px 0;

            .router-link-exact-active {
                background:#007bff;
                border-color:#007bff;
                color:white;
            }
        }

        &.closed {
            margin-left: -250px;
        }
    }

    #content {
        width: 100%;
    }
</style>


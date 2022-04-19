<template>
    <div>
        <NavCon />
        <div>
            <div >
                <router-view v-bind:listings="theListings" />
            </div>
        </div>
    </div>
</template>

<script>
    import NavCon from './partials/nav.vue';
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
            NavCon,
            Logout
            
        },

        mounted() {
            //console.log(this.user);
            this.$store.commit('user', this.user);
            //console.log(this.$store.user);
        }
    }
</script>

<style lang="scss">

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    #content {
        background: #f8f9fa;
        // padding: 30px;
        // display: flex;
        // margin: 0 auto;
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


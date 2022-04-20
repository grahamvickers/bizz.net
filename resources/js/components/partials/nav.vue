<template>
    <div>
      <header id="mainHead"> 
        <router-link to="/"><img src="images/bizznet_logo.svg" alt="Bizz.net logo" id="logo" ></router-link>


        <!-- desktop nav -->
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                
                <li><router-link to="/">Listings</router-link></li>
                <li><a href="#">Chat</a></li>
                <li><router-link to="/create">Create Listing</router-link></li>
                <li id="buffer"><router-link to="/settings">Settings</router-link></li>
                <li><logout /></li>
            </ul>
        </nav>

        <!-- hambuger nav -->
        <span id="hmbgrMenu" style="font-size:30px;cursor:pointer;color: #3C35F2;" @click="showNav()"><img src="images/nav_btn.svg" alt="Navigation Button - Click to expand"></span>

        <div id="navOverCon" class="overlay">
            <h2 class="hidden">Main Navigation</h2>
            <a  class="closebtn" @click="hideNav()">&times;</a>
            
            <div class="overlay-con">
                <ul>
                    <li><a href="/listings" @click="hideNav()">Listings</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="/listings#/create" @click="hideNav()">Create Listing</a></li>
                    <li><a href="/listings#/settings" @click="hideNav()">Settings</a></li>
                    <li ><logout id="mobileBtn"/></li>
                    
                </ul>
            </div>
        </div>
    </header>
    </div>
</template>

<script>
    import Logout from './logout.vue';

export default {
    components: {
        Logout
    },
    methods: {
        showNav() {
            document.getElementById("navOverCon").style.width = "100%";
        },
        
        hideNav() {
            document.getElementById("navOverCon").style.width = "0%";
        }
    }
}
</script>


<style lang="scss">
#mobileBtn{
    background: none;
    color: #f2f2f2;
    // padding: none;
    button{
        margin-left: none !important;
    }
}

#buffer{
    margin-right: 20px;
}
</style>
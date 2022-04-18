<template>
    <div>
      <header id="mainHead"> 
        <router-link to="/"><img src="/images/bn_icon_1.svg" alt="Royal Hunt Logo" id="logo" ></router-link>


        <!-- desktop nav -->
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                
                <li><router-link to="/">LISTINGS</router-link></li>
                <li><router-link to="/create">CREATE LISTING</router-link></li>
                <li><router-link to="/settings">SETTINGS</router-link></li>
                <li><logout /></li>
            </ul>
        </nav>

        <!-- hambuger nav -->
        <span id="hmbgrMenu" style="font-size:30px;cursor:pointer;color: #3C35F2;" onclick="showNav()">&#9776; </span>

        <div id="navOverCon" class="overlay">
            <h2 class="hidden">Main Navigation</h2>
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="hideNav()">&times;</a> -->
            <div class="overlay-con">
                <ul>
                    <li><a href="/listings">LISTINGS</a></li>
                    <li><a href="/listings#/create">CREATE LISTING</a></li>
                    <li><a href="/listings#/profile">SETTINGS</a></li>
                    <li><logout /></li>
                    
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
    }
}
</script>
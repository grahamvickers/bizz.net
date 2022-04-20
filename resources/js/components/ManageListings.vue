<template>
    <div>
        <section id="contentCon">
            <h2>Manage your listings</h2>
            <h3>You have no active listings at this time. Create one and check back here!</h3>
            <router-link class="button" to="/create">Create Listing</router-link>
        </section>
    </div>
</template>

<style lang="scss" scoped>
h3{
    margin: 60px 0px;
    margin-bottom: 40px;
}

.button{
    // margin: 60px 0px;
    margin-bottom: 100px;
    } 

@media screen and (min-width: 780px) {
    
    .button{
    // margin: 60px 0px;
    margin-bottom: 240px;
    }   
}
</style>
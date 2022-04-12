<template>
    <div>
        <h1>Welcome to Vue Dashboard</h1>

         <section id="listings">
            <h2 class="hidden">List of listings</h2>
            <div v-for="listing in listings" v-bind:key="listing.id" class="listingCon">
                <div class="image" :style="`background:url(./images/${listing.img})`"></div>
                <h3>{{listing.name}}</h3>
                <h3>{{listing.price}}</h3>
                <p>{{listing.address}}</p>
                <p>Profit Margin: {{listing.profit}}</p>
                <router-link :to="`/${listing.id}`" class="button">READ MORE</router-link>
            </div>
        </section>
    </div>
</template>

<script>
    export default {   
        props: ['listings'],

    }
</script>
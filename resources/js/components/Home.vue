<template>
<div>
    <section class="landing">
        <h2>Find Your Next Venture Capital Project Today!</h2>
        <p>Explore 10,000+ businesses for sale across North America.</p>
    </section>

    <div id="contentCon">
        <!-- live search -->
        <section id="searchCon">
            <form>
                <label for="searchInput">Search:</label>
                <input type="search" id="searchInput Search" placeholder="ex. London" v-model="searchString">
            </form>
        </section>

        <!-- listings generated from api -->
        <section id="listings">
            <h2 class="hidden">List of listings</h2>
            <div v-for="listing in filteredListings" v-bind:key="listing.id" class="listingCon">
                <div>
                    <!-- the first div/image below is the proper storage link to the listing images in the
                    storage folder but storage is broken still for the listings. Their there but not populating 
                    -->
                    <!-- <div class="image" :style="{'background': `url(${listing.img})`}"></div> -->
                    <div class="image" :style="`background:url(./images/${listing.img})`"></div>
                    <h3>{{listing.name}}</h3>
                    <h3>${{listing.price}}</h3>
                    <p>{{listing.address}}</p>
                    <!-- <p class="profit">Profit Margin: {{listing.profit}} %</p> -->
                     <template>
                        <div>
                        <p v-if="`${listing.profit}` >= 20">Profit Margin: {{listing.profit}} % <span><img src="images/good.svg" alt="Green Thumbs Up Icon"></span></p>
                        <p v-else id="red">Profit Margin: {{listing.profit}} % <span><img src="images/bad.svg" alt="Red Thumbs Down Icon"></span></p>
                        </div>
                    </template>
                </div>
                
                <router-link :to="`/${listing.id}`" class="button bottomBtn">Read More</router-link>
            </div>
        </section>

        <div id="loadMore">
            <button class="button">Load More</button>
        </div>
    </div>
</div>

</template>

<script>
    export default { 
        data: function() {
            return {
                searchString: ""
            }
        },  
        props: ['listings'],
        computed: {
            // hasImg() {
            //     return listing
            //         ? listing.has_img
            //         :false
            // },
            filteredListings: function() {
                let listing_array = this.listings;
                let searchString = this.searchString;

                if(searchString===""){
                    return listing_array;
                }

                searchString = searchString.trim().toLowerCase();

                listing_array = listing_array.filter(function(listing) {
                    console.log(listing.city.toLowerCase().indexOf(searchString));
                    if(listing.city.toLowerCase().indexOf(searchString) !== -1) {
                        return listing;
                    }
                })

                return listing_array;
            }

        }
    }
</script>

<style lang="scss">
#loadMore{
    margin-top: 30px;
    display: flex;
    justify-content: center;
}
</style>
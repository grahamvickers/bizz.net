<template>
    <div>
      <section id="contentCon">
        <h1 class="hidden" >Selected Listing Page - now showing {{moreInfo[0].name}}</h1>
        <!-- <p>listings/{{moreInfo[0].name}}</p> -->
        <div>
          <template>
            <div>
              <p v-if="`${moreInfo[0].profit}` >= 20" id="green">Good Investment</p>
              <p v-else id="red">Risky Investment</p>
            </div>
          </template>
        </div>

        <div id="listingInfo">
          <div>
            <h2 >{{moreInfo[0].name}}</h2>
            <h3>${{moreInfo[0].price}}</h3>
            <p>{{moreInfo[0].address}}</p>
            <!-- <p>Profit Margin: {{moreInfo[0].profit}}%</p> -->
            <template>
                <div>
                  <p  v-if="`${moreInfo[0].profit}` >= 20">Profit Margin: {{moreInfo[0].profit}} % <span><img src="images/good.svg" alt="Green Thumbs Up Icon"></span></p>
                  <p v-else >Profit Margin: {{moreInfo[0].profit}} % <span><img src="images/bad.svg" alt="Red Thumbs Down Icon"></span></p>
                </div>
            </template>
            <div>
              <h2 class="hidden">Contact Options</h2>
              <button class="buttonIcons"><span><img src="images/call.svg" alt="Call/ Phone - Icon"></span></button>
              <button class="buttonIcons"><span><img src="images/email.svg" alt="Email - Icon"></span></button>
              <button class="buttonIcons"><span><img src="images/message.svg" alt="Message/Chat - Icon"></span></button>
            </div>
          </div>

          <div id="image" :style="`background:url(./images/${moreInfo[0].img})`"></div>

          <!-- <img :src="`/images/${moreInfo[0].img}`" alt="Exterior Photo of the business"> -->
        </div>

        <div>
          <p>{{moreInfo[0].content}}</p>
        </div>
        
        <!-- <div>
          <canvas id="chart" width="400px" height="400px"></canvas>
        </div> -->

        <!-- <div>
          <listing-chart />
        </div> -->
        
        <!-- <div>
          <listing-bar-chart />
        </div> -->

        <div id="downloads">
          <button class="downloadBtn"><span><img src="images/download.svg" alt="download icon">Income Sheet</span></button>
          <button class="downloadBtn"><span><img src="images/download.svg" alt="download icon">Balance Sheet</span></button>
        </div>

        <div>
          <router-link id="center" class="button" to="/">View All Listings</router-link>
        </div>
      </section>

    </div>
</template>


<script>
  // import ListingChart from './partials/listing-chart.vue';
  // import ListingBarChart from './partials/listing-bar-chart.vue';
 
  export default {
    data() {
      return {
        moreInfo: {},
      }
    },
    components: {
      // ListingChart,
      // ListingBarChart
    },
    created() {
      let vm = this;
      let id = this.$route.params.id;

      // console.log(id);

      fetch(`http://localhost:8082/api/get-listings/?q=${id}`)
      .then(function(response){
        return response.json();
      })
      .then(function(data){
        vm.moreInfo = data;
      })
    },
    mounted() { 
      // let vm = this;

      // setTimeout(() => {
      //     const ctx = document.getElementById('chart').getContext('2d');
      //     const myChart = new Chart(ctx, {
      //         type: 'bar',
      //         data: {
      //             labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      //             datasets: [{
      //                 label: '# of Votes',
      //                 data: [12, 19, 3, 5, 2, 3],
      //                 backgroundColor: [
      //                     'rgba(255, 99, 132, 0.2)',
      //                     'rgba(54, 162, 235, 0.2)',
      //                     'rgba(255, 206, 86, 0.2)',
      //                     'rgba(75, 192, 192, 0.2)',
      //                     'rgba(153, 102, 255, 0.2)',
      //                     'rgba(255, 159, 64, 0.2)'
      //                 ],
      //                 borderColor: [
      //                     'rgba(255, 99, 132, 1)',
      //                     'rgba(54, 162, 235, 1)',
      //                     'rgba(255, 206, 86, 1)',
      //                     'rgba(75, 192, 192, 1)',
      //                     'rgba(153, 102, 255, 1)',
      //                     'rgba(255, 159, 64, 1)'
      //                 ],
      //                 borderWidth: 1
      //             }]
      //         },
      //         options: {
      //             scales: {
      //                 y: {
      //                     beginAtZero: true
      //                 }
      //             }
      //         }
      //     });
        
      //   }, 1000);
        
    }
    
  }
</script>

<style lang="scss" scoped>

#center{
  display: flex;
  justify-content: center;
  // margin: 0 auto;
  margin-top: 30px;
}
#image{
  width: 300px;
  height: 220px;
  border-radius: 5px;
  background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
  margin-top: 30px;
}

#downloads{
  margin-top: 20px;
}
#contentCon{
  div{
    margin-bottom: 10px;
  }
}
h2,h3{
  margin-bottom: 15px;
}

#green{
  color: #4FC666;
}

#red{
  color: #D05656;
}

@media screen and (min-width: 780px) {
  #listingInfo{
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    #image{
      margin-right: 30px;
      margin-top: 0;

    }
  }

  #center{
    display: flex;
    justify-content: center;
    // margin: 0 auto;
  }
}
</style>
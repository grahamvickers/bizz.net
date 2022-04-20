<template>
    <div>
      <section id="contentCon">
        <h1 class="hidden" >Selected Listing Page - now showing {{moreInfo[0].name}}</h1>

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
                  <p v-if="`${moreInfo[0].profit}` >= 20">Profit Margin: {{moreInfo[0].profit}} % <span><img src="images/good.svg" alt="Green Thumbs Up Icon"></span></p>
                  <p v-else id="red">Profit Margin: {{moreInfo[0].profit}} % <span><img src="images/bad.svg" alt="Red Thumbs Down Icon"></span></p>
                </div>
            </template>
          </div>

          <img :src="`/images/${moreInfo[0].img}`" alt="">
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

        <div>
          <h2 class="hidden">Contact Options</h2>
          <button class="button">CALL</button>
          <button class="button">EMAIL</button>
          <button class="button">MESSAGE</button>
        </div>
      </section>

    </div>
</template>


<script>
  // import ListingChart from './partials/listing-chart.vue';
 
  export default {
    data() {
      return {
        moreInfo: {},
      }
    },
    // components: {
    //   ListingChart
    // },
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
    img{
      margin-right: 30px;
    }
  }
}
</style>
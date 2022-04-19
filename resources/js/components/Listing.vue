<template>
    <div>
      <section id="contentCon">
        <h1 class="hidden" >Selected Listing Page - now showing {{moreInfo[0].name}}</h1>
        <div>
          <h2>{{moreInfo[0].name}}</h2>
          <h3>${{moreInfo[0].price}}</h3>
          <h3>{{moreInfo[0].address}}</h3>
          <img :src="`/images/${moreInfo[0].img}`" alt="">
          <p>{{moreInfo[0].content}}</p>
        </div>
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
  export default {
    data() {
      return {
        moreInfo: {},
      }
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
    
  }
</script>
<template>
    <div>
        <h1>LISTING</h1>
        <h2>{{moreInfo[0].name}}</h2>
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

      console.log(id);

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
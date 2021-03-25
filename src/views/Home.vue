<template>
  <div class="home">
    <p v-for="sz in Szemelyek" :key="sz.szemelyId">
      {{sz.szemelyNev}}
    </p>
  </div>
</template>

<script>
import dataService from '../services/dataservice';

export default {
  name: 'Home',
  data(){
    return{
      Szemelyek:[]
    }
  },
  components: {
    
  },
  mounted(){
dataService.szemelyek().then().catch(resp=> this.Szemelyek=resp.data)
  }
}
</script>

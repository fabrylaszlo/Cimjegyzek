<template>
<div>
  <fejlec/>
  <router-view/>
  <alja/>
</div>
  
</template>
<script>
import fejlec from '../src/components/fejlec'
import alja from '../src/components/footer'
export default {
  name:"App",
  components:{
    alja,
    fejlec
  }
}
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>

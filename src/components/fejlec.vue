<template>
  <div id="nav" class="container-fluid bg-secondary">
      <ul class="levesz">
          <li><router-link to="/">Home</router-link> </li>
          <li><router-link to="/search">Search</router-link></li>
          <li><router-link to="/login">Belép</router-link></li>
      </ul>

    
    
  </div>
</template>

<script>
export default {
name: "Fejlec"
}
</script>

<style>
.levesz{
    list-style-type: none;
  margin: 0;
  padding: 0;
  display:inline;
}
li{
    display:inline;
    padding:10px
}
#nav{
    margin-bottom: 20px;
}
</style>
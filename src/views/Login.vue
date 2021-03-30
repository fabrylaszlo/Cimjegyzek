<template>
  <div class="container-fluid">
    <fieldset>
      <legend>Beléptetés</legend>
      >
      <label for="password">Jelszó:</label>
      <input type="password" name="password" id="password" v-model="password" placeholder="******" required />
      <input type="button" value="Belépés" @click="belep" />

    </fieldset>
  </div>
</template>

<script>
import Home from '../views/Home.vue'
  export default {
    name: "Login",
    
        Footerdata() {
      return {
        password: "",
        loggedin:false
      }
    },
    componenst: {Home},
    methods: {
      belep() {     
        console.log("yeet");   
        if (this.password=="123") {
          this.loggedin=true;
        }
        else{this.loggeding=false;}
      }
    }
  }
</script>

<style>

</style>
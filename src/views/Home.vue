<template>
  <div class="home">
    <table>
      <tr>
        <th>Személy neve</th>
        <th>Telefonszám</th>
        <th>Lakhely</th>
        <th>E-mail</th>
        <th>Munkahely</th>
      </tr>
      <tr id="hozzaadsor">
        <td><input type='text' v-model='nev'></td>
        <td><input type='text' v-model='telefon'></td>
        <td><input type='text' v-model='lakhely'></td>
        <td><input type='text' v-model='email'></td>
        <td><input type='text' v-model='munkahely'></td>
        <td><input type='button' value='Hozzáad' @click='Hozzaad();'></td>
      </tr>
      <tr v-for="(szemely, index) in Szemelyek" :key="szemely.id">
        <td><input type='text' v-model='szemely.szemelyNev'></td>
        <td><input type='text' v-model='szemely.telefonSzam'></td>
        <td><input type='text' v-model='szemely.szemelyCim'></td>
        <td><input type='text' v-model='szemely.emailCim'></td>
        <td><input type='text' v-model='szemely.munkahely'></td>
        <td><input type='button' class="updatebutton gomb"  value='Frissít' @click='updateRecord(index,szemely.szemekyId);'>&nbsp;
          <input type='button' class="deletebutton gomb" value='Törlés' @click='deleteRecord(index,szemely.szemelyId)'>
        </td>
      </tr>

    </table>
  </div>
</template>

<script>
import dataService from '../services/dataservice';
  
  import axios from 'axios';
  export default {
    name: 'Home',
    data() {
      return {
        Szemelyek: [],
        nev: "",
        telefon: "",
        lakhely: "",
        email: "",
        munkahely:""
      }
    },    
    methods: {     
      Hozzaad: function () {
        if (this.nev != '' && this.lakhely != '' && this.email != '' && this.munkahely != '' && this.telefon != '') {
          axios.post('http://localhost/VUE/cimjegyzek/backend/hozzaad.php', {
              nev: this.nev,
              telefon: this.telefon,
              lakhely: this.lakhely,
              email: this.email,
              munkahely: this.munkahely
            }, {
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            })
            .then(function (response) {
              location.reload();

              alert(response.data);
            })
            .catch(function (error) {
              console.log(error);
            });
        } else {
          alert('Hiányzó adatok!.');
        }
      },
      updateRecord: function (index, szemelyId) {

        szemelyId = this.Szemelyek[index].szemelyId;
        var nev = this.Szemelyek[index].szemelyNev;
        var telefon = this.Szemelyek[index].telefonSzam;
        var lakhely = this.Szemelyek[index].szemelyCim;
        var email = this.Szemelyek[index].emailCim;
        var munkahely = this.Szemelyek[index].munkahely;
        if (nev != '' && email != '') {
          axios.post('http://localhost/VUE/cimjegyzek/backend/updaterecord.php', {
              szemelyId: szemelyId,
              nev: nev,
              telefon: telefon,
              lakhely: lakhely,
              email: email,
              munkahely: munkahely
            }, {
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            })
            .then(function (response) {
              location.reload();
              alert(response.data);
            })
            .catch(function (error) {
              console.log(error);
            });
        }
      },
      deleteRecord: function (index, szemelyId) {
        szemelyId = this.Szemelyek[index].szemelyId;
        axios.post('http://localhost/VUE/cimjegyzek/backend/torol.php', {
            szemelyId: szemelyId
          }, {
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            }
          })
          .then(function (response) {
            location.reload();

            alert(response.data);
          })
          .catch(function (error) {
            console.log(error);
          });
      }
    },
    mounted() {
      dataService.szemelyek().then(resp => this.Szemelyek = resp.data).catch()
    }
  }
</script>
<style scoped>
  table {
    text-align: center;
    position: absolute;
    align-self: center;
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
    
  }
  .home{
    
  }
</style>
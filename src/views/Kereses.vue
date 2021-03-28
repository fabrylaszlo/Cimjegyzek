<template>
    <div class="container-fluid align-items-center text-center">
        <form>
            <label for="">Title:</label>
            <input type="text" v-model="title">
            <input type="button" value="Search" @click="search">
        </form>
        <table>
            <tr>
                <th>Személy neve</th>
                <th>Telefonszám</th>
                <th>lakhely</th>                
            </tr>
            <tr v-for="sz in Szemelyek" :key="sz.szemelyId">
                <td>{{sz.szemelyNev}}</td>
                <td>{{sz.telefonSzam}}</td>
                <td>{{sz.szemelyCim}}</td>
            </tr>
        </table>
    </div>
</template>

<script>
    import dataService from '../services/dataservice.js'
    export default {
        name: "Keresés",
        data() {
            return {
                title: '',
                Szemelyek: []
            }
        },
        methods: {
            search() {
                dataService.search({
                    szemelyNev: this.title
                }).then(resp => {
                    this.Szemelyek = resp.data;
                });
            }
        }
    }
</script>

<style scoped>
table{
   position: absolute;
   left: 35%;
   margin-top: 20px;
}
td{
    padding: 20px;
}
th{
    padding: 20px;
    font-size: 20px;
}
</style>
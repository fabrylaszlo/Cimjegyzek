<template>
    <div>
        <form>
            <label for="">Title:</label>
            <input type="text" v-model="title">
            <input type="button" value="Search" @click="search">
        </form>
       <p v-for="sz in Szemelyek" :key="sz.szemelyId">
      {{sz.szemelyNev}}
    </p>
       
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
                console.log("serch gomb")
                dataService.search({
                 szemelyNev: this.title
                }).then(resp => {
                    this.Szemelyek = resp.data;
                });
            }
        }
    }
</script>

<style>

</style>
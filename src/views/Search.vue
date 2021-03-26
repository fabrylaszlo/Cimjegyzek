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
    import dataService from '../services/dataservice'
    export default {
        name: "Search",
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

<style>

</style>
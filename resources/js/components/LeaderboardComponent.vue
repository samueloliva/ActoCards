<template>

<div class="col justify-content-center" style="margin-top:20px;">
    <h4 class="text-center font-weight-bold"> 
        Leaderboard
    </h4>
    
    <table class="table table-striped">
        <thead>
            <th scope="col"> Name </th>
            <th scope="col"> Games </th>
            <th scope="col"> Wins </th>
            <th scope="col"> Losses </th>
        </thead>
        <tbody>
            <tr v-for="game in leaderboard"> 
                <td>{{game.player_name}}</td>
                <td>{{game.games}}</td>
                <td>{{game.wins}}</td>
                <td>{{game.losses}}</td>
            </tr>
        </tbody>
    </table>
    
</div>

</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: "Leaderboard",
    mounted() {
        this.$store.dispatch('fetchLeaderboard')
    },
    computed: {
        ...mapGetters([
            'leaderboard'
        ])
    }
}
</script>

<style scoped>

</style>
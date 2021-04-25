<template>
<div class="col d-flex justify-content-center">
    <div class="card justify-content-center" style="width:30rem; margin-top:20px">
        <div class="card-body">
            <div class="justify-content-center">
                <h4 class="text-center font-weight-bold">Last Game</h4>
                <h2 class="text-center font-weight-bold">
                    {{games[0].player_name}} 
                    {{games[0].player_hand_score}} 
                    X 
                    {{games[0].generated_hand_score}} 
                    Machine 
                </h2>
            </div>
        </div>
    </div>
</div>

</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: "Games",
    mounted() {
        this.$store.dispatch('fetchLastGame')
    },
    computed: {
        ...mapGetters([
            'games'
        ])
    }
}
</script>

<style scoped>

</style>
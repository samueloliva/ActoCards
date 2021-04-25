<template>
    <div class="col d-flex justify-content-center">
        <div class="card justify-content-center" style="width:18rem;">
            <div class="card-body">
                <h5 class="card-title">Play Game</h5>
                <form action="" @submit="createPost(player)">
                    
                    <p><input type="text" class="form-control" placeholder="Player name" 
                        v-model="player.name"></p>
                    
                    <p><input type="text" class="form-control" placeholder="Hands of cards" 
                        v-model="player.hand"></p>
                    
                    <p><button :disabled="!isValid" class="btn btn-primary" 
                        @click.prevent="createGame(player)">
                        Submit
                    </button></p>
                    
                </form>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "CreateGame",
    data() {
        return {
            player: {
                name: '',
                hand: ''
            }
        }
    },
    methods: {
        createGame(player) {
            this.$store.dispatch('createGame', player)
        }
    },
    computed: {
        isValid() {
            return this.player.name !== '' && this.player.hand !== ''
        }
    }
}

</script>

<style scoped>

</style>



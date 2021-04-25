let actions = {
    async createGame({commit}, game) {
        axios.post('/api/game', game)
            .then(res => {
                commit('CREATE_GAME', res.data)
            }).catch(err => {
                alert("The player hand is not valid")
            });
        axios.get('/api/game/leaderboard') 
            .then(res => {
                commit('FETCH_LEADERBOARD', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    async fetchLastGame({commit}) {
        axios.get('/api/game/last')
            .then(res => {
                commit('FETCH_LAST_GAME', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    fetchLeaderboard({commit}) {
        axios.get('/api/game/leaderboard') 
            .then(res => {
                commit('FETCH_LEADERBOARD', res.data)
            }).catch(err => {
                console.log(err)
            })
    }
}

export default actions
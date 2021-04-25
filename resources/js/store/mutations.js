let mutations = {
    CREATE_GAME(state, game) {
        state.games.unshift(game)
    },
    FETCH_LAST_GAME(state, game) {
        return state.games = [game]
    },
    FETCH_LEADERBOARD(state, leaderboard) {
        return state.leaderboard = leaderboard
    }
}

export default mutations
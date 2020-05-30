export default ({
    state: {
        welcomeMessage: 'Welcome to my vue'
    },
    getters: {
        welcome(state) {
            return state.welcomeMessage
        }
    },
    actions: {
        // retrieveToken(context, credentials){
        //     Axios.
        // }
    },
    mutations: {
        // increment(state) {
        //     state.count++
        // }
    }

})
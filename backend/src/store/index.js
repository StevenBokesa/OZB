//Creating a centralized location with vuex to keep up with data that is available across all the application components.
import { createStore } from "vuex";

const store = createStore({
    state: {
        test: 'OZB'
    },
    getters: {},
    actions: {},
    mutations: {},
})

export default store
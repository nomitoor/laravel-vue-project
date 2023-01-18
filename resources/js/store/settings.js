/**
 * Viewport module for vuex store.
 *
 * Holds current viewport state based on user ui preference.
 */
export default {
    namespaced: true,
    state: {
        // CODE CHALLENGE: Dark Mode
        darkMode: true
    },
    getters: {
        isDarkMode: state => state.darkMode,
    },

    mutations: {
        changeState(state, payload) {
            localStorage.setItem('darkMode', payload)
            state.darkMode = payload
        }
    }
};

import { createStore } from 'vuex'
import { checkout } from './Modules/checkout'
import VuexPersistence from 'vuex-persist'

const vuexLocal = new VuexPersistence({
  storage: window.localStorage
})

// Create a new store instance.
export const store = createStore({
  modules: {
    checkout
  },
  plugins: [vuexLocal.plugin]
})
export const checkout = {
  namespace: true,
  state: () => ({ 
    cart: []
  }),
  mutations: {
    add(state, data) {
      let item = findItem(state, data.id)
      if(item)
        item.quantity++
      else
        state.cart.push({...data, quantity: 1})
    },
    increase(state, id) {
      let item = findItem(state, id)
      item.quantity++
    },
    decrease(state, id) {
      let item = findItem(state, id)
      if(item.quantity > 1)
        item.quantity--
    },
    emptyCart(state) {
      state.cart = []
    },
    remove(state, id) {
      let itemIndex = state.cart.findIndex(element => element.id == id)
      state.cart.splice(itemIndex, 1);
    }
  },
  actions: {

  },
  getters: {
    getCart(state) {
      return state.cart
    },
    getTotalPrice(state) {
      return state.cart.map(item => {
        return item.price * item.quantity
      }).reduce((a, b) => a + b, 0);
    }
  }
}

const findItem = (state, id) => {
  return state.cart.find(element => element.id == id)
}
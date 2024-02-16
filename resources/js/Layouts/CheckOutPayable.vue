<script setup>
import { useStore, mapGetters } from 'vuex'
const store = useStore()

</script>
<template>
  <div class="col-start-2 col-span-4 px-3 text-sm">
      <div class="text-black flex justify-between">
          <span>Subtotal</span>
          <span class="font-bold">${{ store.getters.getTotalPrice }}</span>
      </div>
      <div class="text-black flex justify-between">
          <span>Tax</span>
          <span class="font-bold">$0</span>
      </div>
      <div class="text-black flex justify-between">
          <span>Payable Amount</span>
          <span class="font-bold">${{ store.getters.getTotalPrice }}</span>
      </div>
  </div>
</template>
<script setup>
import CheckOutItems from '@/Layouts/CheckOutItems.vue'
import CheckOutPayable from '@/Layouts/CheckOutPayable.vue';
import { useStore, mapGetters } from 'vuex'
const store = useStore()

// store.commit('emptyCart')
</script>
<template>
  <div class="col-span-4 bg-white shadow-sm sm:rounded-lg flex flex-col h-[calc(100vh-150px)] justify-between">
    <div class="p-4 mb-auto">
      <div class="border-b-[1px] border-b-[#b4b4b4] pb-[10px] text-sm">
        CHECKOUT
      </div>
      <check-out-items></check-out-items>
    </div>
    <div class="bg-[#f9ecbf] h-[150px] py-2 px-3 text-sm">
      <check-out-payable></check-out-payable>
      <v-card
        class="mx-auto mt-2"        
      >
        <template v-slot:actions>         
          <v-btn            
            class="flex-grow-1"
            height="48"
            color="warning"
            variant="flat"            
            @click="store.commit('emptyCart')"            
          >
            Clear
          </v-btn>
          <v-btn            
            class="flex-grow-1"
            height="48"
            color="success"
            variant="flat"            
            :href="route('checkout')"
          >
            Proceed
          </v-btn>
        </template>
      </v-card>
    </div>
  </div>
</template>
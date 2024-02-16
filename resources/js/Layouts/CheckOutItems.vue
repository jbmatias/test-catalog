<script setup>
import { computed } from 'vue'
import { useStore } from 'vuex'
const store = useStore()
const items = computed(() => store.getters.getCart)
</script>
<template>
  <div class="py-4">      
    <v-expansion-panels>
      <v-expansion-panel v-for="item in items" class="my-[2px]">
        <v-expansion-panel-title v-slot="{ expanded }">
          <v-row no-gutters>
            <v-col cols="1" class="d-flex justify-start text-xs">
              {{ item.quantity }}
            </v-col>          
            <v-col cols="9" class="d-flex justify-start text-xs">              
              <span class="line-clamp-1">{{ item.name }}</span>
            </v-col>
            <v-col cols="2" class="d-flex justify-start text-xs font-bold">
              ${{ item.price * item.quantity }}
            </v-col>
          </v-row>            
        </v-expansion-panel-title>
        <v-expansion-panel-text>
          <div class="flex items-center">
            <v-btn-toggle class="mx-auto">
              <v-btn size="small" @click="store.commit('decrease', item.id)">
                <v-icon>mdi-minus</v-icon>
              </v-btn>
              <v-btn size="small">
                {{ item.quantity }}
              </v-btn>
              <v-btn size="small" @click="store.commit('increase', item.id)">
                <v-icon>mdi-plus</v-icon>
              </v-btn>              
              <v-btn size="small" @click="store.commit('remove', item.id)">
                <v-icon>mdi-delete</v-icon>
              </v-btn>              
            </v-btn-toggle>
          </div>
        </v-expansion-panel-text>
      </v-expansion-panel>        
    </v-expansion-panels>
  </div>
</template>
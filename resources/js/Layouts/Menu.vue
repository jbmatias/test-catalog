<script setup>
import { useStore } from 'vuex'
import Dialog from '@/Components/Dialog.vue'
import { computed, onMounted, onUnmounted, ref, toRefs, reactive, defineCustomElement } from 'vue';

const store = useStore()
const props = defineProps({
  menu: {
    type: Array,
    default: []
  }  
})

const { menu } = toRefs(props)
const state = reactive({
  tab: null,
  showdialog: false,
  dialogitem: ''
})

onMounted(() => {
  const [firstItem] = menu.value
  state.tab = firstItem        
})

const selectTab = (tabItem) => {
  state.tab = tabItem
}

const addToCart = (item) => {
  store.commit('add', item)
  state.showdialog = true
  state.dialogitem = item.name
}
</script>
<template>
  <div class="menu-container col-span-8">    
    <Dialog v-model:dialog="state.showdialog" :name="state.dialogitem"></Dialog>
    <v-toolbar color="#fff">
      <v-tabs        
        class="sm:rounded-lg"
        align-tabs="title"
      >
        <v-tab
          @click="selectTab(menuItem)"
          v-for="menuItem in menu"
          :key="menuItem"
          :value="menuItem"
        >
          {{ menuItem.name }}
        </v-tab>
      </v-tabs>
    </v-toolbar>

    <v-window v-if="state.tab">
      <v-window-item>
        <div class="grid grid-cols-3 gap-4 py-5">
          <div class="bg-white" v-for="item in state.tab.items">
            <img src="https://placehold.co/600x400" alt="">
            <div class="px-2 py-2 text-center">
              <div class="text-xs min-h-[60px] line-clamp-3">{{ item.name }}</div>
              <h1 class="text-sm">$ {{ item.price }}</h1>
              <v-btn size="small" class="mt-[10px]" @click="addToCart(item)">Add to cart</v-btn>
            </div>
          </div>
        </div>        
      </v-window-item>
    </v-window>
  </div>
</template>
<style>
  .menu-window-item-card {
    min-height: calc(100vh - 180px);
  }

  .menu-container .v-toolbar .v-toolbar__content {
    height: 60px !important;
  }

  .menu-container .v-toolbar .v-tabs--density-default {
    height: 40px !important;
  }

  .menu-container .v-toolbar .v-toolbar__content .v-tab.v-btn {
    height: 40px;
    margin-right: 5px;
  }

  .menu-container .v-toolbar .v-toolbar__content .v-tab--selected.v-tab.v-btn {
    border: 1px solid #ff8c20;
    background: #ff8c200a;
    border-radius: 5px;
    color: #ff8c20;
  }

  .menu-container .v-toolbar .v-toolbar__content .v-tab.v-btn:hover {    
    background: #ff8c200a;
    border-radius: 5px;
    color: #ff8c20;
  }  
  .menu-container .v-toolbar .v-toolbar__content .v-tab--selected .v-tab__slider{
    background-color: none; /** #FF2D20 !important */
    display: none;
  }
</style>
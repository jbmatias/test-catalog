<script setup>
  import { toRefs } from 'vue'
  const dialog = defineModel('dialog')
  const props = defineProps({
    name: {
      type: String,
      default: ''
    }
  })

  const state = toRefs(props)
</script>
<template>
  <v-dialog
    v-model="dialog"
    width="400"    
  >
    <v-card>      
      <v-card-text class="text-sm">
        <code>{{ state.name }}</code> has been added to cart!
      </v-card-text>
      <v-card-actions class="align-right">
        <v-btn
          color="primary"
          variant="text"          
          @click="$emit('update:dialog', false)"
        >
          Close
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>

</template>
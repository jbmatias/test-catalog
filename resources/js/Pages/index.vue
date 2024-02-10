<template>
  <v-app>
    <v-app-bar>
      <template v-slot:prepend>
        <v-icon icon="$vuetify"></v-icon>
      </template>      
      <v-app-bar-title>{{ title }}</v-app-bar-title>
      <v-container class="main-nav-container">
        <v-responsive
          mx="auto"
          max-width="500">
          <v-text-field
            size="20"
            append-inner-icon="mdi-magnify" 
            variant="solo"
          ></v-text-field>
        </v-responsive>
      </v-container>
    </v-app-bar>
  </v-app>
</template>
<style>
@import '/resources/css/app.css';
@import '/resources/css/index.css';
</style>
<script>
export default {
  props: {
    title: {
      type: String,
      default: 'Restro POS'
    }
  }
}
</script>
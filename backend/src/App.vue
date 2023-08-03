<script setup>
import{ ref, computed } from 'vue'
import store from "./store";

const test = computed(()=> store.state.test)

</script>


<template>
  <h1>{{test}}</h1>

  <!-- used for navigation. -->
  <!-- component matched by the route will render here -->
  <router-view></router-view>
</template>

<style scoped>


</style>

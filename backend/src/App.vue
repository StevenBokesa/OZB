<script setup>
import{ ref, computed } from 'vue'
import store from "./store";

const test = computed(()=> store.state.test)

</script>


<template>
  <h1>{{test}}</h1>
</template>

<style scoped>

</style>

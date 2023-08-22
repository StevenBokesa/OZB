<template>
  <h1>Product Description</h1>
  <div class="infinite-list">
    <ul>
      <li v-for="(item, index) in items" :key="index">{{ item }}</li>
    </ul>
    <div v-if="isLoading" class="loading">Loading...</div>
  </div>
</template>

<script>
export default {
  props: {
    items: Array,
    isLoading: Boolean,
  },
};
</script>

<style scoped>
.infinite-list {
  height: 400px;
  overflow-y: scroll;
}

.loading {
  text-align: center;
  padding: 10px;
}

</style>

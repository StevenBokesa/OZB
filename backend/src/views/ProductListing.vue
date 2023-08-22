<template>
  <h1>Product Listing</h1>
  <div class="infinite-list">
    <ul>
      <li v-for="item in items" :key="item.id">{{ item.name }} {{ item.description }}</li>
    </ul>
    <div v-if="isLoading" class="loading">Loading...</div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      items: [],
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios
        .get('/fetchProducts')
        .then(response => {
          this.items = response.data;
          console.log(response);
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    },
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

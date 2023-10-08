<script setup lang="ts">
import Navbar from './components/Navbar.vue';
import SearchBar from './components/SearchBar.vue';
import PopularServices from './components/PopularServices.vue';
import HowItWork from './components/HowItWork.vue';
import ExploreCitites from './components/ExploreCities.vue';
import NewServices from './components/NewServices.vue';
import RecentPosts from './components/RecentPosts.vue';
import Footer from './components/Footer.vue';
</script>

<template>
  <Navbar/>      
  <SearchBar/>
  <ExploreCitites/>
  <PopularServices/>
  <HowItWork/>
  <NewServices/>
  <RecentPosts/>
  <Footer/> 
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>

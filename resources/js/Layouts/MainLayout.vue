<template>
  <Header />
  <Toast :duration="5000" />

  <main
    className="container mx-auto mt-16 min-h-[calc(100vh-56px)] w-full flex"
  >
    <slot />
  </main>
</template>

<script setup lang="ts">
import Header from "@/Components/Header.vue";
import Toast from "@/Components/Toast.vue";
</script>

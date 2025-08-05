<template>
  <ChMenuHamburger class="text-xl cursor-pointer" @click="toggle" />
</template>

<script setup lang="ts">
import { useSideNav } from "@/Composables/useSideNav";
import { ChMenuHamburger } from "@kalimahapps/vue-icons";

const { toggle } = useSideNav();
</script>

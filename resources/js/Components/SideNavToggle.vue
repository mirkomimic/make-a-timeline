<template>
  <ChMenuHamburger
    class="cursor-pointer text-xl hover:text-primary"
    @click="toggle"
  />
</template>

<script setup lang="ts">
import { useSideNav } from "@/Composables/useSideNav";
import { ChMenuHamburger } from "@kalimahapps/vue-icons";

const { toggle } = useSideNav();
</script>

<template>
  <header className="fixed top-0 z-10 h-14 w-full uppercase backdrop-blur-2xl">
    <div
      className="container mx-auto grid h-full grid-cols-3 items-center gap-2 font-bold"
    >
      <Link href="/">
        <div class="font-bitcount text-xl flex">Make A Timeline</div>
      </Link>

      <div></div>

      <div className="items-center justify-end flex">
        <ThemeToggle />
      </div>
    </div>
  </header>
</template>

<script setup lang="ts">
import ThemeToggle from "@/Components/ThemeToggle.vue";
import { Link } from "@inertiajs/vue3";
</script>

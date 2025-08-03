<template>
  <div @click="toggleTheme" class="cursor-pointer ">
    <AkSunFill class="size-6 hover:text-orange-400 transition-all ease-in" v-if="!isChecked"/>
    <BsMoonStarsFill class="size-6 hover:text-yellow-300 transition-all ease-in" v-if="isChecked"/>
  </div>
</template>

<script setup lang="ts">
import { useTheme } from "@/Composables/useTheme";
import { AkSunFill } from '@kalimahapps/vue-icons';
import { BsMoonStarsFill } from '@kalimahapps/vue-icons';

const { theme, isChecked, toggleTheme } = useTheme();

</script>

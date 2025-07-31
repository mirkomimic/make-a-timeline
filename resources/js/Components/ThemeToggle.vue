<template>
  <div @click="toggleTheme">
    <AkSunFill class="size-6" v-if="theme === 'garden'"/>
    <BsMoonStarsFill class="size-6" v-if="theme === 'sunset'"/>
  </div>
</template>

<script setup lang="ts">
import { useTheme } from "@/Composables/useTheme";
import { AkSunFill } from '@kalimahapps/vue-icons';
import { BsMoonStarsFill } from '@kalimahapps/vue-icons';

const { theme, isChecked, toggleTheme } = useTheme();

</script>

<template>
  <ul class="timeline flex-wrap">
    <li v-for="(item, index) in items" :key="index">
      <hr v-if="index > 0" />
      <div class="timeline-start">{{ item.date }}</div>
      <div class="timeline-middle">
        <AnFilledCheckCircle />
      </div>
      <div class="timeline-end timeline-box">
        {{ item.text }}
      </div>
      <hr v-if="index !== items.length - 1" />
    </li>
  </ul>
</template>

<script setup lang="ts">
import { AnFilledCheckCircle } from "@kalimahapps/vue-icons";

defineProps<{
  items: { date: string; text: string }[];
}>();
</script>

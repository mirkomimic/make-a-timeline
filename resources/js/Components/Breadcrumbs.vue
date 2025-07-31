<template>
  <div class="breadcrumbs text-sm">
    <ul>
      <li v-for="item in items" :key="item.name">
        <component v-if="item.icon" :is="item.icon" class="me-2" />
        <Link v-if="item.isActive" :href="item.href">{{ item.name }}</Link>
        <span v-else>{{ item.name }}</span>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import type { Component } from "vue";

type BreadcrumbItemType = {
  name: string;
  href: string;
  isActive: boolean;
  icon?: Component;
};

const props = defineProps<{
  items: BreadcrumbItemType[];
}>();
</script>

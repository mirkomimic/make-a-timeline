<template>
  <div class="join">
    <button class="btn join-item" :disabled="!data?.prev_page_url">
      <Link :href="data?.prev_page_url || '/'">«</Link>
    </button>
    <button class="btn join-item">
      <Link href="/">
        Page {{ data?.current_page }} of {{ data?.last_page }}
      </Link>
    </button>
    <button class="btn join-item" :disabled="!data?.next_page_url">
      <Link :href="data?.next_page_url || '/'">»</Link>
    </button>
  </div>
</template>

<script setup lang="ts">
import { PaginationData } from "@/types/custom";
import { Link } from "@inertiajs/vue3";

const props = defineProps<{
  data?: PaginationData;
}>();
</script>

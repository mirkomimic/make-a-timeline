<template>
  <div
    v-show="$page.props.flash.success"
    class="toast toast-end toast-top z-10 backdrop-blur-sm"
  >
    <div class="alert alert-success opacity-60">
      <span>{{ $page.props.flash.success }}</span>
    </div>
  </div>
</template>

<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import { watch } from "vue";

const page = usePage();

const props = defineProps<{
  duration?: number;
}>();

watch(
  () => page.props.flash.success,
  (newVal) => {
    if (newVal) {
      setTimeout(() => {
        page.props.flash.success = undefined;
      }, props.duration || 5000);
    }
  },
);
</script>

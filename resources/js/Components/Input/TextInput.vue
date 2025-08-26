<template>
  <div>
    <input
      v-model="model"
      :type="type || 'text'"
      :placeholder="placeholder || 'Enter text...'"
      class="input input-bordered w-full max-w-xs"
      :id="id"
    />
  </div>
</template>

<script setup lang="ts">
const props = defineProps<{
  type?: string;
  placeholder?: string;
  id?: string;
}>();

const model = defineModel<string | number | boolean>();
</script>

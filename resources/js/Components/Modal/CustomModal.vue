<template>
  <div>
    <button class="btn btn-outline btn-neutral uppercase" @click="openModal">
      <BsSortNumericDown />
      Sort timeline items
    </button>
    <dialog ref="custom_modal" id="custom_modal" class="modal">
      <div class="modal-box">
        <h3 class="mb-4 text-lg font-bold">
          {{ title ?? "Modal Title" }}
        </h3>
        <slot />
        <form method="dialog" class="modal-backdrop">
          <button class="btn btn-neutral mt-3 uppercase">Close</button>
        </form>
      </div>
    </dialog>
  </div>
</template>

<script setup lang="ts">
import { BsSortNumericDown } from "@kalimahapps/vue-icons";
import { useTemplateRef } from "vue";

const custom_modal = useTemplateRef("custom_modal");

const props = defineProps<{
  title?: string;
}>();

const openModal = () => {
  if (custom_modal.value) {
    custom_modal.value.showModal();
  }
};
</script>

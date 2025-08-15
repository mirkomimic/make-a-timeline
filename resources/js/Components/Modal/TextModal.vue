<template>
  <div>
    <button
      class="btn btn-sm border-0 bg-transparent p-0 hover:bg-transparent"
      @click="openModal"
    >
      {{ cutString(text, 15, true) }}
    </button>
    <dialog ref="my_modal_2" id="my_modal_2" class="modal">
      <div class="modal-box">
        {{ text }}
      </div>
      <form method="dialog" class="modal-backdrop">
        <button>close</button>
      </form>
    </dialog>
  </div>
</template>

<script setup lang="ts">
import { useHelpers } from "@/Composables/helpers";
import { useTemplateRef } from "vue";

const my_modal_2 = useTemplateRef("my_modal_2");

defineProps<{
  text: string;
}>();

const { cutString } = useHelpers();

const openModal = () => {
  if (my_modal_2.value) {
    my_modal_2.value.showModal();
  }
};
</script>

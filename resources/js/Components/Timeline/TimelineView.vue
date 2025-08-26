<template>
  <Link :href="route('timeline.edit', timeline.id)">
    <button class="btn btn-outline btn-primary btn-sm mb-5">
      <BxSolidEdit />
      Edit timeline
    </button>
  </Link>

  <h1 class="mb-3 text-3xl font-bold uppercase text-primary">
    {{ timeline.title }}
  </h1>

  <h2 class="mb-5 text-xl">
    {{ timeline.description }}
  </h2>

  <ul class="timeline flex-wrap">
    <li v-for="(item, index) in timeline.items" :key="index">
      <hr v-if="index > 0" />
      <div class="timeline-start">{{ item.start }}</div>
      <div class="timeline-middle">
        <AnFilledCheckCircle />
      </div>
      <div
        class="timeline-end timeline-box px-3 py-0 transition-all ease-linear hover:scale-110"
      >
        <TextModal :text="item.end" />
      </div>
      <hr v-if="index !== timeline.items.length - 1" />
    </li>
  </ul>
</template>

<script setup lang="ts">
import TextModal from "@/Components/Modal/TextModal.vue";
import { TimelineType } from "@/types/custom";
import { Link } from "@inertiajs/vue3";
import { AnFilledCheckCircle, BxSolidEdit } from "@kalimahapps/vue-icons";

defineProps<{
  timeline: TimelineType;
}>();
</script>

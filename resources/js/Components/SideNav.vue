<template>
  <nav>
    <div ref="sideNav" class="flex w-[15rem] flex-col pe-3">
      <button
        class="btn btn-outline btn-primary btn-sm mx-auto mb-3 mt-3 max-w-40"
      >
        <AnOutlinedPlus />
        New timeline
      </button>

      <ul class="menu w-full rounded-box bg-base-200 p-2">
        <li class="menu-title">Timelines</li>
        <li v-for="(timeline, index) in timelines" :key="timeline.id">
          <a
            @click="selectedTimeline = index"
            :class="{ 'text-primary': selectedTimeline === index }"
            >{{ cutString(timeline.title, 25, true) }}</a
          >
        </li>
      </ul>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { useHelpers } from "@/Composables/helpers";
import { TimelineType } from "@/types/custom";
import { usePage } from "@inertiajs/vue3";
import { AnOutlinedPlus } from "@kalimahapps/vue-icons";
import gsap from "gsap";
import { useTemplateRef, watch } from "vue";

defineProps<{
  timelines: TimelineType[];
}>();

const { cutString } = useHelpers();

const sideNav = useTemplateRef("sideNav");
const selectedTimeline = defineModel("selectedTimeline");

const tl = gsap.timeline({
  defaults: { duration: 0.2, ease: "power2.inOut" },
});

watch(
  () => usePage().props.isSideNavOpen,
  (newValue) => {
    if (newValue) {
      tl.to(sideNav.value, { width: "15rem", display: "flex" }).to(
        sideNav.value,
        {
          opacity: 1,
        },
      );
    } else {
      tl.to(sideNav.value, { opacity: 0 }).to(sideNav.value, {
        width: "0",
        display: "none",
      });
    }
  },
);
</script>

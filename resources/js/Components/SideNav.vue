<template>
  <nav class="h-full">
    <div ref="sideNav" class="flex w-52 flex-col overflow-y-scroll">
      <button class="btn btn-primary btn-sm mx-auto mb-3 mt-3 w-full max-w-40">
        <AnOutlinedPlus />
        Create new
      </button>

      <div class="divider my-0"></div>

      <h3 class="text-lg font-bold uppercase">Timelines</h3>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { useSideNav } from "@/Composables/useSideNav";
import { usePage } from "@inertiajs/vue3";
import { AnOutlinedPlus } from "@kalimahapps/vue-icons";
import gsap from "gsap";
import { ref, watch } from "vue";

const { toggle } = useSideNav();
const sideNav = ref(null);

const tl = gsap.timeline({
  defaults: { duration: 0.2, ease: "power2.inOut" },
});

watch(
  () => usePage().props.isSideNavOpen,
  (newValue) => {
    if (newValue) {
      tl.to(sideNav.value, { width: "13rem" }).to(sideNav.value, {
        opacity: 1,
      });
    } else {
      tl.to(sideNav.value, { opacity: 0 }).to(sideNav.value, { width: "0" });
    }
  },
);
</script>

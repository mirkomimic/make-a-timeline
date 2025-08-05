import { usePage } from "@inertiajs/vue3";
import { computed, ref } from "vue";

export const useSideNav = () => {
  const toggle = () => {
    usePage().props.isSideNavOpen = !usePage().props.isSideNavOpen;
  };

  return { toggle };
};

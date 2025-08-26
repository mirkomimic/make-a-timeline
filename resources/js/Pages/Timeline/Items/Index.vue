<template>
  <Head title="Edit" />

  <MainLayout>
    <main class="container mx-auto mt-5 px-3">
      <Breadcrumbs :items="breadcrumbsItems" class="mb-5" />

      <TimelineItemsTable :items="timelineItems" />
    </main>
  </MainLayout>
</template>

<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import TimelineItemsTable from "@/Components/TimelineItemsTable.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import { PaginatedData, TimelineItem } from "@/types/custom";
import { Head } from "@inertiajs/vue3";
import { AnFilledHome } from "@kalimahapps/vue-icons";

const props = defineProps<{
  timelineId: number;
  timelineItems: PaginatedData<TimelineItem>;
}>();

const breadcrumbsItems = [
  {
    name: "Home",
    href: "/",
    isActive: true,
    icon: AnFilledHome,
  },
  {
    name: `Edit timeline ID: ${props.timelineId}`,
    href: `/timeline/${props.timelineId}/edit`,
    isActive: true,
  },
  {
    name: `Edit items`,
    href: `/`,
    isActive: false,
  },
];
</script>

<style scoped></style>

<template>
  <Head title="Edit timeline" />
  <MainLayout>
    <main class="m-1 mx-auto min-h-[calc(100vh-92px)] w-full rounded-md p-2">
      <Breadcrumbs :items="breadcrumbsItems" class="mb-5" />

      <div class="mb-3 flex justify-end gap-2">
        <Link :href="route('timeline.items.index', timeline.id)">
          <button class="btn btn-outline btn-neutral uppercase">
            <AkEdit />
            Edit timeline items
          </button>
        </Link>

        <CustomModal title="Drag & drop to sort timeline items">
          <TimelineItemsSort
            v-if="timeline.items"
            v-model:timeline-items="form.items"
            :timeline-id="timeline.id"
            class="col-span-6 sm:col-span-3"
          />
        </CustomModal>
        <button
          @click="handleSubmit"
          :disabled="!form.isDirty || form.processing"
          class="btn btn-primary uppercase"
        >
          <span
            v-if="form.processing"
            class="loading loading-spinner loading-sm"
          />
          Save
        </button>
      </div>
      <!-- <Timeline v-if="timeline" :timeline="timelines[selectedTimeline]" /> -->

      <!-- title -->
      <div class="mb-3">
        <div class="grid grid-cols-6 gap-4">
          <label for="title" class="col-span-6 flex items-center md:col-span-1">
            <span class="">Title:</span>
          </label>
          <input
            v-model="form.title"
            id="title"
            type="text"
            placeholder="Enter timeline title"
            class="input input-bordered col-span-6 w-full sm:col-span-5"
          />
        </div>
        <div class="grid grid-cols-6 gap-4">
          <div
            v-if="form.errors.title"
            class="col-span-6 text-sm text-red-500 sm:col-span-5 md:col-start-2"
          >
            Error: {{ form.errors.title }}
          </div>
        </div>
      </div>

      <!-- description -->
      <div class="mb-3">
        <div class="grid grid-cols-6 gap-4">
          <label
            for="description"
            class="col-span-6 flex items-start md:col-span-1"
          >
            <span class="">Description:</span>
          </label>

          <textarea
            v-model="form.description"
            id="description"
            placeholder="Enter timeline description"
            class="textarea textarea-bordered col-span-6 sm:col-span-5"
          />
        </div>
        <div class="grid grid-cols-6 gap-4">
          <div
            v-if="form.errors.description"
            class="col-span-6 text-sm text-red-500 sm:col-span-5 md:col-start-2"
          >
            Error: {{ form.errors.description }}
          </div>
        </div>
      </div>
    </main>
  </MainLayout>
</template>

<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import CustomModal from "@/Components/Modal/CustomModal.vue";
import TimelineItemsSort from "@/Components/Timeline/TimelineItemsSort.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import { TimelineType } from "@/types/custom";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { AkEdit, AnFilledHome } from "@kalimahapps/vue-icons";

const breadcrumbsItems = [
  {
    name: "Home",
    href: "/",
    isActive: true,
    icon: AnFilledHome,
  },
  {
    name: "Edit",
    href: "/",
    isActive: false,
  },
];

const props = defineProps<{
  timeline: TimelineType;
}>();

const form = useForm({
  title: props.timeline.title || "",
  description: props.timeline.description || "",
  alignment: props.timeline.alignment || "",
  visibility: props.timeline.visibility || "",
  items: props.timeline.items || [],
});

const handleSubmit = () => {
  form.put(route("timeline.update", props.timeline.id));
};
</script>

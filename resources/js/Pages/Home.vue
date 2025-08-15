<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Footer from "@/Components/Footer.vue";
import Header from "@/Components/Header.vue";
import SideNav from "@/Components/SideNav.vue";
import SideNavToggle from "@/Components/SideNavToggle.vue";
import Timeline from "@/Components/Timeline.vue";
import MainLayoutWithSideNav from "@/Layouts/MainLayoutWithSideNav.vue";
import { TimelineType } from "@/types/custom";
import { Head } from "@inertiajs/vue3";
import { AnFilledHome } from "@kalimahapps/vue-icons";
import { ref } from "vue";

defineProps<{
  canLogin?: boolean;
  canRegister?: boolean;
  laravelVersion: string;
  phpVersion: string;
  timelines: TimelineType[];
}>();

const selectedTimeline = ref<number>(0);

const timeline: TimelineType = {
  id: 1,
  title: "test title",
  description: "test description",
  alignment: "horizontal",
  visibility: "public",
  items: [
    {
      start: "07-21-2025",
      end: "test text",
    },
    {
      start: "07-21-2025",
      end: "test text adfasdf dafdsf fasdfsd",
    },
    {
      start: "07-21-2025",
      end: "test text",
    },
    {
      start: "07-21-2025",
      end: "test text",
    },
    {
      start: "07-21-2025",
      end: "test text adfasdf dafdsf fasdfsd",
    },
    {
      start: "07-21-2025",
      end: "test text",
    },
  ],
};
</script>

<template>
  <Head title="Home" />
  <MainLayoutWithSideNav>
    <template #header>
      <Header />
    </template>

    <template #secondaryMenu>
      <div class="container mx-auto w-full">
        <SideNavToggle />
        <div class="divider my-0"></div>
      </div>
    </template>

    <template #side-nav>
      <div class="flex flex-col">
        <SideNav
          v-model:selectedTimeline="selectedTimeline"
          :timelines="timelines"
        />
      </div>
    </template>

    <main class="m-1 mx-auto min-h-[calc(100vh-92px)] w-full rounded-md p-2">
      <Breadcrumbs
        :items="[
          { name: 'Home', href: '/', isActive: false, icon: AnFilledHome },
        ]"
        class="mb-5"
      />

      <Timeline v-if="timeline" :timeline="timelines[selectedTimeline]" />
    </main>

    <template #footer>
      <Footer />
    </template>
  </MainLayoutWithSideNav>
</template>

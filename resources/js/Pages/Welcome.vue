<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Footer from "@/Components/Footer.vue";
import Header from "@/Components/Header.vue";
import SideNav from "@/Components/SideNav.vue";
import SideNavToggle from "@/Components/SideNavToggle.vue";
import Timeline from "@/Components/Timeline.vue";
import MainLayoutWithSideNav from "@/Layouts/MainLayoutWithSideNav.vue";
import { Head } from "@inertiajs/vue3";
import { AnFilledHome } from "@kalimahapps/vue-icons";

defineProps<{
  canLogin?: boolean;
  canRegister?: boolean;
  laravelVersion: string;
  phpVersion: string;
}>();

const timeline = {
  title: "test title",
  items: [
    {
      date: "07-21-2025",
      text: "test text",
    },
    {
      date: "07-21-2025",
      text: "test text adfasdf dafdsf fasdfsd",
    },
    {
      date: "07-21-2025",
      text: "test text",
    },
    {
      date: "07-21-2025",
      text: "test text",
    },
    {
      date: "07-21-2025",
      text: "test text adfasdf dafdsf fasdfsd",
    },
    {
      date: "07-21-2025",
      text: "test text",
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
        <SideNav />
      </div>
    </template>

    <main class="mx-auto w-full">
      <Breadcrumbs
        :items="[
          { name: 'Home', href: '/', isActive: false, icon: AnFilledHome },
        ]"
      />

      <h1 class="text-3xl text-center mb-3 text-primary uppercase font-bold">
        {{ timeline.title }}
      </h1>

      <Timeline v-if="timeline.items" :items="timeline.items" />
    </main>

    <template #footer>
      <Footer />
    </template>
  </MainLayoutWithSideNav>
</template>

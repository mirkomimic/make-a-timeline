<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Footer from "@/Components/Footer.vue";
import Header from "@/Components/Header.vue";
import SideNav from "@/Components/SideNav.vue";
import Timeline from "@/Components/Timeline.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import {
  AnFilledCheckCircle,
  AnFilledHome,
  AnOutlinedPlus,
} from "@kalimahapps/vue-icons";

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
  <Header />
  <MainLayout>
    <SideNav />

    <div class="ps-3">
      <Breadcrumbs
        :items="[
          { name: 'Home', href: '/', isActive: false, icon: AnFilledHome },
        ]"
      />

      <h1 class="text-3xl text-center mb-3">{{ timeline.title }}</h1>
      <Timeline v-if="timeline.items" :items="timeline.items" />
    </div>
  </MainLayout>
  <Footer />
</template>

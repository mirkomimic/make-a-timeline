<script setup lang="ts">
import Breadcrumbs from "@/Components/Breadcrumbs.vue";
import Header from "@/Components/Header.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { AnFilledHome, AnOutlinedPlus } from "@kalimahapps/vue-icons";

defineProps<{
  canLogin?: boolean;
  canRegister?: boolean;
  laravelVersion: string;
  phpVersion: string;
}>();
</script>

<template>
  <Head title="Home" />
  <Header />
  <MainLayout>
    <Breadcrumbs
      :items="[
        { name: 'Home', href: '/', isActive: false, icon: AnFilledHome },
      ]"
    />

    <button class="btn btn-active btn-ghost mx-auto text-2xl flex">
      <AnOutlinedPlus />
      Create new timeline
    </button>
  </MainLayout>
</template>

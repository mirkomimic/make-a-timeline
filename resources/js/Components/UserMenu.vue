<template>
  <ul v-if="user" class="menu menu-horizontal px-1">
    <li>
      <details>
        <summary class="rounded-full px-3">
          <img class="size-6 rounded-full" src="user-placeholder.png" />
        </summary>
        <ul class="rounded-t-none bg-base-100 p-2">
          <li v-if="user"><Link href="logout">Logout</Link></li>
        </ul>
      </details>
    </li>
  </ul>
</template>

<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";

const user = usePage().props.auth.user;
</script>

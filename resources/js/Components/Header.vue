<template>
  <header className="fixed top-0 z-10 h-14 w-full uppercase backdrop-blur-2xl ">
    <div
      className="container mx-auto grid h-full grid-cols-3 items-center gap-2 font-bold"
    >
      <div class="flex items-center gap-2">
        <Link href="/" class="text-md font-bitcount">
          <FaTimeline class="text-2xl text-primary" />
        </Link>
      </div>

      <nav>
        <ul class="menu menu-horizontal px-1">
          <li><a>Link</a></li>
          <li>
            <details>
              <summary>Parent</summary>
              <ul class="rounded-t-none bg-base-100 p-2">
                <li><a>Link 1</a></li>
                <li><a>Link 2</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </nav>

      <div className="items-center justify-end flex gap-3">
        <button v-if="!user" class="btn btn-ghost btn-sm">
          <Link href="login">Login</Link>
        </button>

        <button v-if="!user" class="btn btn-outline btn-primary btn-sm">
          <Link href="register">Register</Link>
        </button>

        <ThemeToggle />
        <UserMenu />
      </div>
    </div>
  </header>
</template>

<script setup lang="ts">
import ThemeToggle from "@/Components/ThemeToggle.vue";
import UserMenu from "@/Components/UserMenu.vue";
import { Link, usePage } from "@inertiajs/vue3";
import { FaTimeline } from "@kalimahapps/vue-icons";

const { user } = usePage().props.auth;
</script>

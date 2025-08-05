<template>
  <div>
    <slot name="header" />
    <div class="mx-auto mt-16 flex min-h-[calc(100vh-56px)] w-full flex-col">
      <slot name="secondaryMenu" />
      <div class="container mx-auto flex">
        <slot name="side-nav" />
        <slot />
      </div>
    </div>
    <slot name="footer" />
  </div>
</template>

<script setup lang="ts"></script>

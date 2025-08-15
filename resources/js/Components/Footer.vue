<template>
  <!-- <footer class="h-52 bg-base-300">Footer</footer> -->
  <footer class="footer flex flex-col bg-neutral p-10 text-neutral-content">
    <div class="flex w-full items-center justify-evenly">
      <nav class="flex flex-col">
        <h6 class="footer-title">Services</h6>
        <a class="link-hover link">Branding</a>
        <a class="link-hover link">Design</a>
        <a class="link-hover link">Marketing</a>
        <a class="link-hover link">Advertisement</a>
      </nav>
      <nav class="flex flex-col">
        <h6 class="footer-title">Company</h6>
        <a class="link-hover link">About us</a>
        <a class="link-hover link">Contact</a>
        <a class="link-hover link">Jobs</a>
        <a class="link-hover link">Press kit</a>
      </nav>
      <nav class="flex flex-col">
        <h6 class="footer-title">Legal</h6>
        <a class="link-hover link">Terms of use</a>
        <a class="link-hover link">Privacy policy</a>
        <a class="link-hover link">Cookie policy</a>
      </nav>
    </div>

    <aside class="w-full">
      <p class="mx-auto text-xs">
        Copyright ©{{ new Date().getFullYear() }} - All right reserved by ACME
        Industries Ltd
      </p>
    </aside>
  </footer>
</template>

<script setup lang="ts"></script>

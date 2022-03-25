<template>

  <app-layout title="Dashboard">
    <Link class="font-medium" :href="route('categories')">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="float-left w-12 h-12 text-amarillo"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M10 19l-7-7m0 0l7-7m-7 7h18"
        />
      </svg>
    </Link>

    <div class="py-6 flex justify-around ">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
        <div class="overflow-hidden">
          <svg
            class="float-right h-14 w-14 text-white bg-rojo"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <circle cx="12" cy="12" r="9" />
            <line x1="9" y1="12" x2="15" y2="12" />
            <line x1="12" y1="9" x2="12" y2="15" />
          </svg>

         
          </div>
        </div>
      </div>
    
  </app-layout>

</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>
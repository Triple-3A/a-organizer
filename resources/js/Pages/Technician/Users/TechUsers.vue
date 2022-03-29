<template>
  <app-layout title="Dashboard">
    <Link class="font-medium" :href="route('technician')">
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

    <div class="flex justify-around py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <jet-title> Estos son tus Usuarios </jet-title>
          <div v-for="studentsUser in studentsUsers" :key="studentsUser.id">
            <div
              class="
                my-10
                p-4
                flex
                justify-between
                items-center
                row
                border-4
                rounded-lg
                border-amarillo
              "
            >
              <div class="w-1/5">
                <img
                  class="rounded-full"
                  src="https://randomuser.me/api/portraits/women/81.jpg"
                />
              </div>
              <div class="flex flex-row flex-wrap w-5/12">
                <h1 class="text-xl font-bold">
                  {{ studentsUser.name }}
                </h1>
              </div>

              <div>
                <Link
                  class="font-medium"
                  :href="route('technicianUsersProfile')"
                >
                  <jet-arrow-next-svg />
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetArrowNextSvg from "@/Jetstream/ArrowNextSvg";
import JetTitle from "@/Jetstream/Title";
export default {
  props: {
    studentsUsers: Array,
  },

  components: {
    AppLayout,
    Head,
    Link,
    JetArrowNextSvg,
    JetTitle,
  },
};
</script>

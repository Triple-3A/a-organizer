<template>
  <app-layout title="Dashboard">
    <Link class="font-medium" :href="route('technicianUsersProfile')">
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

    <div class="py-6 flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <jet-create-btn/>
          <div class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg">
              <h1 class="text-xl text-azul font-bold">
                Tareas Avanzadas del usuario
              </h1>
            </div>
          </div>
          <h2 class="mb-2">Educación</h2>

          <h2 class="mb-2">Trabajo</h2>

          <h2 class="mb-2">Juego</h2>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
export default {
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
  },
};
</script>
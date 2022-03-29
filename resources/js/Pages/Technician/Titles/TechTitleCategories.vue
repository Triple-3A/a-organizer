<template>
  <app-layout title="Dashboard">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('technician')"
        class="
          mr-2.5
          font-bold
          text-amarillo
          rounded-lg
          text-sm
          py-2.5
          text-center
          flex
          items-center
        "
      >
        <svg
          class="w-5 h-5 ml-2 mr-1 rotate-180 fill-amarillo"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
        Inicio</Link
      >
    </div>
      <h1 class="mb-6 text-xl font-semibold text-center text-azul">
        Categoria de Tareas
      </h1>
      <p class="mb-6 font-medium text-center text-gray-800">
        Estas son tus tareas predeterminadas
      </p>
    

    <div class="w-3/4 mx-auto lg:w-2/5">
      <div
        class="flex items-center justify-center px-10 py-6 mb-12 border-4  rounded-xl border-amarillo"
      >
        <div class="rounded-lg">
          <Link class="font-medium" :href="route('basicTitle')">
            <center>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-16 h-16 mb-4 text-azul"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </center>
            <h1 class="text-xl font-bold text-center">Tareas Básicas</h1></Link
          >
        </div>
      </div>
    </div>

    <div class="w-3/4 mx-auto lg:w-2/5">
        <div
          class="flex items-center justify-center px-10 py-6 mb-12 border-4  itemsflex rounded-xl border-amarillo"
        >
          <div class="rounded-lg">
            <Link class="font-medium" :href="route('instrumentalTitle')">
              <center>
                <svg
                  class="w-16 h-16 mb-4 text-azul"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                  />
                </svg>
              </center>
              <h1 class="text-xl font-bold text-center">
                Tareas Instrumentales
              </h1></Link
            >
          </div>
        </div>
    </div>

    <div class="w-3/4 mx-auto lg:w-2/5">
      <div
        class="flex items-center justify-center px-10 py-6 mb-12 border-4  rounded-xl border-amarillo"
      >
        <div class="rounded-lg">
          <Link class="font-medium" :href="route('advancedTitle')">
            <center>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-16 h-16 mb-4 text-azul"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
            </center>
            <h1 class="text-xl font-bold text-center">
              Tareas Avanzadas
            </h1></Link
          >
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

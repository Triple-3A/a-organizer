<template>
  <app-layout title="Dashboard">
    <div class="mt-16">
      <div class="absolute mt-2 ms-4">
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
            /></svg
        ></Link>
      </div>
      <jet-title>
        Categoria de Tareas
      </jet-title>
      <p class="mb-6 font-medium text-center text-gray-800">
        Estas son tus tareas predeterminadas
      </p>
    </div>
    <Link class="font-medium" :href="route('basicTitle')">
      <jet-card>
        <jet-basic-svg />
        <h1 class="text-xl font-bold text-center">Tareas Básicas</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('instrumentalTitle')">
      <jet-card>
        <jet-instrumental-svg />
        <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('advancedTitle')">
      <jet-card>
        <jet-advanced-svg />
        <h1 class="text-xl font-bold text-center">Tareas Avanzadas</h1>
      </jet-card>
    </Link>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCard from "@/Jetstream/Card.vue";
import JetBasicSvg from "@/Jetstream/BasicSvg.vue";
import JetInstrumentalSvg from "@/Jetstream/InstrumentalSvg.vue";
import JetAdvancedSvg from "@/Jetstream/AdvancedSvg.vue";
import JetTitle from "@/Jetstream/Title.vue";

export default {
  components: {
    AppLayout,
    Head,
    Link,
    JetCard,
    JetBasicSvg,
    JetInstrumentalSvg,
    JetAdvancedSvg,
    JetTitle,
  },
};
</script>

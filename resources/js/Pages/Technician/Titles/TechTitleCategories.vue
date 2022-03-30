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
        <jet-arrow-back-svg>Inicio</jet-arrow-back-svg></Link
      >
    </div>
      <jet-title>
        Categoria de Tareas
      </jet-title>
      <p class="mb-6 font-medium text-center text-gray-800">
        Estas son tus tareas predeterminadas
      </p>
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
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

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
    JetArrowBackSvg,
  },
};
</script>

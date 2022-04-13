<template>
  <app-layout title="Categorías">
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
    <jet-title> Categoría de Tareas </jet-title>
    <p class="mb-6 font-medium text-center text-gray-800">
      Estas son tus tareas predeterminadas
    </p>
    <Link class="font-medium" :href="route('basicTitle')">
      <jet-card>
        <img
          class="w-32 h-32 mb-2"
          src="images/basic.png"
          alt="Icono de tareas básicas"
        />
        <h1 class="text-lg text-noNegro font-bold text-center">
          Tareas Básicas
        </h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('instrumentalTitle')">
      <jet-card>
        <img
          class="w-32 h-32 mb-2"
          src="images/instrumental.png"
          alt="Icono de tareas instrumentales"
        />
        <h1 class="text-lg text-noNegro font-bold text-center">
          Tareas Instrumentales
        </h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('advancedTitle')">
      <jet-card>
        <img
          class="w-32 h-32 mb-2"
          src="images/advanced.png"
          alt="Icono de tareas avanzadas"
        />
        <h1 class="text-lg text-noNegro font-bold text-center">
          Tareas Avanzadas
        </h1>
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

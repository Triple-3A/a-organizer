<template>
  <app-layout title="Dashboard">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('technicianUsers')"
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
        <jet-arrow-back-svg>Categorias de tareas</jet-arrow-back-svg>
       </Link
      >
    <div v-for="index in student" :key="index.id">
      <h1 class="my-2 text-xl font-bold leading-tight text-center text-noNegro">
        Estas viendo el perfil de:
      </h1>
      <center>
        <img
          class="rounded-full"
          src="https://randomuser.me/api/portraits/women/81.jpg"
        />
      </center>
      <jet-title>{{ index.name }}</jet-title>
    <Link class="font-medium" :href="route('techUserBasic', index.id)">
      <jet-card>
        <img src="images/basic.png" alt="Icono de tareas básicas" />
        <h1 class="text-xl font-bold text-center">Tareas Básicas</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('techUserInstrumental', index.id)">
      <jet-card>
        <img src="images/instrumental.png" alt="Icono de tareas instrumentales" />
        <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('techUserAdvanced', index.id)">
      <jet-card>
        <img src="images/advanced.png" alt="Icono de tareas avanzadas" />
        <h1 class="text-xl font-bold text-center">Tareas Avanzadas</h1>
      </jet-card>
    </Link>
    </div>
    </div>
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
  props: {
    student:Array,
  },
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

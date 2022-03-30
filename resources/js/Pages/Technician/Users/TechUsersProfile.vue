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
        Categorias de tareas</Link
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
        <jet-basic-svg />
        <h1 class="text-xl font-bold text-center">Tareas Básicas</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('techUserInstrumental', index.id)">
      <jet-card>
        <jet-instrumental-svg />
        <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('techUserAdvanced', index.id)">
      <jet-card>
        <jet-advanced-svg />
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
  },
};
</script>

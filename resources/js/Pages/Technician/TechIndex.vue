<template>
  <app-layout title="Dashboard">
    <div class="mt-16">
      <jet-title>
        ¡Hola {{ username }}!
      </jet-title>
      <h2 class="mb-6 font-medium text-center text-gray-800">
        Selecciona que quieres hacer
      </h2>
    </div>
    <Link class="font-medium" :href="route('categories')">
      <jet-card>
        <jet-titles-categories-svg />
        <h1 class="text-xl font-bold text-center">Gestión de tareas</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('technicianUsers')">
      <jet-card>
        <jet-users-categories-svg />
        <h1 class="text-xl font-bold text-center">Gestión de usuarios</h1>
      </jet-card>
    </Link>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCard from "@/Jetstream/Card.vue";
import JetTitlesCategoriesSvg from "@/Jetstream/TitlesCategoriesSvg.vue";
import JetUsersCategoriesSvg from "@/Jetstream/UsersCategoriesSvg.vue";
import JetTitle from "@/Jetstream/Title.vue";
export default {
  props: {
    username: String,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetCard,
    JetTitlesCategoriesSvg,
    JetUsersCategoriesSvg,
    JetTitle,
  },
};
</script>

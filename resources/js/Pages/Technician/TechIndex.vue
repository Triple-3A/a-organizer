<template>
  <app-layout title="Dashboard">
    <div class="mt-16">
      <h1 class="mb-6 text-xl font-semibold text-center text-azul">
        ¡Hola {{ username }}!
      </h1>
      <h2 class="mb-6 font-medium text-center text-gray-800">
        Selecciona que quieres hacer
      </h2>
    </div>
          <jet-card>
          <Link class="font-medium" :href="route('categories')">
              <jet-titles-categories-svg/>
            <h1 class="text-xl font-bold text-center">
              Gestión de tareas
            </h1>
            </Link
          >
          </jet-card>

    <jet-card>
          <Link class="font-medium" :href="route('technicianUsers')">
            <jet-users-categories-svg/>
            <h1 class="text-xl font-bold text-center">Gestión de usuarios</h1>
          </Link>
          </jet-card>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCard from '@/Jetstream/Card.vue';
import JetTitlesCategoriesSvg from '@/Jetstream/TitlesCategoriesSvg.vue';
import JetUsersCategoriesSvg from '@/Jetstream/UsersCategoriesSvg.vue';
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
  },
};
</script>

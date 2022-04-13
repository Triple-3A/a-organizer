<template>
  <app-layout title="Gestiones">
    <div class="mt-16">
      <jet-title>
        ¡Hola {{ username }}!
      </jet-title>
      <h2 class="mb-6 font-medium text-sm text-center text-noNegro">
        Selecciona que quieres hacer
      </h2>
    </div>
    <Link class="font-medium" :href="route('categories')">
      <jet-card>
        <img class="w-32 h-32 mb-4 text-azul" src="images/tasks.png" alt="Icono de tareas avanzadas" />
        <h1 class="text-lg text-noNegro font-bold text-center">Gestión de Tareas</h1>
      </jet-card>
    </Link>
    <Link class="font-medium" :href="route('technicianUsers')">
      <jet-card>
        <img class="w-32 h-32 mb-4 text-azul" src="images/users.png" alt="Icono de tareas avanzadas" />
        <h1 class="text-lg text-noNegro font-bold text-center">Gestión de Usuarios-as</h1>
      </jet-card>
    </Link>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCard from "@/Jetstream/Card.vue";
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
    JetTitle,
  },
};
</script>

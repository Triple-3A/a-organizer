<template>
  <app-layout title="Dashboard">
    <div v-for="index in student" :key="index.id" class="mt-4 ml-10px">
      <Link
        :href="route('technicianUsersProfile', index.id)"
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
        Tareas</Link
      >
    

    <div class="py-6 flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <div class="flex items-center justify-end">
            <!-- <Link :href="route('basicTitle/create')" type="button"> -->
            <jet-create-btn />
          <!-- </Link>  -->
          </div>
          <jet-title class="mt-4"> Tareas Avanzadas del usuario </jet-title>
          <jet-title class="mt-4"> {{ index.name }} </jet-title>
        
      <h2 class="mb-2">Educación</h2>
      <h2 class="mb-2">Trabajo</h2>
      <h2 class="mb-2">Juego</h2>
      </div>
      </div>
    </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
export default {
  props: {
    student:Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
    JetTitle,
  },
};
</script>
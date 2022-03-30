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
        <jet-arrow-back-svg>Tareas</jet-arrow-back-svg></Link
      >
    

    <div class="py-6 flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <div class="flex items-center justify-end">
            <!-- <Link :href="route('basicTitle/create')" type="button"> -->
            <jet-create-btn />
          <!-- </Link>  -->
          </div>
          <div class="mt-2 flex items-center justify-center">
          <jet-title class="mt-4">
            Tareas Instrumentales del usuario
          </jet-title>
          </div>
          <jet-title class="mt-4"> {{ index.name }} </jet-title>
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
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
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
    JetArrowBackSvg,
  },
};
</script>
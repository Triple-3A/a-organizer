<template>
  <app-layout title="Títulos básicos">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('categories')"
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
        <jet-arrow-back-svg>Categorias de tareas</jet-arrow-back-svg></Link
      >
    </div>
    <div class="flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-end">
          <Link :href="route('basicTitle/create')" type="button">
            <jet-create-btn />
          </Link>
        </div>

        <div class="flex items-center justify-center w-260">
          <jet-title>Tareas Básicas</jet-title>
        </div>
        <div v-for="basic in basics" :key="basic.id">
          <div
            class="
              flex
              mb-11
              border-4
              bg-white
              rounded-lg
              row
              border-amarillo
              drop-shadow-md
              hover:drop-shadow-2xl
            "
          >
            <div class="flex items-center justify-start p-4">
              <div
                v-for="icon in basic.icons"
                :key="icon.id"
                class="items-center"
              >
                <img class="w-28 h-28" :src="icon.icon" alt="Icono de tarea" />
              </div>

              <div class="pl-9 w-80  ">
                <h1 class="text-lg text-noNegro font-bold">
                  {{ basic.title }}
                </h1>
              </div>

              <Link
                class="ml-10"
                as="button"
                type="button"
                method="delete"
                :href="route('basicTitle/delete', basic.id)"
              >
                <jet-delete-btn />
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
import CreateBtn from "@/Jetstream/CreateBtn.vue";
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetBasicTitleSvg from "@/Jetstream/BasicTitleSvg.vue";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    basics: Array,
  },
  components: {
    CreateBtn,
    AppLayout,
    Head,
    Link,
    JetDeleteBtn,
    JetBasicTitleSvg,
    JetCreateBtn,
    JetTitle,
    JetArrowBackSvg,
  },
};
</script>

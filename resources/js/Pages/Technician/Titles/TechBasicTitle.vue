<template>
  <app-layout title="Dashboard">
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
    <div class="flex justify-around py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div>
          <div class="flex items-center justify-end">
            <Link :href="route('basicTitle/create')" type="button">
            <jet-create-btn />
          </Link> 
          </div>

          <div class="mt-2 flex items-center justify-center">
            <jet-title>Tareas Básicas</jet-title>
          </div>
          <div v-for="basic in basics" :key="basic.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <div v-for="icon in basic.icons" :key="icon.id">
                    <img :src="icon.icon" alt="Icono de tarea" />
                  </div>
                  <!-- <svg
                    class="w-16 h-16 text-azul"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path
                      d="M9 7c-3 0-4 3-4 5.5 0 3 2 7.5 4 7.5 1.088-.046 1.679-.5 3-.5 1.312 0 1.5.5 3 .5s4-3 4-5c-.028-.01-2.472-.403-2.5-3-.019-2.17 2.416-2.954 2.5-3-1.023-1.492-2.951-1.963-3.5-2-1.433-.111-2.83 1-3.5 1-.68 0-1.9-1-3-1z"
                    />
                    <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                  </svg> -->
                  <jet-basic-title-svg />
                </div>
                <div class="px-8"></div>
                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">
                    {{ basic.title }}
                  </h1>
                </div>
                <div class="px-16"></div>
                <Link
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

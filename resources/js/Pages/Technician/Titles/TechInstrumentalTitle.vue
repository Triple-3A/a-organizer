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
        <jet-arrow-back-svg>Categorias de tareas</jet-arrow-back-svg>
        </Link
      >
    </div>

    <div class="flex justify-around py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <div class="flex items-center justify-end">
            <Link :href="route('instrumentalTitle/create')" type="button">
              <jet-create-btn />
            </Link> 
          </div>

          <div class="mt-2 flex items-center justify-center">
            <jet-title>Tareas Instrumentales</jet-title>
          </div>


          <div v-for="instrumental in instrumentals" :key="instrumental.id">
            <div class="mb-10 border-4 rounded-lg flexrow border-amarillo ">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <div v-for="icon in instrumental.icons" :key="icon.id">
                    <img :src="icon.icon" alt="Icono de tarea" />
                  </div>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">
                    {{ instrumental.title }}
                  </h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('instrumentalTitle/delete', instrumental.id)"
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
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetInstrumentalTitleSvg from "@/Jetstream/InstrumentalTitleSvg.vue";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    instrumentals: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetDeleteBtn,
    JetInstrumentalTitleSvg,
    JetCreateBtn,
    JetTitle,
    JetArrowBackSvg,
  },
};
</script>
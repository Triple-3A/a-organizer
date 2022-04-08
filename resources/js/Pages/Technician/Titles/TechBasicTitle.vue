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
    <div class="flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-end">
          <Link :href="route('basicTitle/create')" type="button">
            <jet-create-btn />
          </Link>
        </div>

        <div class="flex items-center justify-center">
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

              <div class="pl-9 w-80">
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


    <!-- <div class="w-3/4 mx-auto lg:w-2/5 flex-column">
      <div
        class="bg-amarillo flex items-center bg-white justify-center px-10 py-6 mb-12 border-4 rounded-xl border-amarillo drop-shadow-md hover:drop-shadow-2xl"
      >
      <div class="text-white">
      <h1>Tareas completadas</h1>
      </div>
            <div class="w-full bg-gray-200 rounded-full">
  <div class="bg-azul text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-l-full px-4" style="width: 50%">2/5</div>
</div>
         <slot></slot>
        </div>
      </div> -->

    <div class="w-3/4 mx-auto flex-column">
      <div class="bg-amarillo flex items-center bg-white justify-center px-10 py-6 mb-12 border-4 rounded-xl border-amarillo drop-shadow-md hover:drop-shadow-2xl">
        <div class="columns-1">
          <div class="pl-9 w-80">
            <h1 class="text-lg text-white font-bold">
              Tareas completadas
            </h1>
          </div>
          <div class="w-full bg-gray-200 rounded-full">
            <div class="bg-azul text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-l-full px-4" style="width: 40%">2/5</div>
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

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
        <div class="overflow-hidden">
          <div class="flex items-center justify-end">
            <Link :href="route('advancedTitle/create')" type="button">
              <jet-create-btn />
            </Link>
          </div>

          <div class="mt-2 flex items-center justify-center">
            <jet-title>Tareas Avanzadas</jet-title>
          </div>

          <h2 class="mb-2">Educación</h2>
          <div v-for="education in educations" :key="education.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <div v-for="icon in education.icons" :key="icon.id">
                    <img :src="icon.icon" alt="Icono de tarea" />
                  </div>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">{{ education.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', education.id)"
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>
          <h2 class="mb-2">Trabajo</h2>
          <div v-for="job in jobs" :key="job.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <div v-for="icon in job.icons" :key="icon.id">
                    <img :src="icon.icon" alt="Icono de tarea" />
                  </div>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">{{ job.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', job.id)"
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>
          <h2 class="mb-2">Juego</h2>
          <div v-for="game in games" :key="game.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <div v-for="icon in game.icons" :key="icon.id">
                    <img :src="icon.icon" alt="Icono de tarea" />
                  </div>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">{{ game.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', game.id)"
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>
          <h2 class="mb-2">Tiempo libre</h2>
          <div v-for="libre in freeTime" :key="libre.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <Link :href="route('advancedTitle/create')">
                    <jet-advanced-title-svg />
                  </Link>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">{{ libre.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', libre.id)"
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
import JetAdvancedTitleSvg from "@/Jetstream/AdvancedTitleSvg.vue";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    educations: Array,
    jobs: Array,
    games: Array,
    freeTime: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetDeleteBtn,
    JetAdvancedTitleSvg,
    JetCreateBtn,
    JetTitle,
    JetArrowBackSvg,
  },
};
</script>
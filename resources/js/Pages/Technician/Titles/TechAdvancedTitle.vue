<template>
  <app-layout title="Títulos avanzadas">
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
          <Link :href="route('advancedTitle/create')" type="button">
            <jet-create-btn />
          </Link>
        </div>

        <div class="flex items-center justify-center">
          <jet-title>Tareas Avanzadas</jet-title>
        </div>

        <h2 class="mb-2 text-noNegro font-bold">Educación</h2>
        <div v-for="education in educations" :key="education.id">
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
                v-for="icon in education.icons"
                :key="icon.id"
                class="items-center"
              >
                <img class="w-28 h-28" :src="icon.icon" alt="Icono de tarea" />
              </div>

              <div class="pl-9 w-80">
                <h1 class="text-lg text-noNegro font-bold">
                  {{ education.title }}
                </h1>
              </div>

              <Link
                class="ml-10"
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
        <h2 class="mb-2 text-noNegro font-bold">Trabajo</h2>
        <div v-for="job in jobs" :key="job.id">
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
                v-for="icon in job.icons"
                :key="icon.id"
                class="items-center"
              >
                <img class="w-28 h-28" :src="icon.icon" alt="Icono de tarea" />
              </div>

              <div class="pl-9 w-80">
                <h1 class="text-lg text-noNegro font-bold">
                  {{ job.title }}
                </h1>
              </div>

              <Link
                class="ml-10"
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
        <h2 class="mb-2 text-noNegro font-bold">Juego</h2>
        <div v-for="game in games" :key="game.id">
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
                v-for="icon in game.icons"
                :key="icon.id"
                class="items-center"
              >
                <img class="w-28 h-28" :src="icon.icon" alt="Icono de tarea" />
              </div>

              <div class="pl-9 w-80">
                <h1 class="text-lg text-noNegro font-bold">
                  {{ game.title }}
                </h1>
              </div>

              <Link
                class="ml-10"
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
        <h2 class="mb-2 text-noNegro font-bold">Tiempo libre</h2>
        <div v-for="free in freeTime" :key="free.id">
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
              <div>
                <div v-for="icon in free.icons" :key="icon.id">
                  <img
                    class="w-28 h-28"
                    :src="icon.icon"
                    alt="Icono de tarea"
                  />
                </div>
              </div>

              <div class="pl-9 w-80">
                <h1 class="text-lg text-noNegro font-bold">
                  {{ free.title }}
                </h1>
              </div>

              <Link
                class="ml-10"
                as="button"
                type="button"
                method="delete"
                :href="route('advancedTitle/delete', free.id)"
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
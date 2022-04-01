<template>
  <app-layout title="Dashboard">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('technicianUsersProfile', student.id)"
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
              <Link
                :href="route('techUserAdvanced/pickType', student.id)"
                type="button"
              >
                <jet-create-btn />
              </Link>
            </div>
            <jet-title class="mt-4"> Tareas Avanzadas del usuario </jet-title>
            <jet-title class="mt-4"> {{ student.name }} </jet-title>

            <h2 class="mb-2">Educación</h2>
            <div v-for="array in allEducation" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  class="flex mb-10 border-4 rounded-lg row border-amarillo"
                >
                  <div class="flex items-center justify-start p-4 rounded-lg">
                    <div>
                      <jet-advanced-title-svg/>
                    </div>
                    <div class="px-8"></div>
                    <div class="flex flex-row">
                      <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                    <div class="px-16"></div>
                     <Link :href="route('techUserAdvanced/deleteTask', task.id)">
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="mb-2">Trabajo</h2>
            <div v-for="array in allJob" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  class="flex mb-10 border-4 rounded-lg row border-amarillo"
                >
                  <div class="flex items-center justify-start p-4 rounded-lg">
                    <div>
                      <jet-advanced-title-svg/>
                    </div>
                    <div class="px-8"></div>
                    <div class="flex flex-row">
                      <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                    <div class="px-16"></div>
                    <Link :href="route('techUserAdvanced/deleteTask', task.id)">
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="mb-2">Juego</h2>
            <div v-for="array in allGame" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  class="flex mb-10 border-4 rounded-lg row border-amarillo"
                >
                  <div class="flex items-center justify-start p-4 rounded-lg">
                    <div>
                      <jet-advanced-title-svg/>
                    </div>
                    <div class="px-8"></div>
                    <div class="flex flex-row">
                      <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                    <div class="px-16"></div>
                    <Link :href="route('techUserAdvanced/deleteTask', task.id)">
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="mb-2">Tiempo libre</h2>
            <div v-for="array in allFreeTime" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  class="flex mb-10 border-4 rounded-lg row border-amarillo"
                >
                  <div class="flex items-center justify-start p-4 rounded-lg">
                    <div>
                      <jet-advanced-title-svg/>
                    </div>
                    <div class="px-8"></div>
                    <div class="flex flex-row">
                      <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                    <div class="px-16"></div>
                    <Link :href="route('techUserAdvanced/deleteTask', task.id)">
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
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
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetAdvancedTitleSvg from '@/Jetstream/AdvancedTitleSvg.vue';
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
export default {
  props: {
    student: Array,
    allEducation: Array,
    allJob: Array,
    allGame: Array,
    allFreeTime: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
    JetDeleteBtn,
    JetTitle,
    JetArrowBackSvg,
    JetAdvancedTitleSvg,
  },
};
</script>

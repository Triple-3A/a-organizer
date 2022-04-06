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
                :href="route('techUserInstrumental/create', student.id)"
                type="button"
              >
                <jet-create-btn />
              </Link>
            </div>
            <div class="mt-2 flex items-center justify-center">
              <jet-title class="mt-4">
                Tareas Instrumentales del usuario
              </jet-title>
            </div>

            <div class="mb-10" v-for="array in all" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  class="flex border-4 rounded-lg row border-amarillo"
                >
                  <div class="flex items-center justify-start p-4 rounded-lg">
                    <div>
                      <jet-instrumental-title-svg />
                    </div>
                    <div class="px-8"></div>
                    <div class="flex flex-row">
                      <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                    <div class="px-16"></div>
                    <Link
                      :href="route('techUserInstrumental/createDescription', task.id)"
                      type="button"
                    >
                      <jet-create-btn />
                    </Link>
                    <Link type="button"
                      method="delete"
                      :href="route('techUserInstrumental/deleteTask', task.id)"
                    >
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
              </div>
              <div
                v-for="description in array[2]"
                :key="description.id"
                class="flex border-4 rounded-lg row border-amarillo"
              >
                <div class="flex items-center justify-start p-2 rounded-lg">
                  <div>
                    <jet-basic-description-svg />
                  </div>
                  <div class="px-8"></div>
                  <div class="flex flex-row">
                    <h1 class="ml-12 text-xl font-bold">
                      {{ description.description }}
                    </h1>
                  </div>
                  <div class="px-16"></div>
                  <Link
                    :href="
                      route('techUserInstrumental/editDescription', description.id)
                    "
                    type="button"
                  >
                    <jet-edit-btn />
                  </Link>
                  <Link type="button"
                      method="delete"
                    :href="
                      route('techUserInstrumental/deleteDescription', description.id)
                    "
                  >
                    <jet-delete-btn />
                  </Link>
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
import JetEditBtn from "@/Jetstream/EditBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
import JetInstrumentalTitleSvg from "@/Jetstream/InstrumentalTitleSvg.vue";
export default {
  props: {
    student: Array,
    all: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
    JetEditBtn,
    JetDeleteBtn,
    JetTitle,
    JetArrowBackSvg,
    JetInstrumentalTitleSvg,
  },
};
</script>
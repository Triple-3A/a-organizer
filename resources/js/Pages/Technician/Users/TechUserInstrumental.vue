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
            <Link :href="route('techUserInstrumental/create', student.id)" type="button">
            <jet-create-btn />
          </Link> 
          </div>
          <div class="mt-2 flex items-center justify-center">
          <jet-title class="mt-4">
            Tareas Instrumentales del usuario
          </jet-title>
          </div>

          <div
              v-for="title in allTitles"
              :key="title.id"
              class="flex mb-10 border-4 rounded-lg row border-amarillo"
            >
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <jet-basic-title-svg />
                </div>
                <div class="px-8"></div>
                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">
                    {{ title.title }}
                  </h1>
                </div>
                <div class="px-16"></div>
                <!-- <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('basicTitle/delete', basic.id)"
                >
                  <jet-delete-btn />
                </Link> -->
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
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
export default {
  props: {
    student:Array,
    allTitles:Array,
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
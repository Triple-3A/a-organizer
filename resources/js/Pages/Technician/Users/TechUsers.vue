<template>
  <app-layout title="Usuarios-as">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('technician')"
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
        <jet-arrow-back-svg>Inicio</jet-arrow-back-svg></Link
      >
      <div class="flex justify-around">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <jet-title> Usuarios-as Asignados-as </jet-title>
          <div
            class="items-center"
            v-for="studentsUser in studentsUsers"
            :key="studentsUser.id"
          >
            <Link
              class="font-medium"
              :href="route('technicianUsersProfile', studentsUser.id)"
            >
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
                  items-center
                  justify-start
                  p-4
                "
              >
                <img
                  class="rounded-full w-20 h-20 mt-2"
                  :src="studentsUser.profile_photo_url"
                />

                <div class="pl-9 w-80">
                  <h1 class="text-lg text-noNegro font-bold">
                    {{ studentsUser.name }}
                  </h1>
                </div>

                <jet-arrow-next-svg />
              </div>
            </Link>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetArrowNextSvg from "@/Jetstream/ArrowNextSvg";
import JetTitle from "@/Jetstream/Title";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    studentsUsers: Array,
  },

  components: {
    AppLayout,
    Head,
    Link,
    JetArrowNextSvg,
    JetTitle,
    JetArrowBackSvg,
  },
};
</script>

<template>
    <app-layout title="Dashboard">
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
        <svg
          class="w-5 h-5 ml-2 mr-1 rotate-180 fill-amarillo"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
            clip-rule="evenodd"
          ></path>
        </svg>
        Inicio</Link
      >
    </div>

        <div class="py-6 flex justify-around">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="flex items-center justify-center">
                        <div class="p-10 bg-white rounded-lg">
                            <h1 class="text-xl text-azul font-bold">
                                Estos son tus Usuarios
                            </h1>
                        </div>
                    </div>
                    <div
                        v-for="studentsUser in studentsUsers"
                        :key="studentsUser.id"
                    >
                        <div
                            class="my-10 p-4 flex justify-between items-center row border-4 rounded-lg border-amarillo"
                        >
                            <div class="w-1/5">
                                <img
                                    class="rounded-full"
                                    src="https://randomuser.me/api/portraits/women/81.jpg"
                                />
                            </div>
                            <div class="flex flex-row flex-wrap w-5/12">
                                <h1 class="text-xl font-bold">
                                    {{ studentsUser.name }}
                                </h1>
                            </div>

                            <div>
                               <Link class="font-medium" :href="route('technicianUsersProfile')">
                                <svg
                                    class="h-8 w-8  text-azul"
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
                                    <polyline points="9 6 15 12 9 18" />
                                </svg>
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
export default {
    props: {
        studentsUsers: Array,
    },

    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>

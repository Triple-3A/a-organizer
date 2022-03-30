<template>
  <app-layout title="Dashboard">
    <Link class="font-medium" :href="route('categories')">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="float-left w-12 h-12 text-amarillo"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M10 19l-7-7m0 0l7-7m-7 7h18"
        />
      </svg>
    </Link>

    <div class="flex justify-around py-6">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <Link :href="route('instrumentalTitle/create')">
            <jet-create-btn />
          </Link>
          
          <jet-title>Tareas Instrumentales</jet-title>

          <div v-for="instrumental in instrumentals" :key="instrumental.id">
            <div class="mb-10 border-4 rounded-lg flexrow border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <jet-instrumental-title-svg />
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
  },
};
</script>
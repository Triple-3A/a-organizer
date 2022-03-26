<template>
  <app-layout title="Dashboard">
    <div v-if="basic == 'básico'">
      <Link class="font-medium" :href="route('basicTasks')">
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
    </div>

    <div v-if="instrumental == 'instrumental'">
      <Link class="font-medium" :href="route('instrumentalTasks')">
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
    </div>

    <div v-if="advanced == 'avanzado'">
      <Link class="font-medium" :href="route('advancedTasks')">
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
    </div>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <body class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg">
              <h2>{{ basic }}</h2>
              <div v-if="basic == 'básico'">
                <h1 class="text-xl font-bold">
                  Te encuentras en la vista de Crud desde BÁSICO!!!
                </h1>
                <br />
                <form @submit.prevent="basicSubmit">
                  
                  <input
                    placeholder="Título"
                    id="title"
                    v-model="basicForm.title"
                    class="
                      text-xs
                      border-2
                      px-6
                      border-amarillo
                      rounded
                      shadow-sm
                    "
                  />
                  <input
                    name="básicos"
                    hidden
                    placeholder="básicos"
                    id="type"
                    v-model="basicForm.type"
                    class="
                      text-xs
                      border-2
                      px-6
                      border-amarillo
                      rounded
                      shadow-sm
                    "
                  />
                  <Link :href="route('basicTasks')">Cancelar</Link>
                  <button type="submit">Guardar</button>
                </form>
              </div>
              <div v-if="instrumental === 'instrumental'">
                <h1 class="text-xl font-bold">
                  Te encuentras en la vista de Crud desde INSTRUMENTAL!!!
                </h1>
                <br />
              </div>
              <div v-if="advanced === 'avanzado'">
                <h1 class="text-xl font-bold">
                  Te encuentras en la vista de Crud desde AVANZADO!!!
                </h1>
                <br />
              </div>
            </div>
          </body>
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
    basic: String,
    instrumental: String,
    advanced: String,
  },
  data() {
    return {
      basic: this.basic,
      instrumental: this.instrumental,
      advanced: this.advanced,
      basicForm: {
        title: null,
        type: 'básicos',
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.post(route("basicTasks/store"), this.basicForm);
    },
  },
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>

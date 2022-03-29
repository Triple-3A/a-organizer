<template>
  <app-layout title="Dashboard">
    <!-- Link de vuelta de básico  -->
    <!-- <div v-if="basic == 'básico'">
      <Link class="font-medium" :href="route('basicTitle')">
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
    </div> -->

    <!-- Link de vuelta de instrumental  -->
    <div v-if="instrumental == 'instrumental'">
      <Link class="font-medium" :href="route('instrumentalTitle')">
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

    <div class="flex items-center justify-center">
      <div class="p-10 bg-white rounded-lg">
        <jet-create-btn class="text-xl font-bold text-azul" />
        <h1 class="text-xl font-bold text-azul">Creación de Tareas Básicas</h1>
      </div>
    </div>

    <!-- Link de vuelta de avanzado  -->
    <div v-if="advanced == 'avanzado'">
      <Link class="font-medium" :href="route('advancedTitle')">
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

    <!-- Form de creación -->

 
    
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
       
          <body class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg flex items-center justify-center">
              <!-- Creación de básico -->
             
              <div v-if="basic == 'básico'">
                <form @submit.prevent="basicSubmit">
                  <center><input
                    placeholder="Título"
                    id="title"
                    v-model="basicForm.title"
                    class="
                      px-6
                      text-xs
                      border-2
                      rounded
                      shadow-sm
                      border-amarillo
                      text-center
                    "
                  /></center>
 

                  <div class="mt-6">
                    <Link
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        mr-6
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        bg-red-500
                        rounded-md
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      :href="route('basicTitle')"
                      >Cancelar</Link
                    >
                    <button
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        rounded-md
                        bg-azul
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      type="submit"
                    >
                      Siguiente
                    </button>
                  </div>
                </form>
              </div>
              <!-- Creación de instrumental -->
              <div v-if="instrumental === 'instrumental'">
                <form @submit.prevent="instrumentalSubmit">
                  <input
                    placeholder="Título"
                    id="title"
                    v-model="instrumentalForm.title"
                    class="
                      px-6
                      text-xs
                      border-2
                      rounded
                      shadow-sm
                      border-amarillo
                    "
                  />
                  <div class="mt-6">
                    <Link
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        mr-6
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        bg-red-500
                        rounded-md
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      :href="route('instrumentalTitle')"
                      >Cancelar</Link
                    >
                    <button
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        rounded-md
                        bg-azul
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      type="submit"
                    >
                      Guardar
                    </button>
                  </div>
                </form>
              </div>
              <!-- Creación de avanzado -->
              <div v-if="advanced === 'avanzado'">
                <form @submit.prevent="advancedSubmit">
                  <div class="mt-6">
                    <input
                      placeholder="Título"
                      id="title"
                      v-model="advancedForm.title"
                      class="
                        px-6
                        text-xs
                        border-2
                        rounded
                        shadow-sm
                        border-amarillo
                      "
                    />
                  </div>
                  <div class="mt-6">
                    <label for="advanced">Elige el tipo de tarea: </label>
                    <select
                      v-model="advancedForm.type"
                      name="advanced"
                      id="advanced"
                      class="
                        px-3
                        py-1.5
                        bg-amarillo
                        text-base
                        font-bold
                        mt-1
                        rounded
                        select
                        w-96
                      "
                    >
                      <option
                        class="text-xs bg-orange-100 text-bold"
                        :selected="game"
                        value="juego"
                      >
                        Juego
                      </option>
                      <option
                        class="text-xs bg-orange-100 text-bold"
                        :selected="trabajo"
                        value="trabajo"
                      >
                        Trabajo
                      </option>
                      <option
                        class="text-xs bg-orange-100 text-bold"
                        :selected="Educación"
                        value="educación"
                      >
                        Educación
                      </option>
                    </select>
                  </div>
                  <!-- Botones de Guardar y Cancelar -->
                  <div class="mt-6">
                    <Link
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        mr-6
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        bg-red-500
                        rounded-md
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      :href="route('advancedTitle')"
                      >Cancelar</Link
                    >
                    <button
                      class="
                        inline-flex
                        items-center
                        px-6
                        py-2
                        text-xs
                        font-medium
                        tracking-widest
                        text-white
                        transition
                        rounded-md
                        bg-azul
                        hover:bg-gray-700
                        active:bg-gray-900
                        disabled:opacity-25
                      "
                      type="submit"
                    >
                      Guardar
                    </button>
                  </div>
                </form>
                <br />
              </div>
            </div>
          </body>
        </div>
      <!-- </div> -->
    <!-- </div> -->
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
        type: "básicos",
      },
      instrumentalForm: {
        title: null,
        type: "instrumentales",
      },
      advancedForm: {
        title: null,
        type: null,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.post(route("basicTitle/store"), this.basicForm);
    },
    instrumentalSubmit() {
      this.$inertia.post(
        route("instrumentalTitle/store"),
        this.instrumentalForm
      );
    },
    advancedSubmit() {
      this.$inertia.post(route("advancedTitle/store"), this.advancedForm);
    },
  },
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>

<template>
  <app-layout title="Dashboard">
    
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <!-- Creación de básico -->

          <div v-if="basic == 'básico'">
            <div class="flex items-center justify-center">
              <div class="p-10">
                <jet-create-btn class="text-xl font-bold text-azul" />
                <h1 class="text-xl font-bold text-azul">
                  Creación de Tareas Básicas
                </h1>
              </div>
            </div>
            <div>
              <center>
                <svg
                  class="h-16 w-16 text-azul mb-6"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"
                  />
                </svg>
                <!-- <h1 class="pt-8">Pulsa siguiente para crear la tarea</h1> -->
              </center>
            </div>
            <form @submit.prevent="basicSubmit">
              <center>
                <input
                  placeholder="Introduce la tarea"
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
                />
              </center>
            <div class="flex items-center justify-center">
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
                  Guardar
                </button>
              </div>  
              </div>
            </form>
          </div>

          <!-- Creación de instrumental -->

          <div>
            <div v-if="instrumental === 'instrumental'">
              <div class="flex items-center justify-center">
                <div class="p-10 bg-white rounded-lg">
                  <jet-create-btn class="text-xl font-bold text-azul" />
                  <h1 class="text-xl font-bold text-azul">
                    Creación de Tareas Instrumentales
                  </h1>
                </div>
              </div>
              <div>
                <center>
                  <svg class="h-16 w-16 text-azul mb-6"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="3" width="14" height="6" rx="2" />  <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2" />  <rect x="10" y="15" width="4" height="6" rx="1" /></svg>
                  <!-- <h1 class="pt-8">Pulsa siguiente para crear la tarea</h1> -->
                </center>
              </div>
              <form @submit.prevent="instrumentalSubmit">
                <center>
                  <input
                    placeholder="Introduce tarea"
                    id="title"
                    v-model="instrumentalForm.title"
                    class="
                    text-center
                      px-6
                      text-xs
                      border-2
                      rounded
                      shadow-sm
                      border-amarillo
                    "
                  />
                </center>
              <div class="flex items-center justify-center">
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
                </div>
              </form>
            </div>
          </div>
          <!-- Creación de avanzado -->
          <div v-if="advanced === 'avanzado'">
            <div class="flex items-center justify-center">
              <div class="p-10 bg-white rounded-lg">
                <jet-create-btn class="text-xl font-bold text-azul" />
                <h1 class="text-xl font-bold text-azul">
                  Creación de Tareas Avanzadas
                </h1>
              </div>
            </div>
            <div>
              <center>
                <svg class="h-16 w-16 text-azul"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />  <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />  <line x1="3" y1="6" x2="3" y2="19" />  <line x1="12" y1="6" x2="12" y2="19" />  <line x1="21" y1="6" x2="21" y2="19" /></svg>
                
                <!-- <h1 class="pt-8">Pulsa siguiente para crear la tarea</h1> -->
              </center>
            </div>
            <form @submit.prevent="advancedSubmit">
              
              <div class="mt-6">
                <center><input
                  placeholder="Introducir tarea"
                  id="title"
                  v-model="advancedForm.title"
                  class="
                  text-center
                    px-6
                    text-xs
                    border-2
                    rounded
                    shadow-sm
                    border-amarillo
                  "
                /></center>
              </div>
              <div class="mt-6 text-center">
                <label for="advanced">Elige el tipo de tarea: </label>
                <br>
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
              <div class="flex items-center justify-center">
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
              </div>
            </form>
            <br />
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

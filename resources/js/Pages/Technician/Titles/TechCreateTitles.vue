<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div v-if="basic == 'básico'">
            <div class="flex items-center justify-center">
              <div class="p-10">
                <h1 class="text-xl font-bold text-azul">
                  Creación de Tareas Básicas
                </h1>
              </div>
            </div>
            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-2"
                src="images/basic.png"
                alt="Icono de tareas básicas"
              />
            </div>

            <form @submit.prevent="basicSubmit">
              <div class="flex justify-center">
                <div class="block max-w-md p-4 bg-white">
                  <input
                    placeholder="Introduce el nombre de la tarea"
                    id="title"
                    v-model="basicForm.title"
                    class="
                      text-center
                      h-10
                      w-96
                      text-xs
                      border-2
                      rounded
                      shadow-sm
                      border-amarillo
                    "
                  />
                </div>
              </div>

              <div class="flex flex-row items-center justify-center">
                <div class="mt-6">
                  <jet-btn class="mr-2 " type="submit">
                    Guardar
                  </jet-btn>
                  <jet-cancel-btn
                    class="ml-6"
                    :href="route('basicTitle')"
                  ></jet-cancel-btn>
                </div>
              </div>
            </form>
          </div>

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
              <div class="flex items-center justify-center">
                <img
                  class="w-32 h-32 mb-2"
                  src="images/instrumental.png"
                  alt="Icono de tareas instrumentales"
                />
              </div>
              <form @submit.prevent="instrumentalSubmit">
                <div class="flex justify-center">
                  <div class="block max-w-md p-4 bg-white">
                    <input
                      placeholder="Introduce el nombre de la tarea"
                      id="title"
                      v-model="instrumentalForm.title"
                      class="
                        text-center
                        h-10
                        w-96
                        text-xs
                        border-2
                        rounded
                        shadow-sm
                        border-amarillo
                      "
                    />
                  </div>
                </div>
                <div class="flex items-center justify-center">
                  <div class="mt-6">
                    <jet-btn class="mr-4" type="submit">
                      Guardar
                    </jet-btn>
                    <jet-cancel-btn
                      class="ml-6"
                      :href="route('instrumentalTitle')"
                    ></jet-cancel-btn>
                  </div>
                </div>
              </form>
            </div>
          </div>

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
                <svg
                  class="h-16 w-16 text-azul"
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
                  <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                  <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                  <line x1="3" y1="6" x2="3" y2="19" />
                  <line x1="12" y1="6" x2="12" y2="19" />
                  <line x1="21" y1="6" x2="21" y2="19" />
                </svg>
              </center>
            </div>
            <form @submit.prevent="advancedSubmit">
              <div class="flex justify-center">
                <div class="block max-w-sm p-12 bg-white">
                  <input
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
                  />
                </div>
              </div>
              <div class="text-center">
                <label for="advanced">Elige el tipo de tarea: </label>
                <br />
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
                  <option
                    class="text-xs bg-orange-100 text-bold"
                    :selected="tiempoLibre"
                    value="tiempo libre"
                  >
                    Tiempo libre
                  </option>
                </select>
              </div>
              <div class="flex items-center justify-center">
                <div class="mt-6">
                  <jet-btn class="mr-4" type="submit">
                    Guardar
                  </jet-btn>
                  <jet-cancel-btn
                    class="ml-4"
                    :href="route('advancedTitle')"
                  ></jet-cancel-btn>
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
import JetBtn from "@/Jetstream/Btn.vue";
import JetCancelBtn from "@/Jetstream/CancelBtn.vue";
import JetOwnInput from "@/Jetstream/OwnInput.vue";
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
    JetBtn,
    JetCancelBtn,
    JetOwnInput,
  },
};
</script>

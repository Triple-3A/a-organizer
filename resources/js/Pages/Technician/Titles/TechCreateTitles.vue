<template>
  <app-layout title="Creación de títulos">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div v-if="basic == 'básico'">
            <div class="flex items-center justify-center mt-3">
              <jet-title>Creación de Tarea Básica</jet-title>
            </div>
            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-5"
                src="/images/basic.png"
                alt="Icono de tareas básicas"
              />
            </div>

            <form @submit.prevent="basicSubmit">
              <div class="max-w-md py-4 bg-white">
                <input
                  placeholder="Introduce el título de la tarea"
                  id="title"
                  v-model="basicForm.title"
                  class="
                    text-center
                    h-10
                    text-xs
                    border-2
                    rounded
                    shadow-sm
                    border-amarillo
                    w-full
                  "
                  required
                />
              </div>

              <div class="flex flex-row items-center justify-center mt-4">
                <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                <jet-cancel-btn
                  class="ml-3"
                  :href="route('basicTitle')"
                ></jet-cancel-btn>
              </div>
            </form>
          </div>

          <div v-if="instrumental === 'instrumental'">
            <div class="flex items-center justify-center mt-3">
              <jet-title> Creación  Tarea Instrumental </jet-title>
            </div>

            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-6"
                src="/images/instrumental.png"
                alt="Icono de tareas instrumentales"
              />
            </div>
            <form @submit.prevent="instrumentalSubmit">
              <div class="max-w-md py-4 bg-white">
                <input
                  placeholder="Introduce el título de la tarea"
                  id="title"
                  v-model="instrumentalForm.title"
                  class="
                    text-center
                    h-10
                    text-xs
                    border-2
                    rounded
                    shadow-sm
                    border-amarillo
                    w-full
                  "
                  required
                />
              </div>

              <div class="flex flex-row items-center justify-center mt-4">
                <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                <jet-cancel-btn
                  class="ml-3"
                  :href="route('instrumentalTitle')"
                ></jet-cancel-btn>
              </div>
            </form>
          </div>

          <div v-if="advanced === 'avanzado'">
            <div class="flex items-center justify-center mt-3">
              <jet-title> Creación Tarea Avanzada </jet-title>
            </div>

            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-4"
                src="/images/advanced.png"
                alt="Icono de tareas avanzadas"
              />
            </div>
            <form @submit.prevent="advancedSubmit">
              <div class="mb-3 mt-4">
                <label
                  class="display: block text-noNegro font-bold"
                  for="advanced"
                  >Elige el tipo de tarea:
                </label>

                <select
                  v-model="advancedForm.type"
                  name="advanced"
                  id="advanced"
                  class="
                    pl-2
                    pr-9
                    py-1.5
                    bg-amarillo
                    text-noNegro text-base
                    font-bold
                    mt-1
                    rounded
                    select
                    w-full
                    truncate
                  "
                  required
                >
                  <option
                    class="text-xs bg-white text-bold"
                    :selected="game"
                    value="juego"
                  >
                    Juego
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    :selected="trabajo"
                    value="trabajo"
                  >
                    Trabajo
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    :selected="Educación"
                    value="educación"
                  >
                    Educación
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    :selected="tiempoLibre"
                    value="tiempo libre"
                  >
                    Tiempo libre
                  </option>
                </select>
              </div>

              <div class="max-w-md py-4 bg-white">
                <input
                  placeholder="Introduce el título de la tarea"
                  id="title"
                  v-model="advancedForm.title"
                  class="
                    text-center
                    h-10
                    text-xs
                    border-2
                    rounded
                    shadow-sm
                    border-amarillo
                    w-full
                  "
                  required
                />
              </div>

              <div class="flex items-center justify-center mt-4">
                <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                <jet-cancel-btn
                  class="ml-3"
                  :href="route('advancedTitle')"
                ></jet-cancel-btn>
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
import JetTitle from "@/Jetstream/Title.vue";
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
    JetTitle,
  },
};
</script>

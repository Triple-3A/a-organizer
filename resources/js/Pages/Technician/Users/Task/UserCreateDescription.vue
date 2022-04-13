<template>
  <app-layout title="Creación de descripciones">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="mt-3 flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <jet-title>Descripción Tarea Básica</jet-title>

              <div class="flex items-center justify-center">
                <img
                  class="w-32 h-32 mb-2"
                  src="/images/basic.png"
                  alt="Icono de tareas básicas"
                />
              </div>

              <form
                @submit.prevent="basicSubmit"
                class="mt-4 flex justify-center mb-6"
              >
                <div class="mb-4 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="advanced"
                    >Añadir descripción:
                  </label>

                  <div class="block max-w-md py-4 bg-white">
                    <input
                      placeholder="Escribe una nueva descripción"
                      id="title"
                      v-model="basicForm.description"
                      class="
                        text-left
                        h-10
                        px-2
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
                      :href="route('techUserBasic', id)"
                      >Cancelar</jet-cancel-btn
                    >
                  </div>
                </div>
              </form>
            </div>

            <div v-if="instrumental == 'instrumental'">
              <jet-title>Descripción Tarea Instrumental</jet-title>

              <div class="flex items-center justify-center">
                <img
                  class="w-32 h-32 mb-2"
                  src="/images/instrumental.png"
                  alt="Icono de tareas instrumentales"
                />
              </div>
              <form
                @submit.prevent="instrumentalSubmit"
                class="mt-4 flex justify-center mb-6"
              >
                <div class="mb-4 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="advanced"
                    >Añadir descripción
                  </label>

                  <div class="block max-w-md py-4 bg-white">
                    <input
                      placeholder="Escribe una nueva descripción"
                      v-model="instrumentalForm.description"
                      id="title"
                      class="
                        text-left
                        h-10
                        px-2
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
                      :href="route('techUserInstrumental', id)"
                      >Cancelar</jet-cancel-btn
                    >
                  </div>
                </div>
              </form>
            </div>

            <div v-if="advanced == 'avanzado'">
              <jet-title>Descripción Tarea Avanzada</jet-title>
              <div class="flex items-center justify-center">
                <img
                  class="w-32 h-32 mb-2"
                  src="/images/advanced.png"
                  alt="Icono de tareas avanzadas"
                />
              </div>
              <form
                @submit.prevent="advancedSubmit"
                class="mt-4 flex justify-center mb-6"
              >
                <div class="mb-4 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="advanced"
                    >Añadir descripción:
                  </label>

                  <div class="block max-w-md py-2 bg-white">
                    <input
                      placeholder="Escribe una nueva descripción"
                      id="title"
                      v-model="advancedForm.description"
                      class="
                        text-left
                        h-10
                        px-2
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
                      :href="route('techUserAdvanced', id)"
                      >Cancelar</jet-cancel-btn
                    >
                  </div>
                </div>
              </form>
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
import JetTitle from "@/Jetstream/Title.vue";
import JetCancelBtn from "@/Jetstream/CancelBtn.vue";
import JetBtn from "@/Jetstream/Btn.vue";

export default {
  props: {
    id: Number,
    task: Array,
    basic: String,
    instrumental: String,
    advanced: String,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetTitle,
    JetCancelBtn,
    JetBtn,
  },
  data() {
    return {
      id: this.id,
      task: this.task,
      basicForm: {
        id: this.id,
        task: this.task,
        description: null,
      },
      instrumentalForm: {
        id: this.id,
        task: this.task,
        description: null,
      },
      advancedForm: {
        id: this.id,
        task: this.task,
        description: null,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.post(
        route("techUserBasicDescription/store"),
        this.basicForm
      );
    },
    instrumentalSubmit() {
      this.$inertia.post(
        route("techUserInstrumentalDescription/store"),
        this.instrumentalForm
      );
    },
    advancedSubmit() {
      this.$inertia.post(
        route("techUserAdvancedDescription/store"),
        this.advancedForm
      );
    },
  },
};
</script>
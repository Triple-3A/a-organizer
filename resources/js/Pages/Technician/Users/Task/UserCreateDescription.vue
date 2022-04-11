<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="mt-3 flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <jet-title>Añadir Descripción Tarea Básica</jet-title>

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
                    >Descripción:
                  </label>

                  <div class="block max-w-md py-4 bg-white">
                    <input
                      placeholder="Escribe una nueva descripción"
                      id="title"
                      v-model="basicForm.description"
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
                    />
                  </div>

                  <div class="flex items-center justify-center">
                    <div class="mt-4">
                      <jet-btn class="mr-2" type="submit"> Guardar </jet-btn>
                      <jet-cancel-btn
                        class="ml-6"
                        :href="route('techUserBasic', id)"
                        >Cancelar</jet-cancel-btn
                      >
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div v-if="instrumental == 'instrumental'">
              <form @submit.prevent="instrumentalSubmit">
                <div class="text-center">
                  <label for="advanced">Escribe una nueva tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        v-model="instrumentalForm.description"
                        id="title"
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

                  <div class="flex items-center justify-center">
                    <div class="mt-6">
                      <jet-btn class="mr-4" type="submit"> Guardar </jet-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserInstrumental', id)"
                        >Cancelar</jet-cancel-btn
                      >
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div v-if="advanced == 'avanzado'">
              <form @submit.prevent="advancedSubmit">
                <div class="text-center">
                  <label for="advanced">Escribe una nueva tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        id="title"
                        v-model="advancedForm.description"
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

                  <div class="flex items-center justify-center">
                    <div class="mt-6">
                      <jet-btn class="mr-4" type="submit"> Guardar </jet-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserAdvanced', id)"
                        >Cancelar</jet-cancel-btn
                      >
                    </div>
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
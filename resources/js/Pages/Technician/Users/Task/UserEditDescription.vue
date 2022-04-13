<template>
  <app-layout title="Editar descripciones">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
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
                    for="basic"
                    >Editar descripción de tarea:
                  </label>

                  <div class="block max-w-md py-2 bg-white">
                    <input
                      placeholder="Introduce la tarea"
                      id="description"
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

                  <div class="flex items-center justify-center mt-5">
                    <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                    <jet-cancel-btn
                      class="ml-3"
                      :href="route('techUserBasic', userId)"
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
                <div class="mb-2 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="instrumental"
                    >Editar descripción de tarea:
                  </label>

                  <div class="block max-w-md py-2 bg-white">
                    <input
                      placeholder="Introduce la tarea"
                      id="description"
                      v-model="instrumentalForm.description"
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

                  <div class="flex items-center justify-center mt-5">
                    <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                    <jet-cancel-btn
                      class="ml-3"
                      :href="route('techUserInstrumental', userId)"
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
                    >Edita descripción de tarea:
                  </label>

                  <div class="block max-w-md py-2 bg-white">
                    <input
                      placeholder="Introduce la tarea"
                      id="description"
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

                  <div class="flex items-center justify-center mt-5">
                    <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                    <jet-cancel-btn
                      class="ml-3"
                      :href="route('techUserAdvanced', userId)"
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
    userId: Number,
    description: Array,
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
      userId: this.userId,
      basicForm: {
        userId: this.userId,
        description: this.$props.description.description,
      },
      instrumentalForm: {
        userId: this.userId,
        description: this.$props.description.description,
      },
      advancedForm: {
        userId: this.userId,
        description: this.$props.description.description,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.put(
        route("techUserBasicDescription/update", this.$props.description.id),
        this.basicForm
      );
    },
    instrumentalSubmit() {
      this.$inertia.put(
        route(
          "techUserInstrumentalDescription/update",
          this.$props.description.id
        ),
        this.instrumentalForm
      );
    },
    advancedSubmit() {
      this.$inertia.put(
        route("techUserAdvancedDescription/update", this.$props.description.id),
        this.advancedForm
      );
    },
  },
};
</script>
<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <form @submit.prevent="basicSubmit">
                <div class="text-center">
                  <label for="advanced">Escribe una nueva tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        id="title"
                        v-model="basicForm.description"
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
                      <jet-btn class="mr-4" type="submit">
                        Guardar
                      </jet-btn>
                      <jet-cancel-btn
                        class="ml-4"
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
                      <jet-btn class="mr-4" type="submit">
                        Guardar
                      </jet-btn>
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
                      <jet-btn class="mr-4" type="submit">
                        Guardar
                      </jet-btn>
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
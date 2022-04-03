<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <form @submit.prevent="basicSubmit">
                <div class="text-center">
                  <label for="basic">Edita la tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        id="description"
                        v-model="basicForm.descriptions"
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
                      <jet-submit-btn class="mr-4" type="submit">
                        Guardar
                      </jet-submit-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserBasic', userId)"
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
                  <label for="instrumental">Edita la tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        id="description"
                        v-model="instrumentalForm.descriptions"
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
                      <jet-submit-btn class="mr-4" type="submit">
                        Guardar
                      </jet-submit-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserInstrumental', userId)"
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
                  <label for="advanced">Edita la tarea: </label>
                  <br />
                  <div class="flex justify-center">
                    <div class="block max-w-sm p-12 bg-white">
                      <input
                        placeholder="Introduce la tarea"
                        id="description"
                        v-model="advancedForm.descriptions"
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
                      <jet-submit-btn class="mr-4" type="submit">
                        Guardar
                      </jet-submit-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserAdvanced', userId)"
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
import JetSubmitBtn from "@/Jetstream/SubmitBtn.vue";

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
    JetSubmitBtn,
  },
  data() {
    return {
      userId: this.userId,
      basicForm: {
        userId: this.userId,
        descriptions: this.$props.description.description,
      },
      instrumentalForm: {
        userId: this.userId,
        descriptions: this.$props.description.description,
      },
       advancedForm: {
        userId: this.userId,
        descriptions: this.$props.description.description,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.put(
        route("techUserBasic/updateDescription", this.$props.description.id),
        this.basicForm
      );
    },
    instrumentalSubmit() {
      this.$inertia.put(
        route("techUserInstrumental/updateDescription",  this.$props.description.id),
        this.instrumentalForm
      );
    },
    advancedSubmit() {
      this.$inertia.put(
        route("techUserAdvanced/updateDescription",  this.$props.description.id),
        this.advancedForm
      );
    },
  },
};
</script>
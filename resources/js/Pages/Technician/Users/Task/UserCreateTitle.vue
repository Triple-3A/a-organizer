<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="pt-10 bg-white rounded-lg flex items-center justify-center">
          <div class="mt-3 flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <jet-title>Añadir Tarea Básica</jet-title>

              <div class="flex items-center justify-center">
                <img
                  class="w-32 h-32 mb-2"
                  src="/images/basic.png"
                  alt="Icono de tareas básicas"
                />
              </div>
              <div class="text-center mt-4">
                <label for="basic"> Tarea diaria : </label>

                <button
                  @click="basicRepeatable"
                  class="
                    bg-azul
                    hover:bg-gray-700
                    text-white
                    h-4
                    w-4
                    rounded-md
                    ml-2
                  "
                >
                  {{ dailyState }}
                </button>

                <form
                  @submit.prevent="basicSubmit"
                  class="mt-4 flex justify-center mb-6"
                >
                  <div class="mb-4 mt-2 w-280">
                    <label
                      class="display: block text-noNegro font-bold"
                      for="basic"
                      >Elige una tarea básica:
                    </label>
                    <select
                      v-model="basicForm.title"
                      name="title"
                      id="title"
                      class="
                        pl-2
                        pr-9
                        py-1.5
                        bg-amarillo
                        text-base text-noNegro
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
                        v-for="basicTitle in basicTitles"
                        :value="basicTitle"
                        :selected="basicTitle"
                        :key="basicTitle.id"
                      >
                        {{ basicTitle.title }}
                      </option>
                    </select>

                    <div class="flex justify-between">
                      <div class="mt-4">
                        <div class="mb-2">
                          <label for="basic">Fecha inicio </label>
                        </div>

                        <input
                          class="rounded-md"
                          type="date"
                          v-model="basicForm.startDate"
                          required
                        />
                      </div>
                      <div class="mt-4">
                        <div class="mb-2">
                          <label for="basic">Fecha final </label>
                        </div>

                        <input
                          class="rounded-md"
                          type="date"
                          v-model="basicForm.finishDate"
                          required
                        />
                      </div>
                    </div>

                    <div class="mt-6">
                      <div class="flex items-center justify-center mt-6">
                        <jet-btn class="mr-4" type="submit"> Guardar </jet-btn>
                        <jet-cancel-btn
                          class="text-center ml-4"
                          :href="route('techUserBasic', id)"
                          >Cancelar</jet-cancel-btn
                        >
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div v-if="instrumental == 'instrumental'">
            <jet-title>Añadir Tarea Instrumental</jet-title>

            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-2"
                src="/images/instrumental.png"
                alt="Icono de tareas instrumentales"
              />
            </div>
            <div class="text-center">
              <label for="basic">Tarea diaria : </label>

              <button
                @click="instrumentalRepeatable"
                class="
                  bg-azul
                  hover:bg-gray-700
                  text-white
                  h-4
                  w-4
                  rounded-md
                  ml-2
                "
              >
                {{ dailyState }}
              </button>

              <form
                @submit.prevent="instrumentalSubmit"
                class="mt-4 flex justify-center mb-6"
              >
                <div class="mb-4 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="Instrumental"
                    >Elige una tarea instrumental:
                  </label>

                  <select
                    v-model="instrumentalForm.title"
                    name="title"
                    id="title"
                    class="
                      pl-2
                      pr-9
                      py-1.5
                      bg-amarillo
                      text-base text-noNegro
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
                      v-for="instrumentalTitle in instrumentalTitles"
                      :value="instrumentalTitle"
                      :selected="instrumentalTitle"
                      :key="instrumentalTitle.id"
                    >
                      {{ instrumentalTitle.title }}
                    </option>
                  </select>

                  <div class="flex justify-between">
                    <div class="mt-4">
                      <div class="mb-2">
                        <label for="instrumental">Fecha inicio </label>
                      </div>

                      <input
                        class="rounded-md"
                        type="date"
                        v-model="instrumentalForm.startDate"
                        required
                      />
                    </div>
                    <div class="mt-4">
                      <div class="mb-2">
                        <label for="instrumental">Fecha final </label>
                      </div>
                      <input
                        class="rounded-md"
                        type="date"
                        v-model="instrumentalForm.finishDate"
                        required
                      />
                    </div>
                  </div>

                  <div class="mt-6">
                    <div class="flex items-center justify-center mt-6">
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
          </div>
          <div v-if="advanced == 'avanzado'">
            <jet-title>Añadir Tarea Avanzada</jet-title>

            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-2"
                src="/images/advanced.png"
                alt="Icono de tareas avanzadas"
              />
            </div>
            <div class="text-center">
              <label for="basic">Tarea diaria : </label>

              <button
                @click="advancedRepeatable"
                class="
                  bg-azul
                  hover:bg-gray-700
                  text-white
                  h-4
                  w-4
                  rounded-md
                  ml-2
                "
              >
                {{ dailyState }}
              </button>
              <form
                @submit.prevent="advancedSubmit"
                class="mt-4 flex justify-center mb-6"
              >
                <div class="mb-4 mt-2 w-280">
                  <label
                    class="display: block text-noNegro font-bold"
                    for="avanzado"
                    >Elige el título avanzado:
                  </label>

                  <select
                    v-model="advancedForm.title"
                    name="title"
                    id="title"
                    class="
                      pl-2
                      pr-9
                      py-1.5
                      bg-amarillo
                      text-base text-noNegro
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
                      v-for="advancedTitle in advancedTitles"
                      :value="advancedTitle"
                      :selected="advancedTitle"
                      :key="advancedTitle.id"
                    >
                      {{ advancedTitle.title }}
                    </option>
                  </select>

                  <div class="flex justify-between">
                    <div class="mt-4">
                      <div class="mb-2">
                        <label for="advanced">Fecha inicio </label>
                      </div>

                      <input
                        class="rounded-md"
                        type="date"
                        v-model="advancedForm.startDate"
                        required
                      />
                    </div>

                    <div class="mt-4">
                      <div class="mb-2">
                        <label for="advanced">Fecha final </label>
                      </div>
                      <input
                        class="rounded-md"
                        type="date"
                        v-model="advancedForm.finishDate"
                        required
                      />
                    </div>
                  </div>

                  <div class="flex items-center justify-center mt-6">
                    <jet-btn class="mr-3" type="submit"> Guardar </jet-btn>
                    <jet-cancel-btn
                      class="ml-3"
                      :href="route('techUserAdvanced/pick', id)"
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

    basicTitles: Array,
    basic: String,

    instrumentalTitles: Array,
    instrumental: String,

    advancedTitles: Array,
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
      basic: this.basic,
      instrumental: this.instrumental,
      advanced: this.advanced,
      dailyState: "No",
      basicForm: {
        id: this.id,
        title: null,
        repeatable: false,
        startDate: null,
        finishDate: null,
      },
      instrumentalForm: {
        id: this.id,
        title: null,
        repeatable: false,
        startDate: null,
        finishDate: null,
      },
      advancedForm: {
        id: this.id,
        title: null,
        repeatable: false,
        startDate: null,
        finishDate: null,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.post(route("techUserBasic/store"), this.basicForm);
    },
    instrumentalSubmit() {
      this.$inertia.post(
        route("techUserInstrumental/store"),
        this.instrumentalForm
      );
    },
    advancedSubmit() {
      this.$inertia.post(route("techUserAdvanced/store"), this.advancedForm);
    },
    basicRepeatable() {
      this.basicForm.repeatable == false
        ? ((this.basicForm.repeatable = true), (this.dailyState = "Si"))
        : ((this.basicForm.repeatable = false), (this.dailyState = "No"));
    },
    instrumentalRepeatable() {
      this.instrumentalForm.repeatable == false
        ? ((this.instrumentalForm.repeatable = true), (this.dailyState = "Si"))
        : ((this.instrumentalForm.repeatable = false),
          (this.dailyState = "No"));
      console.log(this.instrumentalForm.repeatable);
    },
    advancedRepeatable() {
      this.advancedForm.repeatable == false
        ? ((this.advancedForm.repeatable = true), (this.dailyState = "Si"))
        : ((this.advancedForm.repeatable = false), (this.dailyState = "No"));
      console.log(this.advancedForm.repeatable);
    },
  },
};
</script>

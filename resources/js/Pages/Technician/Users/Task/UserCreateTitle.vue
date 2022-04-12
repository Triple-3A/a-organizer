<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
            <div v-if="basic == 'básico'">
              <div class="p-10">
                <jet-title>Viendo form básico -> {{ id }}</jet-title>
              </div>
              <form @submit.prevent="basicSubmit">
                <div class="text-center">
                  <label for="basic">Elige el título básico: </label>
                  <br />
                  <select
                    v-model="basicForm.title"
                    name="title"
                    id="title"
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
                      v-for="basicTitle in basicTitles"
                      :value="basicTitle"
                      :selected="basicTitle"
                      :key="basicTitle.id"
                    >
                      {{ basicTitle.title }}
                    </option>
                  </select>
                  <br/>
                  <label for="basic">Elige si es repetible: </label>
                  <br/>
                  <button></button>
                  <label for="basic">Elige una fecha de inicio: </label>
                  <br/>
                  <input type="date" v-model="basicForm.startDate">
                  <br/>
                  <label for="basic">Elige una fecha de final: </label>
                  <br/>
                  <input type="date" v-model="basicForm.finishDate">
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
              <div class="p-10">
                <jet-title>Viendo form instrumental -> {{ id }}</jet-title>
              </div>
              <form @submit.prevent="instrumentalSubmit">
                <div class="text-center">
                  <label for="Instrumental"
                    >Elige el título instrumental:
                  </label>
                  <br />
                  <select
                    v-model="instrumentalForm.title"
                    name="title"
                    id="title"
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
                      v-for="instrumentalTitle in instrumentalTitles"
                      :value="instrumentalTitle"
                      :selected="instrumentalTitle"
                      :key="instrumentalTitle.id"
                    >
                      {{ instrumentalTitle.title }}
                    </option>
                  </select>

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
              <div class="p-10">
                <jet-title>Viendo form avanzado -> {{ id }}</jet-title>
              </div>
              <form @submit.prevent="advancedSubmit">
                <div class="text-center">
                  <label for="avanzado">Elige el título avanzado: </label>
                  <br />
                  <select
                    v-model="advancedForm.title"
                    name="title"
                    id="title"
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
                      v-for="advancedTitle in advancedTitles"
                      :value="advancedTitle"
                      :selected="advancedTitle"
                      :key="advancedTitle.id"
                    >
                      {{ advancedTitle.title }}
                    </option>
                  </select>

                  <div class="flex items-center justify-center">
                    <div class="mt-6">
                      <jet-btn class="mr-4" type="submit">
                        Guardar
                      </jet-btn>
                      <jet-cancel-btn
                        class="ml-4"
                        :href="route('techUserAdvanced/pick', id)"
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
  },
};
</script>

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

                  <div class="flex items-center justify-center">
                    <div class="mt-6">
                      <jet-submit-btn class="mr-4" type="submit">
                        Guardar
                      </jet-submit-btn>
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
                      <jet-submit-btn class="mr-4" type="submit">
                        Guardar
                      </jet-submit-btn>
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
    id: Number,

    basicTitles: Array,
    basic: String,

    instrumentalTitles: Array,
    instrumental: String,

    // advanced: String,
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
      id: this.id,
      basic: this.basic,
      instrumental: this.instrumental,
      // advanced: this.advanced,
      basicForm: {
        id: this.id,
        title: null,
        // repeatable: null,
        // time: null,
        // date: null,
      },
      instrumentalForm: {
        id: this.id,
        title: null,
        //   task: null,
      },
      // advancedForm: {
      //   title: null,
      //   task: null,
      // },
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
    // advancedSubmit() {
    //   this.$inertia.post(
    //     route("techUserAdvanced/store", id),
    //     this.advancedForm
    //   );
    // },
  },
};
</script>

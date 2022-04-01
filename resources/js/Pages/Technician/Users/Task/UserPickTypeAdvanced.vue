<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
            <form @submit.prevent="submit">
              <div class="text-center">
                <label for="Instrumental">Elige el tipo: </label>
                <br />
                <select
                  v-model="advanced.type"
                  name="type"
                  id="type"
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
                    value="educación"
                    selected="educación"
                  >
                    Educación
                  </option>
                  <option
                    class="text-xs bg-orange-100 text-bold"
                    value="trabajo"
                    selected="trabajo"
                  >
                    Trabajo
                  </option>
                  <option
                    class="text-xs bg-orange-100 text-bold"
                    value="juego"
                    selected="juego"
                  >
                    Juego
                  </option>
                  <option
                    class="text-xs bg-orange-100 text-bold"
                    value="tiempo libre"
                    selected="tiempoLibre"
                  >
                    Tiempo libre
                  </option>
                </select>

                <div class="flex items-center justify-center">
                  <div class="mt-6">
                    <jet-submit-btn class="mr-4" type="submit">
                      Guardar
                    </jet-submit-btn>
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
      advanced: {
        id: this.id,
        type: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("techUserAdvanced/create"), this.advanced);
    },
  },
};
</script>

<template>
  <app-layout title="Elige el tipo">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="mt-3">
            <jet-title>Añadir Tarea Avanzada</jet-title>
            <div class="flex items-center justify-center">
              <img
                class="w-32 h-32 mb-2"
                src="/images/advanced.png"
                alt="Icono de tareas básicas"
              />
            </div>

            <form
              @submit.prevent="submit"
              class="mt-4 flex justify-center mb-6"
            >
              <div class="mb-4 mt-2 w-280">
                <label
                  class="display: block text-noNegro font-bold"
                  for="Instrumental"
                  >Elige el tipo de tarea:
                </label>

                <select
                  v-model="advanced.type"
                  name="type"
                  id="type"
                  class="
                    pl-2
                    pr-9
                    py-1.5
                    bg-amarillo
                    text-base 
                    text-noNegro
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
                    value="educación"
                    selected="educación"
                  >
                    Educación
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    value="trabajo"
                    selected="trabajo"
                  >
                    Trabajo
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    value="juego"
                    selected="juego"
                  >
                    Juego
                  </option>
                  <option
                    class="text-xs bg-white text-bold"
                    value="tiempo libre"
                    selected="tiempoLibre"
                  >
                    Tiempo libre
                  </option>
                </select>

                <div class="flex items-center justify-center mt-6">
                  <jet-btn class="mr-3" type="submit"> Siguiente </jet-btn>
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

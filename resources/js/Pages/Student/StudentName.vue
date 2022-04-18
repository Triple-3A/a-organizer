<template>
  <app-layout title="Nombre">
    <div
      class="
        min-h-screen
        flex
        justify-center
        items-center
        mx-auto
        max-w-7xl
        sm:px-6
        lg:px-8
      "
    >
      <div class="flex flex-col items-center justify-center">
        <jet-title class="mb-8">¡HOLA!</jet-title>
        <jet-sub-title class="mb-8"
          >¿Cómo te gustaría que te llamemos?</jet-sub-title
        >
        <div class="flex flex-col items-center justify-center">
          <form @submit.prevent="submit">
            <div class="block max-w-sm px-12 py-3 bg-white">
              <input
                placeholder="Introduce tu nombre"
                v-model="form.nickname"
                class="
                  w-full
                  h-10
                  px-2
                  mt-1
                  text-xs text-center
                  border-2
                  rounded
                  shadow-sm
                  border-amarillo
                "
                required
              />
            </div>
            <div class="flex items-center justify-center mt-12">
              <jet-btn>Siguiente</jet-btn>
            </div>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetTitle from "@/Jetstream/Title.vue";
import JetSubTitle from "@/Jetstream/SubTitle.vue";
import JetOwnInput from "@/Jetstream/OwnInput.vue";
import JetBtn from "@/Jetstream/Btn.vue";

export default {
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetOwnInput,
    JetBtn,
    Head,
    Link,
  },

  data() {
    return {
      form: this.$inertia.form({
        nickname: null,
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route("assignStudentNickname"));
    },
  },
};
</script>
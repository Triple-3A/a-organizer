<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="flex items-center justify-center">
        <div class="p-10 bg-white rounded-lg flex items-center justify-center">
          <div class="flex items-center justify-center">
            <form @submit.prevent="basicSubmit">
              <div class="text-center">
                <label for="advanced">Escribe una nueva tarea: </label>
                <br />
                <div class="flex justify-center">
                  <div class="block max-w-sm p-12 bg-white">
                    <input
                      placeholder="Introduce la tarea"
                      id="description"
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
        descriptionId: this.$props.description.id,
        description: this.$props.description.description,
      },
    };
  },
  methods: {
    basicSubmit() {
      this.$inertia.post(
        route("techUserBasic/updateDescription"),
        this.basicForm
      );
    },
  },
};
</script>
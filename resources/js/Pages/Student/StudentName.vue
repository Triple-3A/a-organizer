<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <div class="flex flex-col items-center justify-center">
          <div
            class="
              px-10
              bg-white
              rounded-lg
              flex flex-col
              items-center
              justify-center
            "
          >
            <jet-title>¡HOLA!</jet-title>
            <jet-sub-title
              >Dinos como te gustaría que te llamemos</jet-sub-title
            >
          </div>
          <div class="flex flex-col items-center justify-center">
            <div class="block max-w-sm px-12 py-3 bg-white">
              <jet-own-input class="placeholder p-2 mb-6"> </jet-own-input>
            </div>
            <Link :href="route('studentPic')">
              <jet-btn
                class="
                  font-poppings
                  text-base
                  font-semibold
                  text-center
                  align-middle
                "
                >Siguiente</jet-btn
              >
            </Link>
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
};
</script>
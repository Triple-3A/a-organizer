<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


        <div class="flex flex-col items-center justify-center">
          <div class="p-10 bg-white rounded-lg flex flex-col items-center justify-center">
            <jet-title>¡QUEREMOS VERTE!</jet-title>
            <jet-sub-title>Elige una de estas imágenes</jet-sub-title>

            <!-- contenedooooooooooooooooooooor imagenesssssssssssssssss -->
            <div class="flex flex-col justify-center align-middle">
                <div class="flex flex-row flex-wrap justify-center align-middle max-w-sm p-12 bg-white">
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                </div>
                    <jet-submit-btn class="font-poppings text-base font-semibold text-center align-middle">Siguiente</jet-submit-btn>

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
import JetSubTitle from "@/Jetstream/SubTitle.vue";
import JetSubmitBtn from "@/jetstream/SubmitBtn.vue";


export default {
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetSubmitBtn,

    Head,
    Link,
  },
};
</script>
<template>
  <app-layout title="Dashboard">
    <!-- <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <body class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg"> -->
    <h1 class="text-xl font-bold">
      Bienvenido, te encuentras en la vista de StandBy!!!
    </h1>
    <br />
    <h2 class="">Espere a que se le asigne un rol</h2>
    <!-- <div class="mb-4">

                            </div> -->

    <div class="my-2">
      <jet-create-btn />
    </div>

    <div class="mb-2">
      <jet-delete-btn />
    </div>

    <div class="mb-2">
      <jet-submit-btn />
    </div>

    <div class="mb-2">
      <jet-cancel-btn />
    </div>

    <div class="mb-2">
      <jet-arrow-next-svg />
    </div>

    <div class="mb-2">
      <jet-input placeholder="Name"></jet-input>
    </div>

    <!-- <div class="mb-2">
      <jet-card>
        <Link class="font-medium" :href="route('basicTitle')">
          <jet-basic-svg/>
          <h1 class="text-xl font-bold text-center">Tareas Básicas</h1></Link
        >
      </jet-card>
    </div>

    <div class="mb-2">
      <jet-card>
        <Link class="font-medium" :href="route('basicTitle')">
          <jet-instrumental-svg/>
          <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1></Link
        >
      </jet-card>
    </div>

    <div class="mb-2">
      <jet-card>
        <Link class="font-medium" :href="route('basicTitle')">
          <jet-advanced-svg/>
          <h1 class="text-xl font-bold text-center">Tareas Avanzadas</h1></Link
        >
      </jet-card>
    </div>

    <div class="mb-2">
      <jet-card>
        <Link class="font-medium" :href="route('basicTitle')">
          <jet-titles-categories-svg/>
          <h1 class="text-xl font-bold text-center">Gestión de tareas</h1></Link
        >
      </jet-card>
    </div>

    <div class="mb-2">
      <jet-card>
        <Link class="font-medium" :href="route('basicTitle')">
          <jet-users-categories-svg/>
          <h1 class="text-xl font-bold text-center">Gestión de Usuarios</h1></Link
        >
      </jet-card>
    </div> -->
    <!-- </div>
          </body>
        </div>
      </div>
    </div> -->
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetSubmitBtn from "@/Jetstream/SubmitBtn.vue";
import JetCancelBtn from "@/Jetstream/CancelBtn.vue";
import JetCard from "@/Jetstream/Card.vue";
import JetBasicSvg from "@/Jetstream/BasicSvg.vue";
import JetArrowNextSvg from "@/Jetstream/ArrowNextSvg.vue";
import JetInput from "@/Jetstream/OwnInput.vue";
// import JetInstrumentalSvg from "@/Jetstream/InstrumentalSvg.vue";
// import JetAdvancedSvg from "@/Jetstream/AdvancedSvg.vue";
// import JetTitlesCategoriesSvg from "@/Jetstream/TitlesCategoriesSvg.vue";
// import JetUsersCategoriesSvg from "@/Jetstream/UsersCategoriesSvg.vue";

export default {
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
    JetDeleteBtn,
    JetSubmitBtn,
    JetCancelBtn,
    JetCard,
    JetBasicSvg,
    JetArrowNextSvg,
    JetInput,
    // JetInstrumentalSvg,
    // JetAdvancedSvg,
    // JetTitlesCategoriesSvg,
    // JetUsersCategoriesSvg,
  },
};
</script>

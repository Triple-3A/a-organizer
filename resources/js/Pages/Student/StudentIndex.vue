<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


        <section id="pantalla-3-daily-user">
        <div class="flex flex-col items-center justify-center">
          <div class="p-10 bg-white rounded-lg flex flex-col items-center justify-center w-9/12">

            <jet-title>¡HOLA {{ username }}!</jet-title>
            <jet-sub-title>Este es tu progreso de hoy</jet-sub-title>

            <!-- componente resumen tareas -->
            <jet-medidor-tareas/>
               <!-- contenedooooooooooooooooooooor imagenesssssssssssssssss -->

            <div class="flex justify-start w-8/12">
              <h2 class="font-poppings text-lg font-base text-noNegro text-left mb-4">Estas son tus tareas para hoy</h2>
          </div>

            <!--  PROBANDO LA CARD -->
            <jet-card class="w-8/12"></jet-card>


            <!-- ATENCIÓN CAGADA INCOMINGGGGGGGGGGGG --- PELIGRO PELIGROOOOOOOO-->


            <!--cambiar argumentos en v-for -->
            <!-- cómo pasamos las tareas creadas y asignadas por el tutor? -->

            <!--<div v-for="task in tasks" :key="basic.id">
            <div class="flex mb-10 border-4 rounded-lg row border-amarillo">
              <div class="flex items-center justify-start p-4 rounded-lg">
                <div>
                  <jet-card/>
                </div>
                <div class="px-8"></div>
                <div class="flex flex-row">
                  <h1 class="ml-12 text-xl font-bold">
                    {{ basic.title }}
                  </h1>
                </div>
                <div class="px-16"></div>
                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('basicTitle/delete', basic.id)"
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div> -->


          </div>
        </div>
        </section>

      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetTitle from "@/Jetstream/Title.vue";
import JetSubTitle from "@/Jetstream/SubTitle.vue";
import JetUserAvatar from "@/Jetstream/UserAvatar.vue";
import JetButtonRegular from "@/Jetstream/ButtonRegular.vue";
import JetBtn from "@/Jetstream/Btn.vue";
import JetMedidorTareas from "@/Jetstream/MedidorTareas.vue";
import JetCard from "@/Jetstream/Card.vue";

export default {
    props: {
    userTasks: Array,
    totalTasks: Number,
    totalDoneTasks: Number,
  },
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetOwnInput,
    JetUserAvatar,
    JetButtonRegular,
    JetMedidorTareas,
    JetBtn,
    JetCard,
    
    Head,
    Link,
  },
};
</script>


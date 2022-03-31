<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


        
        <section id="pantalla-1-nombre-user">
        <div class="flex flex-col items-center justify-center">
          <div class="px-10 bg-white rounded-lg flex flex-col items-center justify-center">

            <jet-title>¡HOLA!</jet-title>
            <jet-sub-title>Dinos como te gustaría que te llamemos</jet-sub-title>

          </div>

          <div class="flex flex-col items-center justify-center">
            <div class="block max-w-sm px-12 py-3 bg-white">
              <jet-own-input class="placeholder p-2 mb-6">
              </jet-own-input>
            </div>
            <jet-submit-btn class="font-poppings text-base font-semibold text-center align-middle">Siguiente</jet-submit-btn>
          </div>
        </div>
        </section>



        <section id="pantalla-2-foto-user">
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
        </section>



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
import JetOwnInput from "@/Jetstream/OwnInput.vue";
import JetUserAvatar from "@/jetstream/UserAvatar.vue";
import JetButtonRegular from "@/jetstream/ButtonRegular.vue";
import JetSubmitBtn from "@/jetstream/SubmitBtn.vue";
import JetMedidorTareas from "@/jetstream/MedidorTareas.vue";

export default {
    props: {
    username: String,
  },
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetOwnInput,
    JetUserAvatar,
    JetButtonRegular,
    JetMedidorTareas,
    JetSubmitBtn,
    
    Head,
    Link,
  },
};
</script>
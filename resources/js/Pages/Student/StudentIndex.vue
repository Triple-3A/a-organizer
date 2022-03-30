<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <section id="pantalla-1-nombre-user">
        <div class="flex flex-col items-center justify-center">
          <div class="p-10 bg-white rounded-lg flex flex-col items-center justify-center">
            <h1 class="font-poppings text-xxl font-bold text-azul pb-4">¡HOLA!</h1>
            <h2 class="font-poppings text-lg font-bold text-amarillo text-center">
              Dinos como te gustaría que te llamemos</h2>
          </div>

          <div class="flex justify-center">
            <div class="block max-w-sm p-12 bg-white">
              <jet-own-input class="placeholder p-2">

              </jet-own-input>
            </div>
          </div>
        </div>
        </section>


        <section id="pantalla-2-foto-user">
        <div class="flex flex-col items-center justify-center">
          <div class="p-10 bg-white rounded-lg flex flex-col items-center justify-center">
            <h1 class="font-poppings text-xxl font-bold text-azul pb-4">¡QUEREMOS VERTE!</h1>
            <h2 class="font-poppings text-lg font-bold text-amarillo text-center">Elige una de estas imágenes</h2>
            <!-- contenedooooooooooooooooooooor imagenesssssssssssssssss -->
            <div class="flex flex-col justify-center align-middle">
                <div class="flex flex-row flex-wrap justify-center align-middle max-w-sm p-12 bg-white">
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                    <jet-user-avatar/>
                </div>

                    <jet-button-regular class="font-poppings text-base font-semibold">Siguiente</jet-button-regular>

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
import JetOwnInput from "@/Jetstream/OwnInput.vue";
import JetUserAvatar from "@/jetstream/UserAvatar.vue";
import JetButtonRegular from "@/jetstream/ButtonRegular.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    JetOwnInput,
    JetUserAvatar,
    JetButtonRegular,
    Head,
    Link,
  },
};
</script>
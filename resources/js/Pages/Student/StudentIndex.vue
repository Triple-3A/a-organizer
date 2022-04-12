<template>
  <app-layout title="Dashboard">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <section id="pantalla-3-daily-user">
        <div class="flex flex-col items-center justify-center">
          <div class="p-10">
            <jet-title>¡HOLA {{ username }}!</jet-title>
            <jet-sub-title>Este es tu progreso de hoy</jet-sub-title>
            <!-- componente resumen tareas -->
            <jet-medidor-tareas />

            <div class="flex justify-start w-8/12">
              <h2
                class="
                  font-poppings
                  text-lg
                  font-base
                  text-noNegro text-left
                  mb-4
                "
              >
                Estas son tus tareas para hoy
              </h2>
            </div>


            <div class="mb-10 w-8/12" v-for="array in all" :key="array.id">
              <div v-for="task in array[0]" :key="task.id">
                <div
                  v-for="title in array[1]"
                  :key="title.id"
                  id="tarea"
                  class="flex flex-row items-center justify-start p-4 border-4 rounded-lg row border-amarillo"
                >
                  <!-- icono -->  <div class="px-8"></div>
                  <!-- -->   <div class="flex flex-row">
                  <!-- -->     <h1 class="ml-12 text-xl font-bold">
                        {{ title.title }}
                      </h1>
                    </div>
                  <!-- boton -->   <div class="px-16"></div>
                </div>
              </div>


              <div
                v-for="description in array[2]"
                :key="description.id"
                class= "bg-amarillo opacity-50"
              >
                <div class="flex items-center justify-start p-2 rounded-lg">
                  <div class="px-8"></div>
                  <div class="flex flex-row">
                    <h1 class="ml-12 text-xl font-bold opacity-100">
                      · {{ description.description }}
                    </h1>
                  </div>
                  <div class="px-16"></div>
                </div>
              </div>
              
            </div>
          </div>

          <!-- <div class="w-3/4 mx-auto lg:w-2/5 flex-column">
      <div
        class="bg-amarillo flex items-cente justify-center px-10 py-6 mb-12 border-4 rounded-xl border-amarillo drop-shadow-md hover:drop-shadow-2xl"
      >
      <div class="text-white">
      <h1>Tareas completadas</h1>
      </div>
            <div class="w-full bg-gray-200 rounded-full">
  <div class="bg-azul text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-l-full px-4" style="width: 50%">2/5</div>
</div>
         <slot></slot>
        </div>
      </div> -->

          <div class="w-3/4 mx-auto flex-column">
            <div
              class="
                bg-amarillo
                flex
                items-center
                justify-center
                px-10
                py-6
                mb-12
                border-4
                rounded-xl
                border-amarillo
                drop-shadow-md
                hover:drop-shadow-2xl
              "
            >
              <div class="columns-1">
                <div class="pl-9 w-80">
                  <h1 class="text-lg text-white font-bold">
                    Tareas completadas
                  </h1>
                </div>
                <div class="w-full bg-gray-200 rounded-full">
                  <div
                    class="
                      bg-azul
                      text-xs
                      font-medium
                      text-blue-100 text-center
                      p-0.5
                      leading-none
                      rounded-l-full
                      px-4
                    "
                    style="width: 40%"
                  >
                    2/5
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
    all: Array,
    username: String,
  },
  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
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

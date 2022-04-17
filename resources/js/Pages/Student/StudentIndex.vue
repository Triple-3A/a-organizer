<template>
  <app-layout title="Tareas">
    <!--     <div class="mx-auto max-w-7xl sm:px-6 lg:px-8"> -->
    <div class="flex flex-col items-center justify-center pt-10">
      <jet-title>¡HOLA {{ username }}!</jet-title>
      <jet-sub-title>Este es tu progreso de hoy</jet-sub-title>
      <!-- componente resumen tareas -->
      <jet-progress-bar :totalTasks="totalTasks" :doneTasks="doneTasks" />

      <div class="flex justify-start w-10/12">
        <h2 class="font-poppings text-sm font-base text-noNegro text-left mb-4">
          Estas son tus tareas para hoy
        </h2>
      </div>




      <!-- ACORDEON PRUEBA -->

<div id="accordionExample" class="accordion w-10/12 mb-10" v-for="array in all" :key="array.id" >
       <!-- AQUÍ IRÍAN LAS TAREAS  -->
  <div class="accordion-item bg-white border-4 border-amarillo" v-for="task in array[0]" :key="task.id">
    <h2 v-for="title in array[1]"
            :key="title.id"
            id="tarea" class="accordion-header mb-0 flex flex-row
              items-center
              justify-between
              p-4
              bg-white
              drop-shadow-md
              hover:drop-shadow-2xl
            " > <!--id="headingOne" id original del h2-->
      <button class="
        accordion-button
        relative
        flex
        items-center
        w-full
        text-base text-gray-800 text-left
        bg-white
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
        aria-controls="collapseOne">
         <!-- ICONO -->
              <div class="items-center w-2/6 h-1/3">
                <img
                  :src="array[1][0].icons[0].icon"
                  alt="Icono de tarea"
                />
              </div>
              <!-- TÍTULO -->
              <div class="flex flex-row pl-9 w-80">
                <h1 class="text-sm text-noNegro font-bold">
                  {{ title.title }}
                </h1>
              </div>
              <!-- BOTON -->
              <jet-button-done />
      </button>
      
    </h2>

            <!-- AQUÍ IRÍAN LAS SUBTAREAS -->
    <div id="collapseOne" class="accordion-collapse collapse show w-10/12 mb-10" aria-labelledby="headingOne"
      data-bs-parent="#accordionExample">
      <div class="accordion-body py-4 px-5">
        This is the first item's accordion body
      </div>
    </div>
  </div>
</div>



      <!-- TAREAS -->

      <div class="mb-10 w-10/12" v-for="array in all" :key="array.id">
        <div v-for="task in array[0]" :key="task.id">
          <div
            v-for="title in array[1]"
            :key="title.id"
            id="tarea"
            class="
              flex flex-row
              items-center
              justify-between
              p-4
              border-4
              rounded-lg
              border-amarillo
              bg-white
              drop-shadow-md
              hover:drop-shadow-2xl
            "
          >
              <!-- ICONO -->
              <div class="items-center w-2/6 h-1/3">
                <img
                  :src="array[1][0].icons[0].icon"
                  alt="Icono de tarea"
                />
              </div>
              <!-- TÍTULO -->
              <div class="flex flex-row pl-9 w-80">
                <h1 class="text-sm text-noNegro font-bold">
                  {{ title.title }}
                </h1>
              </div>
              <!-- BOTON -->
              <jet-button-done />
                          
            </div>
        </div>

        <!-- SUBTAREAS -->
        <div
          v-for="description in array[2]"
          :key="description.id"
          class="bg-amarilloMedio"
        >
          <div class="flex items-center justify-between px-2 p-2 rounded-lg">
            <div class="flex flex-row">
              <h1 class="ml-12 text-base font-medium opacity-100">
                · {{ description.description }}
              </h1>
            </div>
          </div>
        </div>
      </div>

      <!-- </div> -->
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
import JetProgressBar from "@/Jetstream/ProgressBar.vue";
import JetCard from "@/Jetstream/Card.vue";
import JetButtonDone from "@/Jetstream/ButtonDone.vue";

export default {
  props: {
    all: Array,
    username: String,
  },

  data() {
    return {
      totalTasks: 0,
      doneTasks: 0,
    };
  },

  components: {
    AppLayout,
    JetTitle,
    JetSubTitle,
    JetUserAvatar,
    JetButtonRegular,
    JetProgressBar,
    JetBtn,
    JetCard,
    JetButtonDone,

    Head,
    Link,
  },

  beforeMount() {
    this.checkTotalTasks();
  },

  methods: {
    checkTotalTasks() {
      this.all.forEach((task) => {
        this.totalTasks++;
        if (task[0][0]["done"] === 1) {
          this.doneTasks++;
        }
      });
    },
  },
};
</script>

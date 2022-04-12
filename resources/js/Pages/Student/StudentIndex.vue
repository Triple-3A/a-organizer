<template>
  <app-layout title="Dashboard">
<!--     <div class="mx-auto max-w-7xl sm:px-6 lg:px-8"> -->
        <div class="flex flex-col items-center justify-center pt-10">
          <jet-title>¡HOLA {{ username }}!</jet-title>
          <jet-sub-title>Este es tu progreso de hoy</jet-sub-title>
          <!-- componente resumen tareas -->
          <jet-progress-bar :totalTasks="totalTasks" :doneTasks="doneTasks" />

          <div class="flex justify-start w-8/12">
            <h2
              class="
                font-poppings
                text-sm
                font-base
                text-noNegro text-left
                mb-4
              "
            >
              Estas son tus tareas para hoy
            </h2>
          </div>












            <!-- TAREAS -->


          <div class="mb-10 w-9/12" v-for="array in all" :key="array.id">
            <div v-for="task in array[0]" :key="task.id">
              <div
                v-for="title in array[1]"
                :key="title.id"
                id="tarea"
                class="
                  flex flex-row
                  items-center
                  justify-between 
                  px-2
                  p-4
                  border-4
                  rounded-lg
                  border-amarillo
                "
              >
                <!-- ICONO -->
                <div/>
                <!-- TÍTULO -->
                <div class="flex flex-row">
                  <h1 class="text-lg font-bold">
                    {{ title.title }}
                  </h1>
                </div>
                  <jet-button-done/>
                  <!-- boton -->
                <div/>
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
                  <h1 class="ml-12 text-lg font-medium opacity-100">
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

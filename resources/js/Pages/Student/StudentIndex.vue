<template>
  <app-layout title="Tareas">
    <div class="flex flex-col items-center justify-center pt-10">
      <jet-title>¡HOLA {{ username }}!</jet-title>
      <jet-sub-title>Este es tu progreso de hoy</jet-sub-title>
      <jet-progress-bar :totalTasks="totalTasks" :doneTasks="doneTasks" />

      <div class="flex justify-start w-10/12">
        <h2 class="font-poppings text-sm font-base text-noNegro text-left mb-4">
          Estas son tus tareas para hoy
        </h2>
      </div>

      <div
        id="accordionExample"
        class="accordion w-10/12 mb-10"
        v-for="array in all"
        :key="array.id"
      >
        <jet-student-task-card :wholeTask="array" />
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
import JetProgressBar from "@/Jetstream/ProgressBar.vue";
import JetCard from "@/Jetstream/Card.vue";
import JetStudentTaskCard from "@/Jetstream/StudentTaskCard.vue";

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
    JetStudentTaskCard,

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

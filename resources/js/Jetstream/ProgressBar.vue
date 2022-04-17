<template>
  <div
    class="bg-amarillo rounded-lg w-10/12 flex flex-col p-5 mb-4"
  >
    <div class="flex flex-row justify-between mb-4 align-middle">
      <h2
        class="
          font-poppings
          font-bold
          text-base
          sm:text-xl
          text-white 
          text-left
        "
      >
        Tareas completadas
      </h2>
      <h1
        class="
          font-poppings
          font-bold
          text-base
          sm:text-xl
          text-white 
          text-right
        "
      >
        {{ doneTasks }}/{{ totalTasks }}
      </h1>
    </div>
    <div>
      <div class="w-full bg-white h-4 rounded-full">
        <div
          class="
            bg-azul
            h-4
            leading-none
            rounded-l-full rounded-r-full
          "
          :style="progressBarClass"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  props: ["totalTasks", "doneTasks"],

  data() {
    return {
      singleTaskPercentage: 0,
      progressPercentage: 0,
      progressBarClass: "",
    };
  },

  mounted() {
    this.checkProgressPercentage();
  },

  updated() {
    this.checkProgressPercentage();
  },

  methods: {
    checkProgressPercentage() {
      if (this.totalTasks > 0) {
      this.singleTaskPercentage = 100 / this.totalTasks;
      this.progressPercentage = this.singleTaskPercentage * this.doneTasks;
      console.log(this.totalTasks);
      this.progressBarClass = "width: " + this.progressPercentage + "%";
      } else {
        this.progressBarClass = "width: 0%";
      }
    },
  },
});
</script>
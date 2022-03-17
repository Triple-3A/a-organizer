<template>
  <div>
    <td class="flex flex-col">
      <div>
        <strong> {{ name }} </strong>
      </div>
      <div>{{ email }} {{ id }}</div>
    </td>
  </div>
  <div class="flex flex-row justify-between">
    <td>
      <div class="inline-flex">
        <button :class="technicianButtonClass">Tecn.</button>
        <button :class="studentButtonClass">Estu.</button>
      </div>
    </td>
  </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  props: ["email", "name", "id", "role"],

  data() {
    return {
      technicianButtonClass: "",
      studentButtonClass: "",
    };
  },
  mounted() {
    if (this.role == 3) {
      this.technicianButtonClass =
        "bg-azul600 text-white font-bold py-2 px-4 rounded-l cursor-default";
      this.studentButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-r";
    }
    if (this.role == 4) {
      this.technicianButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
      this.studentButtonClass =
        "bg-azul600 text-white font-bold py-2 px-4 rounded-r cursor-default";
    }
    if (this.role == 1) {
      this.technicianButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
      this.studentButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-r";
    }
  },

  methods: {
    submit() {},
  },
});
</script>

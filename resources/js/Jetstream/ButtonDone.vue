<template>
  <form class="mr-2" @submit.prevent="submit">
    <button type="submit" :class="buttonClass" @click="updateButton()">
    </button>
  </form>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  props: ["id", "done"],

  data() {
    return {
      buttonClass: "",
      form: this.$inertia.form({
        task_id: this.id,
        done: 0,
      }),
    };
  },

  mounted() {
    this.checkTaskDoneState();
  },

  methods: {
    checkTaskDoneState() {
      if (this.done === 0) {
        this.buttonClass =
          "flex justify-end items-center w-4 h-4 rounded-xl bg-white border-4 border-noNegro hover:bg-azul disabled:opacity-25 transition";
      } else {
        this.buttonClass =
          "flex justify-end items-center w-4 h-4 rounded-xl bg-azul border-4 border-noNegro disabled:opacity-25 transition";
      }
    },

    submit() {
      if (this.done === 0) {
        this.form.done = 1;
        this.form.post(this.route("doneTask"));
        window.location.reload();
      }
    },
  },
});
</script>

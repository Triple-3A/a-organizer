<template>
  <form @submit.prevent="submit">
    <button
      type="button"
      :class="buttonClass"
    >
      <!-- ml-10 -->
      <slot></slot>
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
        done: !this.done,
      }),
    };
  },

  mounted() {
    if ((this.done = 0)) {
      this.buttonClass =
        "flex justify-end items-center w-3  rounded-lg bg-white border-4 border-noNegro hover:bg-azul active:bg-azul disabled:opacity-25 transition";
    } else {
      this.buttonClass =
        "flex justify-end items-center w-3  rounded-lg bg-white border-4 border-noNegro hover:bg-azul active:bg-azul disabled:opacity-25 transition";
    }
  },

  methods: {
    submit() {
      this.form.post(this.route("doneTask"));
    },
  },
});
</script>

<template>
  <svg
    class="w-5 h-5 ml-2 mr-1 rotate-180 fill-amarillo"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      fill-rule="evenodd"
      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
      clip-rule="evenodd"
    ></path>
  </svg>
  <p
    class="
      mr-2.5
      font-bold
      text-amarillo
      rounded-lg
      text-sm
      py-2.5
      text-center
      flex
      items-center
    "
  >
    <slot></slot>
  </p>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Head,
    Link
  }
}
</script>
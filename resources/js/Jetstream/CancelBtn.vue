<template>
  <Link
    bg-red-500
    class="
      inline-flex
      items-center
      w-48
      py-2
      px-6
      text-base text-center
      font-poppings font-semibold
      align-middle
      tracking-widest
      text-white
      transition
      rounded-md
      bg-red-500
      hover:bg-gray-700
      active:bg-gray-900
      disabled:opacity-25
    "
    >Cancelar
  </Link>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Head,
    Link,
  },
};
</script>
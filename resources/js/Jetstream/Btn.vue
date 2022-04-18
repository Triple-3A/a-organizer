<template>
  <button
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
      bg-azul
      hover:bg-gray-700
      active:bg-gray-900
      disabled:opacity-25
    "
  >
    <slot></slot>
  </button>
</template>
<template>
  <app-layout title="En espera">
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white sm:rounded-lg">
          <div class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg">
              <h1 class="text-xl text-noNegro font-bold">
                Bienvenido, te has registrado correctamente
              </h1>
              <br />
              <h2 class="text-noNegro">Espera a que te asignen un rol</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>

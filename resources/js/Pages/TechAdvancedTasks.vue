<template>
    <app-layout title="Dashboard">
        <Link class="font-medium" :href="route('categories')">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="float-left w-12 h-12 text-amarillo"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"
                        /></svg
                ></Link>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <body class="flex items-center justify-center">
                        <div class="p-10 bg-white rounded-lg ">
                            <h1 class="text-xl font-bold ">Bienvenido, te encuentras en la vista de Tareas Avanzadas!!!</h1><br>
                        </div>
                    </body>
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
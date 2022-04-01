<template>
    <app-layout title="Dashboard">
        <div class="mx-auto max-w-7xl py-12 sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex flex-col items-center justify-center">
                    <div class="p-10 bg-white rounded-lg flex flex-col items-center justify-center">
                        <h1 class="font-poppings text-xxl font-bold text-azul">¡HOLA!</h1>
                        <h2 class="font-poppings text-lg font-bold text-amarillo ">Dinos como te gustaría que te llamemos</h2>
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
<template>
    <app-layout title="Dashboard">
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <body class="flex items-center justify-center">
                        <div class="p-10 bg-white rounded-lg ">
                            <h1 class="text-xl font-bold ">Bienvenido, te encuentras en la vista de Admin!!!</h1>
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
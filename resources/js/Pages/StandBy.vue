<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                StandBy
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <body class="flex items-center justify-center">
                        <div class="p-10 bg-white rounded-lg ">
                            <h1 class="text-xl font-bold ">Bienvenido, te encuentras en la vista de StandBy!!!</h1> <br>
                            <h2 class="">Espere a que se le asigne un rol</h2>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>

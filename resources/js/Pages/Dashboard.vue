<template>
    <app-layout title="Dashboard">
        <div>
            <h1 class="text-xl font-semibold leading-tight text-azul text-center pt-20">
                Hola Aroa
            </h1>
            <p class="text-xl font-semibold leading-tight text-gray-800 text-center pt-12">
                Selecciona que quieres hacer
            </p>
        </div>
        <div class="py-12"></div>
        <div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                
                    <body>
                        <div class="flex items-center justify-center py-12 border-4 border-amarillo rounded-lg">
                        <div class="p-10 rounded-lg">
                            <h1 class="text-xl font-bold text-center">Gestión de tareas</h1> 
                            
                        </div>
                        </div>
                    <div class="py-20">
                    <div class="flex items-center justify-center py-12 border-4 border-amarillo rounded-lg">
                        <div class="p-10 rounded-lg">
                            <h1 class="text-xl font-bold text-center">Gestión de usuarios</h1> 
                        </div>
                        </div>
                        </div>
                    </body>
                
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


<template>
    <app-layout title="Dashboard">
        <div>
            <h1 class="text-3xl font-bold leading-tight text-azul text-center pt-4">
                Hola Aroa
            </h1>
            <p class="font-semibold leading-tight text-gray-800 text-center pt-2 pb-4">
                Selecciona que quieres hacer
            </p>
        </div>
        
        <div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-60">
                
                <body>
                        <div class="flex items-center justify-center py-12 border-4 border-amarillo rounded-lg">
                        <div class="p-4 rounded-lg">
                            <Link class="font-medium" :href="route('login')">
                            <center><svg class="h-16 w-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg></center>
                            <h1 class="text-xl font-bold text-center">Gestión de tareas</h1></Link> 
                            </div>
                        </div>

                    <div class="py-4">

                        <div class="flex items-center justify-center py-12 border-4 border-amarillo rounded-lg">
                        <div class="p-4 rounded-lg">
                            <Link class="font-medium" :href="route('login')">
                             <center><svg class="h-16 w-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg></center>
                            <h1 class="text-xl font-bold text-center">Gestión de usuarios</h1></Link>
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

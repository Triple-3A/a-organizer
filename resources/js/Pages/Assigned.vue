<template>
    <app-layout>

        <div class="ml-10px mt-3" >
            <Link
                :href="route('admin')"
                class=" mr-2.5 font-bold text-amarillo rounded-lg text-sm py-2.5 text-center flex items-center">
                <svg class=" fill-amarillo mr-1 ml-2 -mr-1 w-5 h-5 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Control de Roles</Link
                        >
        </div>

        <div class="py-2">
            <div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-center my-4">
                    <p>
                        <Link
                            :href="route('assignment')"
                            class="text-lg font-bold text-azul"
                            >Asignación técnico</Link
                        >
                        / <span class="text-lg font-medium">Asignados</span>
                    </p>
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

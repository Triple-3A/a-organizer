<template>
    <app-layout title="Dashboard">
        <div>
            <div class="absolute mt-2 ms-2">
                <!--La ruta tendrá que ir a TutorDashboard-->
                <Link class="font-medium" :href="route('technician')">
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
            </div>
            <h1
                class="my-2 text-3xl font-bold leading-tight text-center text-azul"
            >
                Categoria de Tareas
            </h1>
            <p
                class="pt-2 pb-4 mb-2 font-semibold leading-tight text-center text-gray-800"
            >
                Estas son tus tareas predeterminadas
            </p>
        </div>

        <div>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-60">
                <!-- La ruta tendrá que ir a tareas básicas  -->
                <body>
                    <div
                        class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo"
                    >
                        <div class="p-6 rounded-lg">
                            <Link
                                class="font-medium"
                                :href="route('basicTasks')"
                            >
                                <center>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-16 h-16 text-azul"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </center>
                                <h1 class="text-xl font-bold text-center">
                                    Tareas Básicas
                                </h1></Link
                            >
                        </div>
                    </div>

                    <div class="py-4">
                        <!-- La ruta tendrá que ir a tareas instrumentales  -->
                        <div
                            class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo"
                        >
                            <div class="p-6 rounded-lg">
                                <Link
                                    class="font-medium"
                                    :href="route('instrumentalTasks')"
                                >
                                    <center>
                                        <svg
                                            class="w-16 h-16 text-azul"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                            />
                                        </svg>
                                    </center>
                                    <h1 class="text-xl font-bold text-center">
                                        Tareas Instrumentales
                                    </h1></Link
                                >
                            </div>
                        </div>
                    </div>

                    <!-- La ruta tendrá que ir a tareas avanzadas  -->

                    <div
                        class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo"
                    >
                        <div class="p-6 rounded-lg">
                            <Link
                                class="font-medium"
                                :href="route('advancedTasks')"
                            >
                                <center>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-16 h-16 text-azul"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        />
                                    </svg>
                                </center>
                                <h1 class="text-xl font-bold text-center">
                                    Tareas Avanzadas
                                </h1></Link
                            >
                        </div>
                    </div>
                </body>
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

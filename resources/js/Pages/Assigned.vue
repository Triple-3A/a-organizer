<template>
    <app-layout title="Dashboard">
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

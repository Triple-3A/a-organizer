<template>
    <app-layout title="Dashboard">
        <div v-for="studentsUser in studentsUsers" :key="studentsUser.id">
            <div>
                <h2> {{  studentsUser.name }} </h2>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
     props: {
        studentsUsers: Array,
    },

    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>

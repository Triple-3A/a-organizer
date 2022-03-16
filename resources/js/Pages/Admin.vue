<template>
    <app-layout title="Dashboard">
       
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
    props: {},
    data() {
        return {
            selectedTechnician: "",
            technicians: [
                {
                    name: "Omar",
                    mail: "omar@technicians.com",
                },
                {
                    name: "María",
                    mail: "María@technicians.com",
                },
                {
                    name: "Francisco",
                    mail: "francisco@technicians.com",
                },
            ],
        };
    },
    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>

<template>
    <app-layout title="Dashboard">
        <div class="py-2">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-center my-4">
                    <p>
                        <span class="text-base font-medium"
                            >Asignación técnico</span
                        >
                        /
                        <Link
                            :href="route('assigned')"
                            class="text-base font-bold text-azul"
                            >Asignados</Link
                        >
                    </p>
                </div>
            </div>
            <div className="mt-4 flex justify-center">
                <div class="mb-3 w-300">
                    <Label forInput="role" value="Role" />
                    <select
                        v-model="selectedTechnician"
                        name="role"
                        id="role"
                        class="px-3 py-1.5 bg-amarillo text-base mt-1 rounded select w-96"
                    >
                        <option
                            class="text-xs text-white bg-ambar-200"
                            value=""
                        >
                            Técnicos
                        </option>
                        <option
                            class="text-xs bg-opacity-50 font-weight-bold bg-amarillo"
                            :value="item.id"
                            v-for="item in technicians"
                            :key="item.id"
                        >
                            {{ item.name }} - {{ item.mail }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
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

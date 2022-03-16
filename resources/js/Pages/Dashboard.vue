<template>
    <app-layout title="Dashboard"> </app-layout>

    <div class="dashboard_container">
        <div class="flex self-end">
            <button
                class="bg-white hover:bg-gray-300 text-amber-300 font-bold py-2 px-3 rounded"
            >
                Asignación Técnico ->
            </button>
        </div>

        <h2
            class="font-bold font-poppings text-xl text-azul leading-tight mb-3 mx-auto"
        >
            Control de roles
        </h2>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td
                        colspan="3"
                        class="bg-amarillo text-white font-poppings font-bold pl-3"
                    >
                        Técnicos
                    </td>
                </tr>
            </thead>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell :email="person.email" :name="person.name">
                </jet-role-table-cell>
            </tr>

            <!--             <tr class="text-black font-bold basis-0 flex-col">
                <td v-for="(person, index) in fakedata" :key="index">
                    <strong> {{person.name}} </strong> {{person.email}}
                </td>
            </tr> -->
        </table>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td
                        colspan="3"
                        class="bg-amarillo text-white font-poppings font-bold pl-3"
                    >
                        Usuarios
                    </td>
                </tr>
            </thead>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell :email="person.email" :name="person.name">
                </jet-role-table-cell>
            </tr>
        </table>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td
                        colspan="3"
                        class="bg-amarillo text-white font-poppings font-bold pl-3"
                    >
                        Pendiente
                    </td>
                </tr>
            </thead>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell :email="person.email" :name="person.name">
                </jet-role-table-cell>
            </tr>
        </table>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import JetRoleTableCell from "@/Jetstream/RoleTableCell.vue";

export default defineComponent({
    el: "#dashboard_container",

    props: {
        email: String,
        name: String,
    },

    data: () => ({
        fakedata: [
            { name: "Chiquito de la Calzada", email: "chiquito99@gmail.com" },
            { name: "Don Omar", email: "donomar@gmail.com" },
            { name: "Ash Ketchup", email: "pueblo_paleta_kid@gmail.com" },
            { name: "Cuphead Red", email: "cuphead-original@gmail.com" },
            { name: "Aloy Horizon", email: "Imzerodown@gmail.com" },
        ],
    }),

    components: {
        AppLayout,
        Welcome,
        JetRoleTableCell,
    },
});
</script>

<style scoped>
.dashboard_container {
    display: flex;
    flex-direction: column;
    width: 85%;
    margin-left: auto;
    margin-right: auto;
}
</style>

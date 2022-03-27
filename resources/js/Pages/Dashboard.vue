<template>
    <app-layout title="Dashboard"> </app-layout>

    <div class="dashboard_container">
        <div class="flex self-end">
            <button
                class="px-3 py-2 font-bold bg-white rounded hover:bg-gray-300 text-amber-300"
            >
                Asignación Técnico ->
            </button>
        </div>

        <h2
            class="mx-auto mb-3 text-xl font-bold leading-tight font-poppings text-azul"
        >
            Control de roles
        </h2>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td
                        colspan="3"
                        class="pl-3 font-bold text-white bg-amarillo font-poppings"
                    >
                        Técnicos
                    </td>
                </tr>
            </thead>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell
                    :email="person.email"
                    :name="person.name"
                    :id="person.id"
                >
                </jet-role-table-cell>
            </tr>

            <!--             <tr class="flex-col font-bold text-black basis-0">
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
                        class="pl-3 font-bold text-white bg-amarillo font-poppings"
                    >
                        Usuarios
                    </td>
                </tr>
            </thead>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell
                    :email="person.email"
                    :name="person.name"
                    :id="person.id"
                >
                </jet-role-table-cell>
            </tr>
        </table>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td
                        colspan="3"
                        class="pl-3 font-bold text-white bg-amarillo font-poppings"
                    >
                        Pendiente
                    </td>
                </tr>
            </thead>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black"
            >
                <div>
                    <td>Nombre</td>
                </div>
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <jet-role-table-cell
                    :email="person.email"
                    :name="person.name"
                    :id="person.id"
                >
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
        id: Number,
    },

    data: () => ({
        fakedata: [
            { name: "Chiquito de la Calzada", email: "chiquito99@gmail.com", id: 1 },
            { name: "Don Omar", email: "donomar@gmail.com", id: 2 },
            { name: "Ash Ketchup", email: "pueblo_paleta_kid@gmail.com", id: 3 },
            { name: "Cuphead Red", email: "cuphead-original@gmail.com", id: 4 },
            { name: "Aloy Horizon", email: "Imzerodown@gmail.com", id: 5 },
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

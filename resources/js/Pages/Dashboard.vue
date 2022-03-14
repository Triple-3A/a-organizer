<template>
    <app-layout title="Dashboard">
        <!--  <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div> -->
    </app-layout>

    <div class="dashboard_container">
        <button
            class="bg-white hover:bg-gray-300 text-amber-300 font-bold py-2 px-4 rounded float-right"
        >
            Asignación Técnico ->
        </button>

        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Control de roles
        </h2>

        <table class="table-auto mb-4">
            <thead>
                <tr class="mb-4">
                    <th colspan="3" class="bg-amber-400 text-white font-bold table-auto tabla_prueba">
                        Técnicos
                    </th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td>Técnico</td>
                    <td>Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>

            <!--             <tr class="text-black font-bold basis-0 flex-col">
                <td v-for="(person, index) in fakedata" :key="index">
                    <strong> {{person.name}} </strong> {{person.email}}
                </td>
            </tr> -->
        </table>

        <table>
            <tr>
                <td colspan="3" class="bg-amber-400 text-white font-bold">
                    Usuarios
                </td>
            </tr>
            <tr class="text-black font-bold">
                <td>Nombre</td>
                <td>Técnico</td>
                <td>Usuario</td>
            </tr>
        </table>

        <table>
            <tr>
                <td colspan="3" class="bg-amber-400 text-white font-bold">
                    Pendiente
                </td>
            </tr>
            <tr class="text-black font-bold">
                <td>Nombre</td>
                <td>Técnico</td>
                <td>Usuario</td>
            </tr>
        </table>

        <button
            class="bg-blue-800 hover:bg-blue-700 text-white-300 font-bold py-2 px-4 rounded float-left"
        >
            Aceptar
        </button>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";

export default defineComponent({
    el: "#dashboard_container",

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

<template>
    <app-layout title="Dashboard">
    </app-layout>

    <div class="dashboard_container">
        <div class="flex self-end ">
            <button class="bg-white hover:bg-gray-300 text-amber-300 font-bold py-2 px-3 rounded">
                Asignación Técnico ->
            </button>
        </div>

        <h2 class="font-bold font-poppings text-xl text-azul leading-tight mb-3 mx-auto">
            Control de roles
        </h2>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Técnicos
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
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
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
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

                <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Usuarios
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
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
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>
        </table>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Pendiente
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
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
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>
        </table>






        <button
            class="bg-azul hover:bg-azul/80 text-white-300 font-bold py-2 px-4 rounded float-left w-3/5 mx-auto">
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

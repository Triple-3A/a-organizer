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
        <button class="bg-white hover:bg-gray-300 text-amber-300 font-bold py-2 px-4 rounded float-right">
        Asignación Técnico ->
        </button>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
        </h2>


        <table>
            <tr>
                <td class="bg-amber-400 text-white font-bold">Técnicos</td>
            </tr>
            <tr>
                <td>Celda 4</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="bg-amber-400 text-white font-bold">Usuarios</td>
            </tr>
            <tr>
                <td>Tablaqui</td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="bg-amber-400 text-white font-bold">Pendiente</td>
            </tr>
            <tr>
                <td>Tablaqui</td>
            </tr>
        </table>

        <button class="bg-blue-800 hover:bg-blue-700 text-white-300 font-bold py-2 px-4 rounded float-left">
        Aceptar
        </button>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
        },
    })
</script>

<style scoped>

    .dashboard_container{
        display: flex;
        flex-direction: column;
    }
</style>
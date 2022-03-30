<template>
    <app-layout title="Dashboard">
        <div class="dashboard_container flex">
            <div class="mt-3 flex justify-end">
                <Link
                    :href="route('assignment')"
                    class="font-bold text-amarillo rounded-lg text-sm py-2.5 text-center flex items-center"
                >
                    Asignación técnico
                    <svg
                        class="fill-amarillo mr-1 ml-2 w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path></svg
                ></Link>
            </div>

            <h2
                class="font-bold text-xl text-azul leading-tight mb-3 mx-auto"
            >
                Control de Roles
            </h2>

            <table class="mt-4 mb-4">
                <thead>
                    <tr class="mb-4">
                        <td
                            colspan="3"
                            class="bg-amarillo text-white font-poppings font-bold pl-5"
                        >
                            Técnicos
                        </td>
                    </tr>
                </thead>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto mt-2"
                >
                    <div>
                        <td>Nombre</td>
                    </div>
                </tr>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                    v-for="(user, index) in technicianUsers"
                    :key="index"
                >
                    <jet-role-table-cell
                        :email="user.email"
                        :name="user.name"
                        :id="user.id"
                        :currentRoleId="user.pivot.role_id"
                    >
                    </jet-role-table-cell>
                </tr>
            </table>

            <table class="mb-4">
                <thead>
                    <tr class="mb-4">
                        <td
                            colspan="3"
                            class="bg-amarillo text-white font-poppings font-bold pl-5"
                        >
                            Usuarios
                        </td>
                    </tr>
                </thead>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto mt-2"
                >
                    <div>
                        <td>Nombre</td>
                    </div>
                </tr>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                    v-for="(user, index) in studentUsers"
                    :key="index"
                >
                    <jet-role-table-cell
                        :email="user.email"
                        :name="user.name"
                        :id="user.id"
                        :currentRoleId="user.pivot.role_id"
                    >
                    </jet-role-table-cell>
                </tr>
            </table>

            <table class="mb-4">
                <thead>
                    <tr class="mb-4">
                        <td
                            colspan="3"
                            class="bg-amarillo text-white font-poppings font-bold pl-5"
                        >
                            Pendiente
                        </td>
                    </tr>
                </thead>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto mt-2"
                >
                    <div>
                        <td>Nombre</td>
                    </div>
                </tr>
                <tr
                    class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                    v-for="(user, index) in standByUsers"
                    :key="index"
                >
                    <jet-role-table-cell
                        :email="user.email"
                        :name="user.name"
                        :id="user.id"
                        :currentRoleId="user.pivot.role_id"
                    >
                    </jet-role-table-cell>
                </tr>
            </table>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/NavBar.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import JetRoleTableCell from "@/Jetstream/RoleTableCell.vue";

export default defineComponent({
    el: "#dashboard_container",

    props: {
        technicianUsers: Array,
        studentUsers: Array,
        standByUsers: Array,
    },

    data: () => ({}),

    components: {
        Link,
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

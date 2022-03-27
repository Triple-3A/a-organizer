<template>
    <app-layout>

        <div class="ml-10px mt-3" >
            <Link
                :href="route('admin')"
                class=" mr-2.5 font-bold text-amarillo rounded-lg text-sm py-2.5 text-center flex items-center">
                <svg class=" fill-amarillo mr-1 ml-2 w-5 h-5 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Control de Roles</Link
                        >
        </div>

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

        <div class="dashboard_container mt-3">
           
            <table >
                <thead class="block md:table-header-group">
                    <tr class="border md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-amarillo p-2 text-white text-base font-bold md:border md:border-white text-left block md:table-cell">Técnico</th>
                        <th class="bg-amarillo p-2 text-white text-base font-bold md:border md:border-white text-left block md:table-cell">Email</th>
                        <th class="bg-amarillo p-2 text-white text-base font-bold md:border md:border-white  block md:table-cell">Usuarios Asignados</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group"
                >
                    <tr class="border border-azul-500 md:border-none block md:table-row"
                    v-for="technician in technicianStu"
                    :key="technician.id">
                        <td class="p-2 md:border md:border-azul-500 font-bold text-left block md:table-cell">{{technician.name}}</td>
                        <td class="p-2 md:border md:border-azul-500 text-left block md:table-cell">{{technician.email}}</td>
                        <td class="p-2 md:border md:border-azul-500 block md:table-cell">
                            <p v-for="student in studentsTech"
                                :key="student.id" >{{student.name}}  ({{student.email}})
                            </p>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
     props: {
        technicianStu: Array,
        studentsTech: Array,
    },
    components: {
        AppLayout,
        Head,
        Link,
    },
};
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



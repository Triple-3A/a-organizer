<template>
    <app-layout>
        <div class="ml-10px mt-3">
            <Link
                :href="route('admin')"
                class="mr-2.5 font-bold text-amarillo rounded-lg text-sm py-2.5 text-center flex items-center"
            >
                <svg
                    class="fill-amarillo mr-1 ml-2 w-5 h-5 rotate-180"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                Control de Roles</Link
            >
        </div>

        <div class="flex justify-center my-4 mt-10 text-lg">
            <div class="flex justify-center my-4">
                <p>
                    <span class="text-lg font-medium">Asignación técnico</span>
                    /
                    <Link
                        :href="route('assigned')"
                        class="text-lg font-bold text-azul"
                        >Asignados</Link
                    >
                </p>
            </div>
        </div>

        <div className="mt-10 flex justify-center">
            <div class="mb-3 w-250">
                <label forInput="role" value="Role" />
                <select
                    :v-model="technician"
                    name="technician"
                    :value="technician"
                    id="technician"
                    class="px-3 py-1.5 bg-amarillo text-base font-bold mt-1 rounded select w-96"
                >
                    <option
                        class="bg-orange-100 font-bold text-xs" value="">
                        Técnicos
                    </option>
                    <option
                        class="text-xs text-bold bg-orange-100"
                        v-for="technician in technicians"
                        :value="technician.id"
                        :selected="technician.id"
                        :key="technician.id"
                    >
                        {{ technician.name }} - {{ technician.email }}
                    </option>
                </select>
            </div>
        </div>

        <div className="mt-3 flex justify-center">
            <div class="mb-3 w-250">
                <label forInput="role" value="Role" />
                <select
                    :v-model="student"
                    name="student"
                    id="student"
                    :value="student"
                    class="px-3 py-1.5 bg-amarillo text-base font-bold mt-1 rounded select w-96"
                >
                    <option class="bg-orange-100 font-bold text-xs" value="">
                        Usuarios
                    </option>
                    <option
                        class="text-xs bg-orange-100"
                        v-for="student in students"
                        :key="student.id"
                        :selected="student.id"
                        :value="student.id"
                    >
                        {{ student.name }} - {{ student.email }}
                    </option>
                </select>
            </div>
        </div>
        <div className="mt-4 flex flex-col justify-center items-center">
            <!-- <Link
                class="ml-4 mt-3 bg-azul px-5"
                :href="route('assignTechToStudent', technician)"
            >
                Asignar
            </Link> -->
            <jet-button class="ml-4 mt-4 px-7 bg-azul"> Aceptar </jet-button>
            <jet-button class="ml-4 mt-4 bg-rojo"> Cancelar </jet-button>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetButton from "@/Jetstream/Button.vue";
export default {
    props: {
        technicians: Array,
        students: Array,
    },
    components: {
        AppLayout,
        JetButton,
        Head,
        Link,
    },
    data() {
        // retornar data del form
    },
    method: {
        // mandar la data con un submit
 
    },
}
</script>
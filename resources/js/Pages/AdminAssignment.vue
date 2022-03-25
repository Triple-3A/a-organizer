<template>
    <app-layout>
        <div class="ml-10px mt-4">
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
                        type="submit"
                        :href="route('assigned')"
                        class="text-lg font-bold text-azul"
                        >Asignados</Link
                    >
                </p>
            </div>
        </div>
        <form @submit.prevent="submit" class="mb-6">
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
                            class="bg-orange-100 font-bold text-xs"
                            value=""
                        >
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
                        <option
                            class="bg-orange-100 font-bold text-xs"
                            value=""
                        >
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
                <!--                 <Link
                    :href="route('assignTechToStudent', 'holi')"
                    class="ml-4 mt-4 px-7 bg-azul" 
                >
                    Asignar
                </Link> -->
                <button
                    type="submit"
                    class="px-4 py-2 w-1/6 text-center bg-azul rounded-md font-semibold text-sm text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition"
                >
                    Aceptar
                </button>
                <button @click="test()"
                    class="px-4 py-2 w-1/6 text-center bg-azul rounded-md font-semibold text-sm text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition"
                >
                    Aceptar
                </button>
            </div>
        </form>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetButton from "@/Jetstream/Button.vue";
export default {
    data() {
        return {
            student:null,
            technician:null,
            form: this.$inertia.form({
                student: null,
                technician: null,
            }),
        };
    },
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
    methods: {
        submit() {
            this.$inertia.post("/assignTechToStudent", this.form);
        },
        test(){
            console.log(this.technician, this.student)
        }
    },
};
</script>

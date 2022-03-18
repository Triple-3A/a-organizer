<template>
    <app-layout>
      
        <div class="flex justify-center my-4 mt-20 text-lg">
              <div class="flex justify-center my-4">
                    <p>
                        <span class="text-lg  font-medium"
                            >Asignación técnico</span
                        >
                        /
                        <Link
                            :href="route('assigned')"
                            class="text-lg font-bold text-azul"
                            >Asignados</Link
                        >
                    </p>
                </div>
        </div>

        <div className="mt-20 flex justify-center">
           <div class="mb-3 w-250">
                <label forInput="role" value="Role" />
                    <select
                    name="role"
                    id="role"
                    class="px-3
                    py-1.5 bg-amarillo text-base font-bold  mt-1 
                    rounded select w-96"
                    >
                        <option class ="bg-orange-100 font-bold text-xs" value="Técnicos">Técnicos</option>
                        <option 
                        class ="text-xs text-bold  bg-orange-100" 
                        v-for="technician in technicians" :key="technician.id" :value="technician.id">{{ technician.name }} - {{technician.email}}
                        </option> 
                    </select>
           </div>
       </div>  

        <div className="mt-3 flex justify-center">
           <div class="mb-3 w-250">
                <label forInput="role" value="Role" />
                    <select
                    name="role"
                    id="role"
                    class="px-3
                    py-1.5 bg-amarillo text-base font-bold  mt-1 
                    rounded select w-96"
                    >
                        <option class ="bg-orange-100 font-bold text-xs" value="">Usuarios</option>
                        <option 
                        class ="text-xs bg-orange-100"
                         v-for="student in students" :key="student.id" :value="student.id">{{ student.name }} - {{student.email}}
                        </option> 
                    </select>
           </div>
       </div>  
        <div className="mt-4 flex flex-col justify-center items-center">
            <jet-button class=" ml-4 mt-3 bg-azul px-5"  >
                                    Asignar
                </jet-button>
            <jet-button class="ml-4 mt-4 bg-rojo">
                                    Cancelar
                </jet-button>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetButton from "@/Jetstream/Button.vue";
export default {
    props:{
        technicians: Array,
        students: Array,
    },
    components:{
        AppLayout,
        JetButton,
        Head,
        Link,
    }
};
</script>

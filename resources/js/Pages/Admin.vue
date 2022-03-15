<template>
    <app-layout title="Dashboard">
        <!-- <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <body class="flex items-center justify-center">
                        <div class="p-10 bg-white rounded-lg ">
                            <h1 class="text-xl font-bold ">Bienvenido, te encuentras en la vista de Admin!!!</h1>
                        </div>
                    </body>
                </div>
            </div>
        </div> -->

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                
                    <div class="mt-12 flex items-center justify-center">
                        
                            <h1 class="text-color-azul text-base font-bold ">Asignación técnico</h1>
                        
                    </div>
                
            </div>
        

        <div className="mt-4 flex justify-center">
           <div class="mb-3 w-300">
                <Label forInput="role" value="Role" />
                 <select
                    v-model="selectedTechnician"
                    name="role"
                    id="role"
                    class="px-3
                    py-1.5 bg-amarillo text-base mt-1 
                    rounded select w-96"
                    >
                        <option class ="bg-ambar-200 text-white text-xs" value="">Técnicos</option>
                        <option 
                        class ="font-weight-bold text-xs bg-amarillo bg-opacity-50" 
                        :value="item.id" 
                        v-for="item in technicians" :key="item.id" >{{ item.name }} - {{item.mail}}
                        </option> 
                    </select>
           </div>
       </div>  
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
     data(){
        return {
            selectedTechnician : '',
            technicians :[ 
                {
                name: "Omar",
                mail: "omar@technicians.com",
                },
                {
                name: "María",
                mail: "María@technicians.com",
                },
                {
                name: "Francisco",
                mail: "francisco@technicians.com",
                },
            ],
        }
    },
    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>
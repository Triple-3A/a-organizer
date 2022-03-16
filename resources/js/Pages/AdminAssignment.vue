<template>
    <app-layout>
      
        <div class="flex justify-center my-4 mt-20 text-lg">
            <p>
                <span class="font-black text-azul">Asignación Técnicos</span> / <Link
                    pref="route('register')" 
                    :href="route('register')"
                    class="font-thin"
                    >Asignados</Link
                >
            </p>
        </div>
        
        <div className="mt-20 flex justify-center">
           <div class="mb-3 w-250">
                <Label forInput="role" value="Role" />
                    <select
                    v-model="selectedTechnician"
                    name="role"
                    id="role"
                    class="px-3
                    py-1.5 bg-amarillo text-base font-bold  mt-1 
                    rounded select w-96"
                    >
                        <option class ="bg-orange-100 font-bold text-xs" value="">Técnicos</option>
                        <option 
                        class ="text-xs text-bold  bg-orange-100" 
                        :value="item.id" 
                        v-for="item in technicians" :key="item.id" >{{ item.name }} - {{item.mail}}
                        </option> 
                    </select>
           </div>
       </div>  

        <div className="mt-3 flex justify-center">
           <div class="mb-3 w-250">
                <Label forInput="role" value="Role" />
                    <select
                    v-model="selectedTechnician"
                    name="role"
                    id="role"
                    class="px-3
                    py-1.5 bg-amarillo text-base font-bold  mt-1 
                    rounded select w-96"
                    >
                        <option class ="bg-orange-100 font-bold text-xs" value="">Usuarios</option>
                        <option 
                        class ="text-xs bg-orange-100" 
                        :value="item.id" 
                        v-for="item in users" :key="item.id" >{{ item.name }} - {{item.mail}}
                        </option> 
                    </select>
           </div>
       </div>  
        <div className="mt-4 flex flex-col justify-center items-center">
            <jet-button class=" ml-4 mt-3 bg-azul px-5" :class= "opacity-25" >
                                    Asignar
                </jet-button>
            <jet-button class="ml-4 mt-4 bg-rojo"  :class= "opacity-25" >
                                    Cancelar
                </jet-button>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetButton from "@/Jetstream/Button.vue";
import { defineComponent } from "@vue/runtime-core";
export default defineComponent( {
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
            users :[ 
                {
                name: "Ruben",
                mail: "omar@users.com",
                },
                {
                name: "Elena",
                mail: "María@users.com",
                },
                {
                name: "Carla",
                mail: "francisco@users.com",
                },
            ],
        }
    },
    components: {
        AppLayout,
        JetButton,
        Head,
        Link,
    },
});
</script>

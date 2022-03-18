<template>
    <div>
        <td class="flex flex-col">
            <div>
                <strong> {{ name }} </strong>
            </div>
            <div>{{ email }} {{ id }}</div>
        </td>
    </div>
    <div class="flex flex-row justify-between">
        <td>
            <form @submit.prevent="submit">
                <div class="inline-flex">
                    <button
                        :class="technicianButtonClass"
                        :type="technicianButtonType"
                  
                    >
                        Tecn.
                    </button>
                    <button
                        :class="studentButtonClass"
                        :type="studentButtonType"
                        
                    >
                        Estu.
                    </button>
                </div>
            </form>
        </td>
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ["email", "name", "id", "role"],

    data() {
        return {
            technicianButtonClass: "",
            studentButtonClass: "",
            technicianButtonType: "",
            studentButtonType: "",
        }; 
    },

    mounted() {
        if (this.role == 3) {
            this.technicianButtonClass =
                "bg-azul600 text-white font-bold py-2 px-4 rounded-l cursor-default";
            this.technicianButtonType = "";
            this.studentButtonClass =
                "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-r";
            this.studentButtonType = "submit";
        }
        if (this.role == 4) {
            this.technicianButtonClass =
                "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
            this.technicianButtonType = "submit";
            this.studentButtonClass =
                "bg-azul600 text-white font-bold py-2 px-4 rounded-r cursor-default";
            this.studentButtonType = "";
        }
        if (this.role == 1) {
            this.technicianButtonClass =
                "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
            this.technicianButtonType = "submit";
            this.studentButtonClass =
                "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-r";
            this.studentButtonType = "submit";
        }
    },

    // methods: {
    //     submit() {
    //         this.form.post(this.route("reassignRole"));
    //     },
    // },
});
</script>

<template>
    <div>
        <td class="flex flex-col">
            <div>
                <strong> {{ name }} </strong>
            </div>
            <div>
                <p class="text-noNegro font-bold flex flex-row justify-between mb-2 w-11/12">
                    {{ email }}
                </p>
            </div>
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
             <!--    <Link
                    :href="route('reassignRole', id, name)"
                    class="text-lg font-bold text-azul"
                >
                    Asignados
                </Link> -->
            </form>
        </td>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";

export default defineComponent({
    props: ["email", "name", "id", "role"],

    data() {
        return {
            technicianButtonClass: "",
            studentButtonClass: "",
            technicianButtonType: "",
            studentButtonType: "",

           /*  form: {
                userId: this.id,
                roleId: "",
            }, */

            form: this.$inertia.form({
                userId: this.id,
                roleId: "",
            }),
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
            this.form.roleId = 3;
        }
        if (this.role == 4) {
            this.technicianButtonClass =
                "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
            this.technicianButtonType = "submit";
            this.studentButtonClass =
                "bg-azul600 text-white font-bold py-2 px-4 rounded-r cursor-default";
            this.studentButtonType = "";
            this.form.roleId = 4;
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

    components: {
        Link,
    },

      methods: {
    submit() {
      this.form.post(this.route("reassignRole"));
    },
  },
});
</script>

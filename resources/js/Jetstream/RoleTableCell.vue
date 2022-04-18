<template>
  <div>
    <td class="flex flex-col">
      <div class="text-sm text-noNegro font-bold">
        {{ name }}
      </div>
      <div>
        <p
          class="
            text-noNegro text-sm
            font-medium
            flex flex-row
            justify-between
            mb-2
            w-11/12
          "
        >
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
            @click="reassignUserToTechnician()"
            :class="technicianButtonClass"
            :type="technicianButtonType"
          >
            Tecn.
          </button>
          <button
            @click="reassignUserToStudent()"
            :class="studentButtonClass"
            :type="studentButtonType"
          >
            User
          </button>
        </div>
      </form>
    </td>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import { defineComponent } from "vue";

export default defineComponent({
  props: ["email", "name", "id", "currentRoleId"],

  data() {
    return {
      technicianButtonClass: "",
      studentButtonClass: "",
      technicianButtonType: "",
      studentButtonType: "",

      form: this.$inertia.form({
        userId: this.id,
        roleId: "",
        currentRoleId: this.currentRoleId,
      }),
    };
  },

  mounted() {
    if (this.currentRoleId == 3) {
      this.technicianButtonClass =
        "bg-azul600 text-white font-bold py-2 px-4 rounded-l cursor-default";
      this.technicianButtonType = "";
      this.studentButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-r";
      this.studentButtonType = "submit";
    }

    if (this.currentRoleId == 4) {
      this.technicianButtonClass =
        "bg-azul hover:bg-azul/80 text-white font-bold py-2 px-4 rounded-l";
      this.technicianButtonType = "submit";
      this.studentButtonClass =
        "bg-azul600 text-white font-bold py-2 px-4 rounded-r cursor-default";
      this.studentButtonType = "";
    }

    if (this.currentRoleId == 1) {
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
    reassignUserToTechnician() {
      this.form.roleId = 3;
    },
    reassignUserToStudent() {
      this.form.roleId = 4;
    },
    submit() {
      this.form.post(this.route("reassignRole"));
      window.location.reload();
    },
  },
});
</script>

<template>
  <app-layout>
    <div class="mt-4 ml-10px">
      <Link
        :href="route('admin')"
        class="
          mr-2.5
          font-bold
          text-amarillo
          rounded-lg
          text-sm
          py-2.5
          text-center
          flex
          items-center
        "
      >
        <jet-arrow-back-svg> Control de Roles</jet-arrow-back-svg></Link
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
            v-model="form.technician"
            name="technician"
            :value="technician"
            id="technician"
            class="
              px-3
              py-1.5
              bg-amarillo
              text-base
              font-bold
              mt-1
              rounded
              select
              w-96
            " 
          >
            <option class="text-xs font-bold bg-orange-100" value="">
              Técnicos
            </option>
            <option
              class="text-xs bg-orange-100 text-bold"
              v-for="technician in technicians"
              :value="technician"
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
            v-model="form.student"
            name="student"
            id="student"
            :value="student"
            class="
              px-3
              py-1.5
              bg-amarillo
              text-base
              font-bold
              mt-1
              rounded
              select
              w-96
            "
          >
            <option class="text-xs font-bold bg-orange-100" value="">
              Usuarios
            </option>
            <option
              class="text-xs bg-orange-100"
              v-for="student in students"
              :key="student.id"
              :selected="student"
              :value="student"
            >
              {{ student.name }} - {{ student.email }}
            </option>
          </select>
        </div>
      </div>
      <div className="mt-4 flex flex-col justify-center items-center">
        <jet-btn>Asignar</jet-btn >
        </div>
    </form>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetBtn from "@/Jetstream/Btn.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    technicians: Array,
    students: Array,
  },
  components: {
    Head,
    Link,
    AppLayout,
    JetBtn,
    JetArrowBackSvg,
  },
  data() {
    return {
      form: {
        technician: null,
        student: null,
      },
    };
  },

  methods: {
    submit() {
      this.$inertia.post(route("assignTechToStudent"), this.form);
    },
  },
};
</script>

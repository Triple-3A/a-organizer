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
        <svg
          class="w-5 h-5 ml-2 mr-1 rotate-180 fill-amarillo"
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
        <button 
        type="submit"
          class="inline-flex items-center px-6 py-2 bg-azul rounded-md font-bold text-sm text-white tracking-widest hover:bg-azul active:bg-gray-900  disabled:opacity-25 transition"
        >
          Asignar
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
  props: {
    technicians: Array,
    students: Array,
  },
  components: {
    AppLayout,
    JetButton,
    Head,
    Link
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

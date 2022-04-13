<template>
  <app-layout title="Asignación estudiantes">
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

    <div
      v-if="showAlert"
      v-show="isShow"
      class="
        bg-white
        border border-azul
        drop-shadow-md
        radius
        mx-auto
        text-azul
        mt-3
        px-4
        py-3
        w-1/2
      "
      role="alert"
    >
      <p class="font-bold">Asignación realizada con éxito</p>
      <p class="text-xs">
        Puedes continuar o acceder a todas las asignaciones pulsando en
        "Asignados-as"
      </p>
      <button
        @click="isShow = !isShow"
        class="absolute top-0 bottom-0 right-0 px-4 py-3"
      >
        <svg
          class="fill-current h-4 w-4 mt-0.5 text-azul"
          role="button"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
        >
          <title>Close</title>
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"
          />
        </svg>
      </button>
    </div>

    <div class="flex justify-center my-2  text-lg">
      <div class="flex justify-center my-4">
        <p>
          <span class="text-lg text-noNegro font-medium"
            >Asignación técnico-a</span
          >
          /
          <Link
            type="submit"
            :href="route('assigned')"
            class="text-lg font-bold text-azul"
            >Asignados-as</Link
          >
        </p>
      </div>
    </div>
    <form @submit.prevent="submit" class="mb-6">
      <div className="mt-4 flex justify-center">
        <div class="mb-3 w-250">
          <label
            class="display: block text-noNegro font-bold"
            forInput="role"
            value="Role"
            >Selección de Técnico-a</label
          >
          <select
            v-model="form.technician"
            name="technician"
            :value="technician"
            id="technician"
            class="
              pl-2
              pr-9
              py-1.5
              bg-amarillo
              text-base text-noNegro
              font-bold
              mt-1
              rounded
              select
              w-96
              truncate
            "
          >
            <option
              class="text-xs bg-white text-bold"
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
          <label
            class="display: block text-noNegro font-bold"
            forInput="role"
            value="Role"
            >Selección de Usuarios-as</label
          >
          <select
            v-model="form.student"
            name="student"
            id="student"
            :value="student"
            class="
              pl-2
              pr-9
              py-1.5
              bg-amarillo
              text-noNegro text-base
              font-bold
              mt-1
              rounded
              select
              w-96
              truncate
            "
          >
            <option
              class="text-xs bg-white"
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
        <jet-btn>Asignar</jet-btn>
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
      isShow: false,
    };
  },

  methods: {
    submit() {
      this.$inertia.post(route("assignTechToStudent"), this.form);
      this.showAlert = true;
      this.isShow = true;
    },
  },
};
</script>

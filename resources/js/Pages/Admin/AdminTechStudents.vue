<template>
  <app-layout>
    <div class="mt-3 ml-10px">
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

    <div class="py-2">
      <div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-center my-4">
          <p>
            <Link
              :href="route('assignment')"
              class="text-lg font-bold text-azul"
              >Asignación técnico</Link
            >
            / <span class="text-lg font-medium">Asignados</span>
          </p>
        </div>
      </div>
    </div>

    <div class="mt-3 dashboard_container">
      <table>
        <thead class="block md:table-header-group">
          <tr
            class="absolute block border md:border-none md:table-row -top-full md:top-auto -left-full md:left-auto md:relative"
          >
            <th
              class="block p-2 text-base font-bold text-left text-white bg-amarillo md:border md:border-white md:table-cell"
            >
              Técnico
            </th>
            <th
              class="block p-2 text-base font-bold text-left text-white bg-amarillo md:border md:border-white md:table-cell"
            >
              Email
            </th>
            <th
              class="block p-2 text-base font-bold text-white bg-amarillo md:border md:border-white md:table-cell"
            >
              Usuarios Asignados
            </th>
          </tr>
        </thead>
        <tbody class="block md:table-row-group">
          <tr
            class="block border border-azul-500 md:border-none md:table-row"
            v-for="tech in techs"
            :key="tech.id"
          >
            <td
              class="block p-2 font-bold text-left md:border md:border-azul-500 md:table-cell"
            >{{tech.name}}
            </td>
            <td class="block p-2 text-left md:border md:border-azul-500 md:table-cell"></td>
            <td class="block p-2 md:border md:border-azul-500 md:table-cell">
                            <div v-for="studentTech in studentTechs"
                                :key="studentTech.id" >
                                <!-- {{studentTech}} -->
                                <p v-for="student in studentTech"
                                :key="student.id">{{student.name}}</p>
                            </div>
                        </td>
          </tr>
        </tbody>
      </table>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    techs: Array,
    studentTechs:Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>

<style scoped>
.dashboard_container {
  display: flex;
  flex-direction: column;
  width: 85%;
  margin-left: auto;
  margin-right: auto;
}
</style>

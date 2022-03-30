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
        <jet-arrow-back-svg> Control de Roles</jet-arrow-back-svg></Link
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
    <div>
      <div
        class="block border border-azul-500 md:border-none md:table-row"
        v-for="tech in techs"
        :key="tech.id"
      >
        <div
          class="
            block
            p-2
            font-bold
            text-left
            md:border md:border-azul-500 md:table-cell
          "
        >
          {{ tech.name }}
        </div>
        <div
          class="
            block
            p-2
            font-bold
            text-left
            md:border md:border-azul-500 md:table-cell
          "
        >
          {{ tech.email }}
        </div>
      </div>
      <div class="block border border-azul-500 md:border-none md:table-row">
        <div
          class="
            block
            p-2
            font-bold
            text-left
            md:border md:border-azul-500 md:table-cell
          "
          v-for="studentTech in studentTechs"
          :key="studentTech.id"
        >
          <!-- {{studentTech}} -->
          <div v-for="student in studentTech" :key="student.id">
            {{ student.name }}
          </div>
        </div>
      </div>
    </div>

    <div class="mt-3 dashboard_container">
      <table>
        <thead class="block md:table-header-group">
          <tr
            class="
              absolute
              block
              border
              md:border-none md:table-row
              -top-full
              md:top-auto
              -left-full
              md:left-auto md:relative
            "
          >
            <th
              class="
                block
                p-2
                text-base
                font-bold
                text-left text-white
                bg-amarillo
                md:border md:border-white md:table-cell
              "
            >
              Técnico
            </th>
            <th
              class="
                block
                p-2
                text-base
                font-bold
                text-left text-white
                bg-amarillo
                md:border md:border-white md:table-cell
              "
            >
              Email
            </th>
            <th
              class="
                block
                p-2
                text-base
                font-bold
                text-white
                bg-amarillo
                md:border md:border-white md:table-cell
              "
            >
              Usuarios Asignados
            </th>
          </tr>
        </thead>
        <tbody
          v-for="array in arrayAll"
          :key="array.id"
          class="block md:table-row-group"
        >
          <tr
            class="block border border-azul-500 md:border-none md:table-row"
            v-for="tech in array[0]"
            :key="tech.id"
          >
            <td
              class="
                block
                p-2
                font-bold
                text-left
                md:border md:border-azul-500 md:table-cell
              "
            >
              {{ tech.name }}
            </td>
            <td
              class="
                block
                p-2
                font-bold
                text-left
                md:border md:border-azul-500 md:table-cell
              "
            >
              {{ tech.email }}
            </td>

            <td
              class="
                block
                p-2
                font-bold
                text-left
                md:border md:border-azul-500 md:table-cell
              "
            >
              <p v-for="std in array[1]" :key="std.id">
                {{ std.name }}
              </p>
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
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";

export default {
  props: {
    arrayAll: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetArrowBackSvg,
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

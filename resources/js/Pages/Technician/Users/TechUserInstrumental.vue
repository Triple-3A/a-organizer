<template>
  <app-layout title="Tareas instrumentales">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('technicianUsersProfile', student.id)"
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
        <jet-arrow-back-svg>Tareas Usuario</jet-arrow-back-svg></Link
      >

      <div class="flex justify-around">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="flex items-center justify-end">
            <Link
              :href="route('techUserInstrumental/create', student.id)"
              type="button"
            >
              <jet-create-btn />
            </Link>
          </div>

          <jet-title
            >Tareas Instrumentales
            <h1 class="mt-2 text-lg text-amarillo w-160">{{ student.name }}</h1>
          </jet-title>

          <div class="mb-10" v-for="array in all" :key="array.id">
            <div v-for="task in array[0]" :key="task.id">
              <div
                v-for="title in array[1]"
                :key="title.id"
                class="
                  flex
                  border-4
                  bg-white
                  rounded-lg
                  row
                  border-amarillo
                  drop-shadow-md
                  hover:drop-shadow-2xl
                "
              >
                <div class="flex items-center justify-start p-4">
                  <div
                    v-for="icon in title.icons"
                    :key="icon.id"
                    class="items-center"
                  >
                    <img
                      class="w-28 h-28"
                      :src="icon.icon"
                      alt="Icono de tarea"
                    />
                  </div>

                  <div class="pl-9 w-80">
                    <h1 class="text-lg text-noNegro font-bold">
                      {{ title.title }}
                    </h1>
                  </div>
                  <div class="ml-10 flex flex-col items-center">
                    <Link
                      class="mr-1 mb-1"
                      :href="
                        route('techUserInstrumentalDescription/create', task.id)
                      "
                      type="button"
                    >
                      <jet-add-btn />
                    </Link>
                    <Link
                      type="button"
                      method="delete"
                      :href="route('techUserInstrumental/delete', task.id)"
                    >
                      <jet-delete-btn />
                    </Link>
                  </div>
                </div>
              </div>
            </div>

            <div
              v-for="description in array[2]"
              :key="description.id"
              class="
                flex
                items-center
                border-2
                rounded-lg
                bg-white
                p-4
                mt-2
                mb-2
                border-azul
                drop-shadow-md
                hover:drop-shadow-2xl
              "
            >
              <div class="flex justify-start items-center w-82">
                <h1 class="text-base text-noNegro">
                  {{ description.description }}
                </h1>
              </div>

              <div class="ml-8 flex justify-end">
                <Link
                  :href="
                    route(
                      'techUserInstrumentalDescription/edit',
                      description.id
                    )
                  "
                  type="button"
                >
                  <jet-edit-btn />
                </Link>
                <Link
                  class="ml-2"
                  type="button"
                  method="delete"
                  :href="
                    route(
                      'techUserInstrumentalDescription/delete',
                      description.id
                    )
                  "
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/NavBar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetCreateBtn from "@/Jetstream/CreateBtn.vue";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetEditBtn from "@/Jetstream/EditBtn.vue";
import JetAddBtn from "@/Jetstream/AddBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
import JetInstrumentalTitleSvg from "@/Jetstream/InstrumentalTitleSvg.vue";
export default {
  props: {
    student: Array,
    all: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
    JetCreateBtn,
    JetEditBtn,
    JetDeleteBtn,
    JetTitle,
    JetArrowBackSvg,
    JetInstrumentalTitleSvg,
    JetAddBtn,
  },
};
</script>
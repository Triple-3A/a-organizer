<template>
  <app-layout title="Tareas avanzadas">
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
              :href="route('techUserAdvanced/pick', student.id)"
              type="button"
            >
              <jet-create-btn />
            </Link>
          </div>
          <jet-title>
            Tareas Avanzadas
            <h1 class="mt-2 text-lg text-amarillo w-160">
              {{ student.name }}
            </h1>
          </jet-title>

          <div v-if="allEducation[0]">
            <h2 class="mb-2 text-noNegro font-bold">Educación</h2>
          </div>
          <div class="mb-10" v-for="array in allEducation" :key="array.id">
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
                        route('techUserAdvancedDescription/create', task.id)
                      "
                      type="button"
                    >
                      <jet-add-btn />
                    </Link>
                    <Link
                      type="button"
                      method="delete"
                      :href="route('techUserAdvanced/delete', task.id)"
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
                    route('techUserAdvancedDescription/edit', description.id)
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
                    route('techUserAdvancedDescription/delete', description.id)
                  "
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>

          <div v-if="allJob[0]">
            <h2 class="mb-2 text-noNegro font-bold">Trabajo</h2>
          </div>
          <div class="mb-10" v-for="array in allJob" :key="array.id">
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
                        route('techUserAdvancedDescription/create', task.id)
                      "
                      type="button"
                    >
                      <jet-add-btn />
                    </Link>
                    <Link
                      type="button"
                      method="delete"
                      :href="route('techUserAdvanced/delete', task.id)"
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
                    route('techUserAdvancedDescription/edit', description.id)
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
                    route('techUserAdvancedDescription/delete', description.id)
                  "
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>

          <div v-if="allGame[0]">
            <h2 v-if="allGame" class="mb-2 text-noNegro font-bold">Juego</h2>
          </div>
          <div class="mb-10" v-for="array in allGame" :key="array.id">
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
                        route('techUserAdvancedDescription/create', task.id)
                      "
                      type="button"
                    >
                      <jet-add-btn />
                    </Link>
                    <Link
                      type="button"
                      method="delete"
                      :href="route('techUserAdvanced/delete', task.id)"
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
                    route('techUserAdvancedDescription/edit', description.id)
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
                    route('techUserAdvancedDescription/delete', description.id)
                  "
                >
                  <jet-delete-btn />
                </Link>
              </div>
            </div>
          </div>

          <div v-if="allFreeTime[0]">
            <h2 class="mb-2 text-noNegro font-bold">Tiempo libre</h2>
          </div>

          <div class="mb-10" v-for="array in allFreeTime" :key="array.id">
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
                        route('techUserAdvancedDescription/create', task.id)
                      "
                      type="button"
                    >
                      <jet-add-btn />
                    </Link>
                    <Link
                      type="button"
                      method="delete"
                      :href="route('techUserAdvanced/delete', task.id)"
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
                    route('techUserAdvancedDescription/edit', description.id)
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
                    route('techUserAdvancedDescription/delete', description.id)
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
import JetEditBtn from "@/Jetstream/EditBtn.vue";
import JetAddBtn from "@/Jetstream/AddBtn.vue";
import JetDeleteBtn from "@/Jetstream/DeleteBtn.vue";
import JetTitle from "@/Jetstream/Title.vue";
import JetAdvancedTitleSvg from "@/Jetstream/AdvancedTitleSvg.vue";
import JetArrowBackSvg from "@/Jetstream/ArrowBackSvg.vue";
export default {
  props: {
    student: Array,
    allEducation: Array,
    allJob: Array,
    allGame: Array,
    allFreeTime: Array,
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
    JetAdvancedTitleSvg,
    JetAddBtn,
  },
  data() {
    return {
      question: null,
      answer: null,
      img: null,
      isValidQuestion: false,
    };
  },
};
</script>

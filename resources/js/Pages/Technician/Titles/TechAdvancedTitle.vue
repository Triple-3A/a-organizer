<template>
  <app-layout title="Dashboard">
    <div class="mt-4 ml-10px">
      <Link
        :href="route('categories')"
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
        Categorias de tareas</Link
      >
    </div>

    <div class="py-6 flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <Link :href="route('advancedTitle/create')">
            <svg
              class="float-right h-14 w-14 text-white bg-rojo"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" />
              <circle cx="12" cy="12" r="9" />
              <line x1="9" y1="12" x2="15" y2="12" />
              <line x1="12" y1="9" x2="12" y2="15" />
            </svg>
          </Link>
          <div class="flex items-center justify-center">
            <div class="p-10 bg-white rounded-lg">
              <h1 class="text-xl text-azul font-bold">Tareas Avanzadas</h1>
            </div>
          </div>

          <h2 class="mb-2">Educación</h2>
          <div v-for="education in educations" :key="education.id">
            <div class="flex row border-4 rounded-lg mb-10 border-amarillo">
              <div class="p-4 rounded-lg flex justify-start items-center">
                <div>
                  <Link :href="route('advancedTitle/create')">
                    <svg
                      class="h-16 w-16 text-azul"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <circle cx="12" cy="9" r="6" />
                      <polyline
                        points="9 14.2 9 21 12 19 15 21 15 14.2"
                        transform="rotate(-30 12 9)"
                      />
                      <polyline
                        points="9 14.2 9 21 12 19 15 21 15 14.2"
                        transform="rotate(30 12 9)"
                      />
                    </svg>
                  </Link>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="text-xl font-bold ml-12">{{ education.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', education.id)"
                >
                  <svg
                    class="h-8 w-8 text-rojo"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                  </svg>
                </Link>
              </div>
            </div>
          </div>
          <h2 class="mb-2">Trabajo</h2>
          <div v-for="job in jobs" :key="job.id">
            <div class="flex row border-4 rounded-lg mb-10 border-amarillo">
              <div class="p-4 rounded-lg flex justify-start items-center">
                <div>
                  <svg
                    class="h-16 w-16 text-azul"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="9" r="6" />
                    <polyline
                      points="9 14.2 9 21 12 19 15 21 15 14.2"
                      transform="rotate(-30 12 9)"
                    />
                    <polyline
                      points="9 14.2 9 21 12 19 15 21 15 14.2"
                      transform="rotate(30 12 9)"
                    />
                  </svg>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="text-xl font-bold ml-12">{{ job.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', job.id)"
                >
                  <svg
                    class="h-8 w-8 text-rojo"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                  </svg>
                </Link>
              </div>
            </div>
          </div>
          <h2 class="mb-2">Juego</h2>
          <div v-for="game in games" :key="game.id">
            <div class="flex row border-4 rounded-lg mb-10 border-amarillo">
              <div class="p-4 rounded-lg flex justify-start items-center">
                <div>
                  <svg
                    class="h-16 w-16 text-azul"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="9" r="6" />
                    <polyline
                      points="9 14.2 9 21 12 19 15 21 15 14.2"
                      transform="rotate(-30 12 9)"
                    />
                    <polyline
                      points="9 14.2 9 21 12 19 15 21 15 14.2"
                      transform="rotate(30 12 9)"
                    />
                  </svg>
                </div>

                <div class="px-8"></div>

                <div class="flex flex-row">
                  <h1 class="text-xl font-bold ml-12">{{ game.title }}</h1>
                </div>

                <div class="px-16"></div>

                <Link
                  as="button"
                  type="button"
                  method="delete"
                  :href="route('advancedTitle/delete', game.id)"
                >
                  <svg
                    class="h-8 w-8 text-rojo"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                  </svg>
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
export default {
  props: {
    educations: Array,
    jobs: Array,
    games: Array,
  },
  components: {
    AppLayout,
    Head,
    Link,
  },
};
</script>
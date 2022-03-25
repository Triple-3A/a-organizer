<template>
  <app-layout title="Dashboard">
    <Link class="font-medium" :href="route('categories')">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="float-left w-12 h-12 text-amarillo"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
        stroke-width="2"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M10 19l-7-7m0 0l7-7m-7 7h18"
        />
      </svg>
    </Link>

    <div class="py-6 flex justify-around">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden">
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
                  <h1 class="text-xl font-bold ml-12">{{ education.title }}</h1>
                </div>

                <div class="px-16"></div>

                <div>
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
                </div>
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

                <div>
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
                </div>
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

                <div>
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
                </div>
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
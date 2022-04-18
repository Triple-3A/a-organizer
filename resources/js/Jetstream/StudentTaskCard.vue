<template>
  <div
    class="accordion-item bg-white border-4 border-amarillo"
    v-for="task in wholeTask[0]"
    :key="task.id"
  >
    <h2
      v-for="title in wholeTask[1]"
      :key="title.id"
      id="tarea"
      class="
        accordion-header
        flex flex-row
        items-center
        justify-between
        w-full
        p-2
        bg-white
        rounded-lg
        drop-shadow-md
        hover:drop-shadow-2xl
      "
    >
      <jet-button-done :id="task.id" :done="task.done" />
      <button
        class="
          accordion-button
          relative
          flex
          items-center
          w-full
          text-base text-gray-800 text-left
          bg-white
          transition
          focus:outline-none
          collapsed
        "
        type="button"
        data-bs-toggle="collapse"
        :data-bs-target="accordionTargetId"
        aria-expanded="true"
        :aria-controls="accordionId"
      >
        <div class="items-center w-1/5 h-1/3">
          <img :src="wholeTask[1][0].icons[0].icon" alt="Icono de tarea" />
        </div>
        <div class="flex-row pl-5 w-4/6">
          <h1 class="text-base text-noNegro font-bold">
            {{ title.title }}
          </h1>
        </div>
      </button>
    </h2>

    <div
      :id="accordionId"
      class="accordion-collapse collapse w-full bg-amarilloMedio"
      aria-labelledby="headingOne"
      data-bs-parent="#accordionExample"
      v-for="subtask in wholeTask[2]"
      :key="subtask.id"
    >
      <div class="accordion-body py-3 px-4">
        <div class="flex items-center justify-start">
          
            <h1 class="text-base font-medium opacity-100">
              · {{ subtask.description }}
            </h1>
          
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import JetButtonDone from "@/Jetstream/ButtonDone.vue";

export default defineComponent({
  props: ["wholeTask"],

  data() {
    return {
      accordionId: "collapse" + this.wholeTask[0][0].id,
      accordionTargetId: "#" + "collapse" + this.wholeTask[0][0].id,
    };
  },

  components: {
    JetButtonDone,
  },
});
</script>

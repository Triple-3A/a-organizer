<template>
    <div>
        <td class="flex flex-col">
            <div>
                <strong> {{ name }} </strong>
            </div>
            <div>{{ email }}</div>
        </td>
    </div>
    <div class="flex flex-row justify-between">
        <td>
            <div class="inline-flex">
                <button
                    class="bg-azul-800 text-gray-800 font-bold py-2 px-4 rounded-l"
                >
                    Tecn.
                </button>
                <button
                    class="bg-azul hover:bg-azul/80 text-white-300 font-bold py-2 px-4 rounded-r"
                >
                    Estu.
                </button>
            </div>
        </td>
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ["email", "name"],
});
</script>

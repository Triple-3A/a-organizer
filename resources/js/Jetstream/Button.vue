<template>
    <button :type="type" class="inline-flex items-center px-6 py-2 bg-gray-800 rounded-md font-medium text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900  disabled:opacity-25 transition">
        <slot></slot>
    </button>
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    })
</script>

<template>
    <input 
    class="text-xs border-2 px-6 border-amarillo 
    rounded shadow-sm" :value="modelValue" 
    @input="$emit('update:modelValue', $event.target.value)" 
    ref="input">
</template>

<script>
    import { defineComponent } from 'vue'

    export default defineComponent({
        props: ['modelValue'],

        emits: ['update:modelValue'],
    })
</script>

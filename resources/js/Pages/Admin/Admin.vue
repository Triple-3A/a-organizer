<template>
    
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    props:{
        productos: Array
    },
    components:{
        Head,
        Link,
        AppLayout,
    }
};
</script>

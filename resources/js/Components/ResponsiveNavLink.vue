<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? 'block w-full ps-3 pe-4 py-2 border-l-4 text-start text-base font-medium text-white bg-gray-500 focus:outline-none transition duration-150 ease-in-out'
        : 'block w-full ps-3 pe-4 py-2 text-start text-base font-medium text-white focus:outline-none transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

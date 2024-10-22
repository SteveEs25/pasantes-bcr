<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Bienvenidos" />
    <div class="bg-gray-700 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <div>
                    <Link href="/">
                        <ApplicationLogo class="w-44 h-44 fill-current mx-auto" />
                    </Link>

                    <h2 class="mt-8 text-center text-xl font-semibold text-white">Banco Central de Reserva de El Salvador</h2>
                    <h2 class="mt-4 text-center text-xl font-semibold text-white">Sistema para Administración de Marcación Pasantes</h2>
                </div>

                <div class="text-center mt-16 grid md:grid-cols-2">
                    <div class="md:text-right mb-14 md:mb-0">
                        <Link class="md:mr-7 bg-gray-600 rounded-lg px-5 py-3 shadow-lg shadow-white text-gray-300 text-xl hover:shadow-md cursor-pointer ease-in duration-200">
                            Ingreso Pasantes
                        </Link>
                    </div>
                    <div class="md:text-left">
                        <Link :href="route('login')" class="md:ml-7 bg-gray-600 rounded-lg px-5 py-3 shadow-lg shadow-white text-gray-300 text-xl hover:shadow-md cursor-pointer ease-in duration-200">
                            Administración
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

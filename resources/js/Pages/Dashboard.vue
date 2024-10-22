<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Inicio" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Inicio</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 text-center text-2xl dark:text-gray-100">
                        Alumnos con solo una marcación en el día <br>
                        Debería solucionar esta situación por efectos de calculo de tiempo

                        <table class="w-full mt-10">
                            <colgroup>
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-40">
                                <col class="w-5">
                                <col class="w-40">
                                <col class="w-5">
                            </colgroup>
                            <thead class="text-gray-700 border-b-4 border-gray-700 dark:text-gray-300">
                                <tr class="text-center text-base uppercase">
                                    <th class="py-2">Fecha</th>
                                    <th class="py-2">Código</th>
                                    <th class="py-2">Carnet</th>
                                    <th class="py-2">Nombre Completo</th>
                                    <th class="py-2">Modalidad</th>
                                    <th class="py-2">Ubicación</th>
                                </tr>
                            </thead>
                            <tbody class="text-center text-sm">
                                <tr class="border-b">
                                    <td class="py-3">2024-07-12</td>
                                    <td class="py-3">90387</td>
                                    <td class="py-3">91988</td>
                                    <td class="py-3">Juan Antonio Sosa Pérez</td>
                                    <td class="py-3">Pasantía Remunerada</td>
                                    <td class="py-3">Gerencia de Innovación y Tecnología de Información</td>
                                    <td class="py-3 text-right">
                                        <button class="bg-gray-500 hover:bg-gray-600 rounded-md px-3 py-1 ml-4 text-white font-semibold">Ver Caso</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

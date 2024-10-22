<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import {
    PlusCircleIcon
} from "@heroicons/vue/solid";
import {
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogPanel,
    DialogTitle
} from '@headlessui/vue';

const data = defineProps(['pasantes']);

const form = useForm ({
    nivelEstudio: ''
})

const isOpen = ref(false)

function closeModal() {
    isOpen.value = false
}
</script>

<template>
    <Head title="Pasantes" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Pasantes</h2>
        </template>

        <div class="py-12">
            <div class="w-5/6 mx-auto sm:px-6 lg:px-8">
                <button @click="isOpen = true" class="text-gray-700 hover:text-gray-600 rounded-full"><PlusCircleIcon class="w-12"/></button>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-2">
                    <div class="p-6 text-gray-900 text-center text-2xl dark:text-gray-100">
                        <table class="w-full">
                            <colgroup>
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-40">
                                <col class="w-40">
                                <col class="w-5">
                                <col class="w-20">
                                <col class="w-20">
                                <col class="w-20">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                                <col class="w-5">
                            </colgroup>
                            <thead class="text-gray-700 border-b-4 border-gray-700 dark:text-gray-300">
                                <tr class="text-sm text-center uppercase">
                                    <th class="py-2">#</th>
                                    <th class="py-2">Codigo</th>
                                    <th class="py-2">Carnet</th>
                                    <th class="py-2">Nombre</th>
                                    <th class="py-2">Area de apoyo</th>
                                    <th class="py-2">Modalidad</th>
                                    <th class="py-2">Correo</th>
                                    <th class="py-2">Desde</th>
                                    <th class="py-2">Hasta</th>
                                    <th class="py-2">De</th>
                                    <th class="py-2">A</th>
                                    <th class="py-2">Institucion</th>
                                    <th class="py-2">Estado</th>
                                    <th class="py-2"></th>
                                    <th class="py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="text-center text-sm">
                                <tr v-for="(pasante, index) in data.pasantes" :key="index" class="border-b">
                                    <td class="py-3">{{ pasante.id }}</td>
                                    <td class="py-3">{{ pasante.cod_empleado }}</td>
                                    <td class="py-3">{{ pasante.cod_carnet }}</td>
                                    <td class="py-3">{{ pasante.nombre }}</td>
                                    <td class="py-3">Gerencia de Innovación y Tecnología de Información</td>
                                    <td class="py-3">Pasantía Remunerada</td>
                                    <td class="py-3">{{ pasante.correo }}</td>
                                    <td class="py-3">{{ pasante.fecha_inicio_actividad }}</td>
                                    <td class="py-3">{{ pasante.fecha_fin_actividad }}</td>
                                    <td class="py-3">{{ pasante.horario_inicio }}</td>
                                    <td class="py-3">{{ pasante.horario_fin }}</td>
                                    <td class="py-3">UEES</td>
                                    <td class="py-3">{{ pasante.estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                                    <td class="py-3"></td>
                                    <td class="py-3"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <TransitionRoot appear :show="isOpen" as="template">
            <Dialog as="div" @close="closeModal()" class="relative z-10">
                <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0"
                    enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
                    <div class="fixed inset-0 bg-black bg-opacity-25" />
                </TransitionChild>

                <div class="fixed inset-0 overflow-y-auto">
                    <div class="flex items-center justify-center min-h-full p-4 text-center">
                        <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0 scale-95"
                            enter-to="opacity-100 scale-100" leave="duration-200 ease-in"
                            leave-from="opacity-100 scale-100" leave-to="opacity-0 scale-95">
                            <DialogPanel
                                class="w-1/3 p-6 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl">
                                <DialogTitle as="h3" class="text-lg font-medium leading-6 text-gray-900 border-b border-black">
                                    Inscribir nuevo pasante
                                </DialogTitle>

                                <form action="">
                                    
                                    <!-- DATOS PERSONALES -->

                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codEmpleado">Código empleado:</label>
                                            </div>
                                            <input type="text" id="codEmpleado" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Código carnet:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Nombres:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Apellidos:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="genero">Género:</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="0" id="masculino" class="rounded-xl mr-1">
                                                <label for="masculino">Masculino</label>

                                                <input type="radio" value="1" id="femenino" class="rounded-xl mr-1 ml-4">
                                                <label for="femenino">Femenino</label>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">DUI:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Teléfono personal:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Correo:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Dirección:</label>
                                            </div>
                                            <textarea name="" id="" cols="60" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Contacto por emergencia:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Teléfono contacto:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Hospital, Unidad Salud, etc:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Tipo de sangre:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Padecimiento o condición especial:</label>
                                            </div>
                                            <textarea name="" id="" cols="60" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <!-- DATOS ACADEMICOS -->

                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Institución:</label>
                                            </div>
                                            <select name="" id="" class="w-4/5">
                                                <option value="">Universidad Evangélica de El Salvador</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Nivel de estudio:</label>
                                            </div>
                                            <div>
                                                <input v-model="form.nivelEstudio" type="radio" value="0" name="nivelEstudio" id="universitario" class="rounded-xl mr-1">
                                                <label for="universitario">Universitario</label>

                                                <input v-model="form.nivelEstudio" type="radio" value="1" name="nivelEstudio" id="bachillerato" class="rounded-xl mr-1 ml-4">
                                                <label for="bachillerato">Bachillerato</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DATOS UNIVERSIDAD -->
                                    <div v-if="form.nivelEstudio === 0" class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Carrera universitaria:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="w-full">
                                                <div class="mt-3 text-sm text-gray-500">
                                                    <label for="codCarnet">Ciclo:</label>
                                                </div>
                                                <input type="text" id="codCarnet" placeholder="# ciclo" class="rounded-xl w-4/5">
                                            </div>
                                            <div class="w-full">
                                                <div class="mt-3 text-sm text-gray-500">
                                                    <label for="codCarnet">CUM:</label>
                                                </div>
                                                <input type="text" id="codCarnet" placeholder="##.##" class="rounded-xl w-4/5">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DATOS BACHILLERATO -->
                                    <div v-else class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Especialidad bachillerato:</label>
                                            </div>
                                            <input type="text" id="codCarnet" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="w-full">
                                                <div class="mt-3 text-sm text-gray-500">
                                                    <label for="codCarnet">Año de estudio:</label>
                                                </div>
                                                <input type="text" id="codCarnet" placeholder="# año" class="rounded-xl w-4/5">
                                            </div>
                                            <div class="w-full">
                                                <div class="mt-3 text-sm text-gray-500">
                                                    <label for="codCarnet">CUM:</label>
                                                </div>
                                                <input type="text" id="codCarnet" placeholder="##.##" class="rounded-xl w-4/5">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- DATOS DEL HORARIO -->
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Horas requeridas:</label>
                                            </div>
                                            <input type="text" id="codCarnet" placeholder="# año" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Horario de apoyo:</label>
                                            </div>
                                            <input type="text" id="codCarnet" placeholder="##.##" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Fecha actividad:</label>
                                            </div>
                                            <input type="text" id="codCarnet" placeholder="# año" class="rounded-xl w-4/5">
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Horario actividad:</label>
                                            </div>
                                            <input type="text" id="codCarnet" placeholder="##.##" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <!-- DATOS DEL AREA DE APOYO -->
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Area a la que apoya:</label>
                                            </div>
                                            <select name="" id="" class="w-4/5">
                                                <option value="">Seleccione el área</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Proyecto al que apoya:</label>
                                            </div>
                                            <input type="text" id="codCarnet" placeholder="##.##" class="rounded-xl w-4/5">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Quién supervisará:</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Seleccione el supervisor</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Modalidad pasantía:</label>
                                            </div>
                                            <select name="" id="">
                                                <option value="">Seleccione la modalidad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 mt-4">
                                        <div class="w-full">
                                            <div class="mt-3 text-sm text-gray-500">
                                                <label for="codCarnet">Comentarios:</label>
                                            </div>
                                            <textarea name="" id="" cols="60" rows="2"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>
    </AuthenticatedLayout>
</template>
<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current mx-auto" />
            </Link>

            <div class="text-center text-gray-200 text-xl font-semibold mt-3 mb-2">Administración de Marcación Pasantes</div>
            <hr>

            <div class="mt-16">
                <InputLabel for="email" value="Correo" class="text-white" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Contraseña" class="text-white" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-5">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-300">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-12">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-400 hover:text-gray-300 rounded-md"
                >
                    ¿Olvidó su contraseña?
                </Link>

                <PrimaryButton class="ms-4 hover:bg-gray-500" :class="{ 'opacity-25': form.processing }" :disabled="form.processing" >
                    Iniciar Sesión
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

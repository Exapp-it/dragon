<script>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, useForm} from '@inertiajs/vue3';
import Notify from "@/Components/Notify.vue";
import {ref} from 'vue';

export default {
    components: {
        GuestLayout,
        InputError,
        InputLabel,
        PrimaryButton,
        TextInput,
        Notify,
        Head,
    },
    props: {
        title: {
            type: String,
        },
    },
    setup(props) {
        const form = useForm({
            username: '',
            password: '',
        });

        const submit = () => {
            form.post(route('admin.login.store'), {
                onFinish: () => form.reset('password'),
            });
        };

        const showNotify = ref(true);

        return {
            form,
            submit,
            showNotify,
        };
    },
};
</script>

<template>
    <GuestLayout>
        <Notify
            v-if="form.errors.message"
            :show="true" :message="form.errors.message"
            :status="'error'">
        </Notify>
        <Head
            :title="title"/>
        <form @submit.prevent="submit">
            <div>
                <InputLabel
                    for="username"
                    value="Username"
                />

                <TextInput
                    id="username"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.username"
                    autofocus
                    autocomplete="username"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.username"
                />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password"
                    value="Password"
                />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    autocomplete="current-password"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.password"
                />
            </div>


            <div class="flex items-center justify-end mt-4">
                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Войти
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>

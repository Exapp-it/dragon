<script>
import {Head, Link, useForm} from '@inertiajs/vue3';
import Notify from "@/Components/Notify.vue";
import {ref} from 'vue';
import AdminLayout from "@/Layouts/AdminLayout.vue";
import ContentHeader from "@/Components/Admin/ContentHeader.vue";
import MainButton from "@/Components/Admin/MainButton.vue";
import InputText from "@/Components/Admin/InputText.vue";
import InputError from "@/Components/InputError.vue";

export default {
    components: {
        InputError,
        InputText,
        MainButton,
        ContentHeader,
        AdminLayout,
        Notify,
        Head,
        Link,
    },
    props: {
        title: String,
    },
    data() {
        return {
            form: useForm({
                title: '',
                content: '',
            }),
            showNotify: true,
            news: {
                title: this.title,
                content: this.content,
            }
        };
    },

    methods: {
        submit() {
            this.form.post(route('admin.login.store'));
        },

        // Эмитим событие при изменении значения
        updateTitleValue(value) {
            this.news.title = value;
            // Используем this.$emit для доступа к emit без режима setup
            this.$emit('update:newsTitle', value);
        },

        updateContentValue(value) {
            this.news.content = value;
            // Используем this.$emit для доступа к emit без режима setup
            this.$emit('update:content', value);
        },
    },
    setup(props) {
        const form = useForm({
            title: '',
            content: '',
        });

        const submit = () => {
            form.post(route('admin.login.store'));
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
    <AdminLayout>
        <Head
            :title="title"/>
        <ContentHeader
            :title="title"></ContentHeader>
        <div class="mb-6 flex justify-end">
            <Link
                :href="route('admin.news')">
                <MainButton
                    :text="'Список новостей'"></MainButton>
            </Link>
        </div>
        <div v-if="news.title"> {{ news.title }}</div>
        <div v-if="news.content"> {{ news.content }}</div>

            <div
                class="flex flex-col space-y-8 w-1/3 rounded drop-shadow border border-stroke bg-white p-10">
                <form @submit.prevent="submit">
                    <div class="flex flex-col space-y-5">
                        <InputText
                            :value="form.title" @input="updateTitleValue($event.target.value)"
                            :name="'Title'">
                        </InputText>
                        <InputError
                            class="mt-2"
                            :message="form.errors.title"
                        />

                        <InputText
                            :value="form.content" @input="updateContentValue($event.target.value)"
                            :name="'Content'"
                        >
                        </InputText>
                    </div>
                </form>
            </div>
            <div class="w-full">
                <article
                    class="group w-full md:w-1/2 lg:w-1/3 xl:w-1/4 overflow-hidden bg-white rounded-xl shadow-md transition-transform transform hover:scale-105 duration-300">
                    <img
                        :alt="news.title"
                        src=""
                        class="h-56 w-full object-cover transition-transform transform group-hover:scale-110"
                    />

                    <div class="p-4">
                        <a href="" class="block hover:text-indigo-600 transition-colors duration-300">
                            <h3 class="text-xl font-semibold cursor-pointer text-gray-900 leading-tight mb-2 hover:underline">
                                {{ news.title }}
                            </h3>
                        </a>

                        <p class="text-sm text-gray-600 line-clamp-3 mb-4 hover:text-gray-800">
                            {{ news.content }}
                        </p>

                        <div class="flex items-center text-sm text-gray-500">
                            <div class="flex items-center gap-1">
                                <svg class="h-4 w-4 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="font-semibold">0</span>
                            </div>

                            <div class="flex items-center ml-2 gap-1">
                                <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25"/>
                                </svg>
                                <span class="font-semibold"></span>
                            </div>

                            <div class="ml-auto">
                                <span class="text-gray-400">546</span>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

    </AdminLayout>
</template>


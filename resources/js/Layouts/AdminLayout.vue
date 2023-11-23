<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link, usePage} from "@inertiajs/vue3";

export default {
    components: {
        Link,
        ApplicationLogo,
    },
    data() {
        return {
            sidebarOpen: false,
            dropdownOpen: false,
            isOpen: false,
        }
    },
    methods: {
        toggleDetails() {
            this.isOpen = !this.isOpen;
        },
        test() {
            const page = usePage();
            console.log(page.props);
        }
    },
}
</script>

<template>
    <div>
        <div class="flex h-screen overflow-hidden">
            <div :class="{ 'block': sidebarOpen, 'hidden': !sidebarOpen }" @click="sidebarOpen = false"
                 class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden">
            </div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                 class="fixed z-30 inset-y-0 left-0 w-72 drop-shadow transition duration-300 transform bg-black overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">

                <div class="flex items-center justify-between gap-2 px-6 mt-5 py-5.5 lg:py-6.5">
                    <Link :href="route('admin')">
                        <div class="flex items-center gap-2">
                            <ApplicationLogo class="w-20 h-20 fill-current text-gray-500"/>
                            <span class="text-white font-bold text-xl">Admin Panel</span>
                        </div>
                    </Link>

                    <button class="block lg:hidden text-white" @click.stop="sidebarOpen = !sidebarOpen">
                        <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                                fill=""></path>
                        </svg>
                    </button>
                </div>


                <nav class="mt-10">
                    <ul class="mt-32 px-5 space-y-5">
                        <li>
                            <Link
                                :href="route('admin')"
                                class="group relative flex gap-4 rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                            >
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                        fill=""></path>
                                </svg>
                                Главная
                            </Link>
                        </li>

                        <li>
                            <Link
                                :href="route('admin.news')"
                                class="group relative flex gap-4 rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                            >
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                        fill=""></path>
                                </svg>
                                Menu
                            </Link>
                        </li>

                        <li>
                            <div @click="toggleDetails">
                                <div
                                    class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-white hover:bg-gray-100 hover:text-gray-700">
                                    <span class="group relative flex gap-4 text-sm font-medium">
                                                        <svg class="fill-current" width="18" height="18"
                                                             viewBox="0 0 18 18" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                        fill=""></path>
                                    <path
                                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                        fill=""></path>
                                    <path
                                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                        fill=""></path>
                                </svg>
                                        Новости </span>
                                    <span class="shrink-0 transition duration-300"
                                          :style="{ transform: isOpen ? 'rotate(0deg)' : 'rotate(180deg)' }">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                               fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                          </svg>
                                    </span>
                                </div>
                                <ul v-if="isOpen" class="mt-2 space-y-1 px-4">
                                    <li>
                                        <Link
                                            :href="route('admin.news')"
                                            class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                                        >
                                            Все новости
                                        </Link>
                                    </li>
                                    <li>
                                        <Link
                                            :href="route('admin.news.create')"
                                            class="block rounded-lg px-4 py-2 text-sm font-medium text-white hover:bg-gray-100 hover:text-gray-700"
                                        >
                                            Создать новость
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                <header class="sticky top-0 z-999 flex w-full bg-gray-200 drop-shadow-lg">
                    <div class="flex flex-grow items-center justify-between py-6 px-4 shadow-2 md:px-6 2xl:px-11">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="flex items-center">
                            <div class="relative">
                                <button @click="dropdownOpen = ! dropdownOpen"
                                        class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                    <img class="h-full w-full object-cover"
                                         src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                         alt="User Avatar">
                                </button>

                                <div v-if="dropdownOpen" @click="dropdownOpen = false"
                                     class="fixed inset-0 h-full w-full z-10"></div>


                                <div v-if="dropdownOpen"
                                     class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10">
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Выйти</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </header>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <slot/>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>

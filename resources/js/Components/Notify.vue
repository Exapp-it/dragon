<script>
import { ref, watch } from 'vue';

export default {
    props: {
        show: {
            type: Boolean,
            default: false,
        },
        message: {
            type: String,
        },
        status: {
            type: String,
        },
    },
    data() {
        return {
            icons: {
                success: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-full w-full"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                error: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">\n' +
                    '  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />\n' +
                    '</svg>\n',
            },
        };
    },
    watch: {
        show(newValue) {
            console.log('props.show changed:', newValue);
            this.show = newValue;

            if (newValue) {
                setTimeout(() => {
                    this.show = false;
                    console.log('Hiding the block after 5 seconds');
                }, 5000);
            }
        },
    },
};
</script>

<template>

        <div v-if="show"
             role="alert"
             :class="{ 'bg-red-600': status === 'error', 'bg-blue-200': status === 'success' }"
             class="rounded-xl shadow-2xl p-4 my-5">
            <div class="flex items-center gap-4">
                <span
                    class="w-8 h-8"
                    :class="{'text-red-300': status === 'error', 'text-green-400': status === 'success'}"
                    v-html="icons[status]">

                </span>


                <div class="flex-1">
                    <strong class="block font-medium text-white">
                        {{ status === 'error' ? 'Ошибка' : (status === 'success' ? 'Успех' : '') }}
                    </strong>

                    <p class="mt-1 text-sm text-white">
                        {{ message }}
                    </p>
                </div>
            </div>
        </div>
</template>

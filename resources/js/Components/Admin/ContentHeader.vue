<script>
import {Link} from "@inertiajs/vue3";

export default {
    components: {
        Link
    },
    props: {
        title: String,
        required: true,
    }
}
</script>

<template>
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-[26px] leading-[30px] font-bold text-black">
            {{ title }}
        </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <Link class="font-medium" :href="route('admin')">
                        Главная /
                    </Link>
                </li>
                <li class="text-sky-600">{{ title }}</li>
            </ol>
        </nav>
    </div>
</template>

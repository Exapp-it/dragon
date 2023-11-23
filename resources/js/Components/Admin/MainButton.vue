<script>
export default {

    props: {
        text: String,
        required: true,
    }
}
</script>

<template>
    <div
        class="group drop-shadow relative inline-block text-sm font-medium text-white focus:outline-none focus:ring">
        <span
            class="absolute inset-0 border border-black group-active:border-black/75">

        </span>
        <span
            class="block border border-black bg-black px-12 py-3 transition-transform active:border-black/75 active:bg-black/75 group-hover:-translate-x-1 group-hover:-translate-y-1">
            {{ text }}
        </span>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
    }
}
</script>

<template>
    <div>
        <label class="mb-3 block text-sm font-medium text-black transition duration-700 focus-within:text-green-500 focus-within:text-[16px]">
            {{ name }}
        <input type="text"
               :placeholder="name"
               class="w-full mt-3 rounded-lg border-[2px] border-black bg-transparent py-3 px-5 font-medium outline-none transition focus:border-green-500 focus:right-green-500 focus:ring-0 disabled:cursor-default disabled:bg-whiter text-gray-600 duration-700"
        >
        </label>
    </div>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    components: {AdminLayout, Head},
    props: {
        title: String,
    }
}
</script>

<template>
    <AdminLayout>
        <Head :title="title"/>

    </AdminLayout>
</template>


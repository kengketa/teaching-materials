<template>
    <div class="bg-white min-h-screen">
        <Nav/>
        <section id="content" class="text-gray-800 z-0 py-10 px-4 md:px-8 lg:px-10 xl:px-16">
            <main>
                <slot></slot>
            </main>
        </section>
    </div>
</template>

<script>
import Nav from "@/Pages/Layout/Nav.vue";

export default {
    name: "Layout",
    components: {Nav},
    data() {
        return {};
    }
};
</script>

<style scoped>

</style>


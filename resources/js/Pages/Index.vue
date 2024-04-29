<template>
    <Layout>
        <div class="w-full">
            <div class="flex justify-center">
                <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-700">เอกสารประกอบการสอน</h1>
                <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-blue-600">(PowerPoint)</h1>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-4 md:px-6 lg:px-10 xl:px-16 mt-4 lg:mt-10">
                <div v-for="(subject,index) in subjectData" :key="subject.id">
                    <TeachingMaterialCard :subject="subject"/>
                </div>
            </div>
            <div v-if="pagination !== null" class="px-4 md:px-6 lg:px-10 xl:px-16 mt-4 flex justify-end">
                <div class="join">
                    <Link v-for="(pagination,index) in pagination.links" :key="index"
                          :class="pagination.active ?'btn-active':''"
                          :href="pagination.url"
                          class="join-item btn">
                        {{ pagination.label }}
                    </Link>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "@/Pages/Layout/Layout.vue";
import TeachingMaterialCard from "@/Pages/Components/TeachingMaterialCard.vue";
import axios from 'axios';
import {Link} from "@inertiajs/vue3";

export default {
    name: "Index",
    components: {Layout, TeachingMaterialCard, Link},
    props: {
        subjects: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            subjectData: null,
            pagination: null
        };
    },
    mounted() {
        this.subjectData = this.subjects.data
        this.pagination = this.subjects.meta.pagination;
    },

    methods: {},

    watch: {},

    computed: {}
};
</script>

<style scoped>
</style>

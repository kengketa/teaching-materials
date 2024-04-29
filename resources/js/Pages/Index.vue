<template>
    <Layout>
        <div class="w-full">
            <div class="flex justify-center">
                <h1 class="text-4xl font-bold text-gray-700">เอกสารประกอบการสอน</h1>
                <h1 class="text-4xl font-bold text-blue-600">(PowerPoint)</h1>
            </div>
            <div class="grid grid-cols-4 gap-6 px-16 mt-10">
                <div v-for="(subject,index) in subjectData" :key="subject.id">
                    <TeachingMaterialCard :subject="subject"/>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "@/Pages/Layout/Layout.vue";
import TeachingMaterialCard from "@/Pages/Components/TeachingMaterialCard.vue";
import axios from 'axios';

export default {
    name: "Index",
    components: {Layout, TeachingMaterialCard},
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

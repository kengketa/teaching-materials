<template>
    <Layout>
        <div class="w-full">
            <div class="flex justify-center">
                <h1 class="text-4xl font-bold text-gray-700">เอกสารประกอบการสอน</h1>
                <h1 class="text-4xl font-bold text-blue-600">(PowerPoint)</h1>
            </div>
            <div class="grid grid-cols-4 gap-8 px-16 mt-10">
                <div class="w-full border border-slate-200 p-4">
                    <img class="w-full h-80 object-cover" src="https://picsum.photos/400/800">
                    <div class="mt-2">
                        <p class="text-lg font-bold text-gray-700 text-center leading-5">รายวิชา GE64303
                            การออมและการลงทุน
                        </p>
                        <div class="text-sm text-center mt-4">
                            <p>อาจารย์ ดร.มรุต กลัดเจริญ</p>
                            <p>คณะวิทยาการจัดการ</p>
                            <p>เผยแพร่วันที่ 1 มีนาคม 2567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "@/Pages/Layout/Layout.vue";
import axios from 'axios';

export default {
    name: "Index",
    components: {Layout},
    data() {
        return {
            typeTap: 'academic',
            stateTap: 'apply',
            typeId: 1,
            categoryId: 1,
            announcements: [],
            currentPage: 1,
            allTypes: [],
            allCategories: [],
            pagination: null,
            loadAnnouncementUrl: null
        };
    },
    async mounted() {
        this.loadAnnouncementUrl = this.route('announcements.index', {
            type_id: this.typeId,
            category_id: this.categoryId
        });
        const promises = [
            this.getAllTypes(),
            this.getAllCategories(),
            this.loadAnnouncements()
        ];
        const [allTypes, allCategories, announcements] = await Promise.all(promises);
        this.allTypes = allTypes;
        this.allCategories = allCategories;
        this.announcements = announcements.data;
        this.pagination = announcements.meta.pagination;

    },

    methods: {
        rowIndex(index) {
            if (this.pagination === null) {
                return null;
            }
            return (this.pagination.current_page - 1) * this.pagination.per_page + index + 1;
        },
        selectPage(pag) {
            if (pag.url === undefined) {
                return;
            }
            this.loadAnnouncementUrl = pag.url;
        },
        async getAllTypes() {
            const res = await axios.get(this.route('announcements.get_all_announcement_types'));
            return res.data
        },

        async getAllCategories() {
            const res = await axios.get(this.route('announcements.get_all_announcement_categories'));
            return res.data
        },

        async loadAnnouncements() {
            const res = await axios.get(this.loadAnnouncementUrl);
            return res.data;
        }
    },

    watch: {
        async typeId() {
            this.loadAnnouncementUrl = this.route('announcements.index', {
                type_id: this.typeId,
                category_id: this.categoryId
            });
            const res = await this.loadAnnouncements();
            this.announcements = res.data;
            this.pagination = res.meta.pagination;
        },
        async categoryId() {
            this.loadAnnouncementUrl = this.route('announcements.index', {
                type_id: this.typeId,
                category_id: this.categoryId
            });
            const res = await this.loadAnnouncements();
            this.announcements = res.data;
            this.pagination = res.meta.pagination;
        },
        async loadAnnouncementUrl() {
            const res = await this.loadAnnouncements();
            this.announcements = res.data;
            this.pagination = res.meta.pagination;
        },
    },

    computed: {
        currentTypeTabName() {
            const tab = this.allTypes.find(t => {
                return t.id === this.typeId
            });
            return tab.name;
        }
    }
};
</script>

<style scoped>
</style>

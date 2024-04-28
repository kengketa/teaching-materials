<template>
    <Layout>
        <div>
            <div
                class="w-full bg-gray-100 py-10 grid grid-cols-1 gap-10 md:grid-cols-2 md:gap-20 pl-8 pr-8 md:pl-40 md:pr-40">
                <div class="flex justify-end items-center">
                    <div class="w-full h-80 rounded-xl overflow-hidden">
                        <img class="object-cover w-full h-full" src="https://picsum.photos/400/300">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="text-4xl font-bold text-center text-blue-800">
                        ร่วมเป็นส่วนหนึ่งกับเราและพัฒนาองค์กรไปด้วยกัน</h1>
                    <p class="mt-4">สวัสดิการและสิทธิประโยชน์ พนักงานมหาวิทยาลัยศิลปากร</p>
                    <p>ประกันชีวิตและสุขภาพกลุ่ม สิทธิประโยชน์และสวัสดิการ </p>
                    <button
                        class="bg-blue-800 px-4 py-2 text-white rounded-md font-semibold flex items-center gap-2 mt-4">
                        <div>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <p>คู่มือการใช้งาน</p>
                    </button>
                </div>
            </div>
            <div class="px-4 md:px-10 lg:px-20 py-4">
                <div id="tab" class="w-full">
                    <div class="w-full md:w-1/2 lg:w-1/2 xl:1/4">
                        <div class="tabs tabs-bordered tabs-lg" role="tablist">
                            <input v-for="(type,index) in allTypes"
                                   :key="index"
                                   v-model="typeId"
                                   :aria-label="type.name"
                                   :class="type.id === typeId ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   :value="type.id"
                                   class="tab font-bold rounded-md"
                                   name="type_tab"
                                   role="tab" type="radio"/>
                        </div>
                    </div>
                    <div class="w-full lg:w-10/12 xl:w-8/12 mt-4">
                        <div class="tabs tabs-bordered flex flex-wrap" role="tablist">
                            <input v-for="(category,index) in allCategories" :key="index" v-model="categoryId"
                                   :aria-label="category.name"
                                   :class="category.id===categoryId ?'bg-blue-800 text-white':'text-blue-800 bg-white'"
                                   :value="category.id"
                                   class="tab font-bold rounded-md"
                                   name="state_tab"
                                   role="tab" type="radio"/>
                        </div>
                    </div>

                </div>
                <div id="table" class="mt-4 overflow-x-scroll min-h-96">
                    <table class="table table-zebra">
                        <!-- head -->
                        <thead>
                        <tr class="bg-blue-800 font-bold text-lg text-white">
                            <th>#</th>
                            <th>ประกาศ</th>
                            <th>ตำแหน่งที่รับสมัคร (หน่วยงาน/คณะวิชา)</th>
                            <th>คุณวุฒิ</th>
                            <th>ประเภทพนักงาน</th>
                            <th>จำนวนอัตรา</th>
                            <th>วันที่รับสมัคร</th>
                            <th>รายละเอียดคุณสมบัติ</th>
                            <th>สมัครงาน</th>
                        </tr>
                        </thead>
                        <tbody v-if="pagination!=null">
                        <tr v-for="(announcement,index) in announcements"  :key="index">
                            <th>{{  rowIndex(index) }}</th>
                            <td>{{ announcement.title }}</td>
                            <td>{{ announcement.position }}</td>
                            <td>{{ announcement.degree }}</td>
                            <td>{{ currentTypeTabName }}</td>
                            <td>{{ announcement.open_position }}</td>
                            <td>{{ announcement.start_date }} - {{ announcement.end_date }}</td>
                            <td>
                                <div class="flex justify-center gap-1">
                                    <a v-for="(doc,index) in announcement.documents.data" :key="index" :href="doc.url"
                                       target="_blank">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                             stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <button
                                    class="bg-blue-800 px-4 py-2 text-white text-sm rounded-md font-semibold flex items-center whitespace-nowrap">
                                    สมัครงาน
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div v-if="pagination != null" id="pagination" class="mt-2 flex justify-between items-center">
                    <div>แสดง {{ pagination.from }} ถึง {{ pagination.to }} จาก {{ pagination.total }} แถว</div>
                    <div class="join">
                        <button v-for="(pag,index) in pagination.links" :key="index"
                                :class="pag.active ?'btn-active':''"
                                class="join-item btn btn-md"
                                @click="selectPage(pag)">
                            {{ pag.label }}
                        </button>
                    </div>
                </div>
            </div>
            <div class="px-4 md:px-10 lg:px-20 py-4">
                <div class="w-full h-80">
                    <img class="object-cover w-full h-full" src="https://picsum.photos/800/300">
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
        rowIndex(index){
            if(this.pagination === null){
                return null;
            }
            return(this.pagination.current_page - 1) * this.pagination.per_page + index + 1;
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

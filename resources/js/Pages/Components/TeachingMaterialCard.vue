<template>
    <div
        class="w-full h-[550px] border border-slate-200 p-4 font-bold text-gray-700 hover:text-blue-600 hover:shadow-xl transition-all ease-in-out duration-500 cursor-pointer">
        <img class="w-full h-80 object-cover" src="https://picsum.photos/400/800">
        <div class="mt-2">
            <p class="text-lg text-center leading-5">
                รายวิชา {{ subject.code }} {{ subject.name_th }}
            </p>
            <div class="text-sm text-center mt-4 text-gray-700 font-normal">
                <div v-for="professor in subject.professors" :key="professor.id">
                    <p>อาจารย์ {{ professor.prefix }} {{ professor.first_name }} {{ professor.last_name }}</p>
                    <p>{{ professor.department.name }}</p>
                </div>
                <p>{{ subject.published_at }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "TeachingMaterialCard",
    props: {
        subject: {
            type: Object,
            required: true
        }
    },
    mounted() {
        console.log('-----------------');
        console.log(this.subject);
        console.log('-----------------');
    }
}
</script>


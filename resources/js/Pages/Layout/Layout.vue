<template>
    <div class="bg-white min-h-screen">
        <Nav/>
        <section id="content" class="mt-20 text-gray-800 z-0">
            <main>
                <slot></slot>
            </main>
            <footer>
                <div
                    class="bg-gray-100 px-20 grid w-full grid-cols-1 gap-8 py-12 mx-auto md:grid-cols-2 lg:grid-cols-3"
                >
                    <div class="w-full">
                        <p
                            class="block mb-4 font-sans text-sm antialiased font-bold leading-normal uppercase opacity-50 text-blue-gray-900"
                        >
                            งานทรัพยากรบุคคล กองกลาง สำนักงานอธิการบดี
                            มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                        </p>
                        <ul class="space-y-1">
                            <li
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900"
                            >
                                <a
                                    class="inline-block py-1 pr-2 transition-transform hover:scale-105"
                                    href="#"
                                >
                                    เลขที่ 96 ถนนปรีดีพนมยงค์ ตำบลประตูชัย อำเภอพระนครศรีอยุธยา
                                    จังหวัดพระนครศรีอยุธยา 13000
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full">
                        <p
                            class="block mb-4 font-sans text-sm antialiased font-bold leading-normal uppercase opacity-50 text-blue-gray-900"
                        >
                            เบอร์โทรศัพท์ งานทรัพยากรบุคคล
                        </p>
                        <ul class="space-y-1">
                            <li
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900"
                            >
                                <a
                                    class="inline-block py-1 pr-2 transition-transform hover:scale-105"
                                    href="#"
                                >
                                    โทรศัพท์ 035 – 276555 ต่อ 1120 , 1121 , 1122 , 1123 , 1124 ,
                                    1125
                                </a>
                            </li>
                            <li
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900"
                            >
                                <a
                                    class="inline-block py-1 pr-2 transition-transform hover:scale-105"
                                    href="#"
                                >
                                    โทรศัพท์ 035 – 244297 โทรสาร 035 – 244297
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full">
                        <p
                            class="block mb-4 font-sans text-sm antialiased font-bold leading-normal uppercase opacity-50 text-blue-gray-900"
                        >
                            งานทรัพยากรบุคคล
                        </p>
                        <ul class="space-y-1">
                            <li
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900"
                            >
                                <a
                                    class="inline-block py-1 pr-2 transition-transform hover:scale-105"
                                    href="#"
                                >
                                    อีเมล personnel_aru@hotmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="bg-blue-800 text-white flex flex-row flex-wrap items-center justify-center w-full py-6 text-center border-t gap-y-6 gap-x-12 border-blue-gray-50 md:justify-between px-20"
                >
                    <p
                        class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900"
                    >
                        2023 Copyright งานทรัพยากรบุคคล มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                    </p>
                </div>
            </footer>
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


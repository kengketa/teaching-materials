<template>
    <section
        class="flex md:hidden w-full h-20 bg-blue-800 fixed top-0 text-white py-2 px-4 justify-between gap-4 text-xl items-center z-30">
        <div class="flex gap-2 items-center">
            <div>logo</div>
            <div>name</div>
        </div>
        <div class="dropdown dropdown-end">
            <div class="border border-white p-2 rounded-md" role="button" tabindex="0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <ul class="dropdown-content z-[1] menu p-2 shadow bg-blue-700 rounded-box w-52" tabindex="0">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>
    </section>
    <section id="nav"
             class="hidden md:flex w-full h-20 bg-blue-800 fixed top-0 text-white py-4 px-4 justify-evenly gap-4 text-xl items-center z-30">
        <div class="flex gap-2">
            <div>logo</div>
            <div>name</div>
        </div>
        <div class="flex gap-4">
            <div>skdfgdjsgfd</div>
            <div>dfdsfdsfdsfdsf</div>
            <div>sdfdsfdsfdsfdsfd</div>
            <div>4dfsdfdsfdsfds</div>
        </div>
        <div v-if="$page.props.user === null">
            <a :href="route('login')"
               class="px-6 py-1.5 bg-white text-blue-800 rounded-md flex gap-2 items-center font-bold">
                <div>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                            stroke-linecap="round"
                            stroke-linejoin="round"/>
                    </svg>
                </div>
                <p>เข้าสู่ระบบ</p>
            </a>
        </div>
        <div v-if="$page.props.user !== null" class="flex gap-2 items-center">
            <div class="flex-none gap-2 text-gray-500">
                <div class="dropdown dropdown-end">
                    <div class="btn btn-ghost btn-circle avatar" role="button" tabindex="0">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                 src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"/>
                        </div>
                    </div>
                    <ul class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52"
                        tabindex="0">
                        <li>
                            <Link :href="route('profile.show')" class="justify-between">
                                Profile
                            </Link>
                        </li>
                        <li v-if="$page.props.role && ($page.props.role==='admin' || $page.props.role==='manager')">
                            <Link :href="route('dashboard.index')" class="justify-between">
                                Dashboard
                            </Link>
                        </li>
                        <li>
                            <button @click.prevent="logout">Logout</button>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="text-sm">{{ $page.props.user.name }}</p>
        </div>
    </section>
</template>
<script>
import {Link} from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "Nav",
    components: {Link},
    data() {
        return {};
    },
    methods: {
        logout() {
            Inertia.post(this.route('logout'));
        }
    }
};
</script>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';
onMounted(() => {
    initFlowbite();
})

const logOut = () => {
    alert('logout');
}
</script>
<template>
    <div>
        <nav class="fixed top-0 z-50 w-full bg-primary border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 ">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar"
                            data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar"
                            type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-primary ">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <a class="flex ms-2 md:me-24">
                            <!-- <img src="https://flowbite.com/docs/images/logo.svg"
                                class="h-8 me-3"
                                alt="FlowBite Logo" /> -->
                            <span
                                class="self-center text-xl font-bold sm:text-2xl text-secondary space-nowrap dark:text-white">Flowbite</span>
                        </a>
                    </div>
                    <div class="flex items-center duration-300">
                        <div class="flex items-center ms-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false"
                                    data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                        alt="user photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdown-user">
                                <div class="px-4 py-3"
                                    role="none">
                                    <p class="text-sm dark:text-white"
                                        role="none">
                                        Neil Sims
                                    </p>
                                    <p class="text-sm font-medium truncate dark:text-gray-300"
                                        role="none">
                                        neil.sims@flowbite.com
                                    </p>
                                </div>
                                <ul class="py-1"
                                    role="none">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:pl-5 duration-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Switch</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:pl-5 duration-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:pl-5 duration-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:pl-5 duration-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white text-secondary font-semibold dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li>
                        <router-link data-drawer-toggle="logo-sidebar"  to="/"
                            class="flex items-center p-2 rounded-lg dark:text-white font-semibold hover:bg-gray-100 hover:pl-5 duration-200 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-secondary transition duration-75 dark:text-gray-400 group-hover:text-secondary dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Home</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link data-drawer-toggle="logo-sidebar" to="/memo/create"
                            class="flex items-center p-2 rounded-lg dark:text-white font-semibold hover:bg-gray-100 hover:pl-5 duration-200 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-secondary transition duration-75 dark:text-gray-400  dark:group-hover:text-white"
                                viewBox="0 0 18 18"
                                xmlns="http://www.w3.org/2000/svg"
                                mirror-in-rtl="true"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier"
                                    stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#1e7d7d"
                                        d="M17 13a1 1 0 0 1-1 1h-1v1a1 1 0 0 1-2 0v-1h-1a1 1 0 0 1 0-2h1v-1a1 1 0 0 1 2 0v1h1a1 1 0 0 1 1 1z">
                                    </path>
                                    <path fill="#1e7d7d"
                                        d="M13.6 0H2.4A1.417 1.417 0 0 0 1 1.43v15.14A1.417 1.417 0 0 0 2.4 18h11.2a1.355 1.355 0 0 0 .2-.02A4.992 4.992 0 0 1 14 8a5.468 5.468 0 0 1 1 .1V1.43A1.417 1.417 0 0 0 13.6 0zM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zm3-4H4a1 1 0 0 1 0-2h5a1 1 0 0 1 0 2zm3-4H4.03a1 1 0 0 1 0-2H12a1 1 0 0 1 0 2z">
                                    </path>
                                </g>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Create Memo</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link data-drawer-toggle="logo-sidebar" to="/memo"
                            class="flex items-center p-2 rounded-lg dark:text-white font-semibold hover:bg-gray-100 hover:pl-5 duration-200 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-secondary transition duration-75 dark:text-gray-400  dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Memos</span>
                        </router-link >
                    </li>
                    <li>
                        <router-link data-drawer-toggle="logo-sidebar" to="/requests"
                            class="flex items-center p-2 rounded-lg dark:text-white font-semibold hover:bg-gray-100 hover:pl-5 duration-200 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-secondary transition duration-75 dark:text-gray-400  dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Requests</span>
                        </router-link>
                    </li>
                    <li>
                        <a @click="logOut"
                            class="flex cursor-pointer items-center p-2 rounded-lg dark:text-white font-semibold hover:bg-gray-100 hover:pl-5 duration-200 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-secondary transition duration-75 dark:text-gray-400  dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 18 16">
                                <path stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 pt-20 sm:ml-64 bg-gray-100 h-screen">
            <router-view></router-view>
        </div>
    </div>
</template>

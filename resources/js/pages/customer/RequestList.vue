<script setup>
import { initModals } from 'flowbite';
import { onMounted, ref } from 'vue';
import RequestDetails from '../../components/RequestDetailsModal.vue';

onMounted(() => {
    initModals();
})
const requestId = ref(null);
const openRequestDetils = (id) => {
    requestId.value = id
}

</script>
<template>
    <div class="relative overflow-x-auto shadow-md rounded-lg m-2 sm:m-5">
        <div
            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 bg-white p-5">
            <div class="P-2 font-bold text-gray-500 text-xl">
                REQUESTS
            </div>
            <label for="table-search"
                class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text"
                    id="table-search"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg max-w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search">
            </div>
        </div>
        <RequestDetails :requestId="requestId" />
        <div class=" max-h-[65vh] overflow-y-scroll  ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-50 dark:text-gray-400 ">
                <thead fixed
                    class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                    <tr>
                        <th scope="col"
                            class="px-2 sm:px-6 py-3">
                            <div class="flex items-center">
                                Request No
                                <a href="#"><svg class="w-3 h-3 ms-1.5"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col"
                            class="px-2 sm:px-6 py-3 text-center">
                            <div class="flex items-center">
                                Patient
                                <a href="#"><svg class="w-3 h-3 ms-1.5"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                        <th scope="col"
                            class="px-2 sm:px-6 py-3 text-center">
                            <div class="flex items-center">
                                Status
                                <a href="#"><svg class="w-3 h-3 ms-1.5"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 ">
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <!-- <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span> -->
                            <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                            <!-- <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span> -->
                            <!-- <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span> -->
                            <!-- <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>
                    <tr @click="openRequestDetils(1)"
                        data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <!-- <td scope="row"
                            class="px-2 sm:px-6 py-4 hidden lg:block">
                            <span></span>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>
                        </td> -->
                        <td class="px-2 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            REQ-2023-000001 <br>
                            <span class="text-xs text-gray-400">20-Nov-2023 2:30 pm</span>

                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            A778899 <br>
                            <span class="text-xs text-gray-400">Adam Hameed</span>
                        </td>
                        <td class="px-2 sm:px-6 py-4 text-center">
                            <span class="p-1 bg-orange-200 rounded-md text-orange-400">Pending</span>
                            <!-- <span class="p-1 bg-red-300 rounded-md text-red-500">Not-Available</span>
                   <span class="p-1 bg-blue-300 rounded-md text-blue-500">Available</span>
                   <span class="p-1 bg-green-300 rounded-md text-green-500">Collected</span>
                   <span class="p-1 bg-gray-300 rounded-md text-gray-500">Taken</span> -->
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between p-2 bg-white border-t-2 border-gray-200"
            aria-label="Table navigation">
            <ul class="inline-flex mx-auto -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#"
                        aria-current="page"
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

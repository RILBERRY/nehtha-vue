<script setup >
import { initModals } from 'flowbite';
import { onMounted } from 'vue'

const props = defineProps(['requestId']);

onMounted(() => {
    // initModals();
    console.log(props.requestId)
})


</script>
<template>
    <!-- Main modal -->
    <div id="default-modal"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700  overflow-hidden">
                <div class="p-4 pl-5 w-full bg-primary text-secondary font-bold">
                    <h4>REQ-2023-220123 </h4>
                </div>
                <div class="p-5 ">
                    <div class="flex justify-between text-gray-500 font-bold align-middle">
                        <h4 class="mt-auto">Patient Info</h4>
                        <div class="flex gap-2 justify-end">
                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available (Aasandha Not Covered)</button>
                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not Available</button>
                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                        </div>
                    </div>
                    <div class=" mt-5 p-2 rounded-lg border border-gray-300 ">
                        <div class="w-full flex gap-2 flex-wrap">
                            <p class="p-2 "><span class="text-gray-400">Name :</span> Ali Rilwan</p>
                            <p class="p-2 "><span class="text-gray-400">Patient N-ID :</span> A887878</p>
                            <p class="p-2 "><span class="text-gray-400">Prescription Date :</span> 20 Nov 2023</p>
                            <p class="p-2 "><span class="text-gray-400">Status :</span> Pending</p>
                            <p class="p-2 "><span class="text-gray-400">Remarks :</span> -</p>
                        </div>
                    </div>
                    <div class=" mt-5 p-2 rounded-lg border border-gray-300 ">
                        <h4 class="mt-auto text-gray-300 font-bold">Medicine Info</h4>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3">
                                            Medicine name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-right">
                                            Action / Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 flex gap-2 justify-end  ">
                                            <button class="p-2 px-4 bg-orange-300 rounded-md text-orange-500">Available
                                                <span class=" text-xm">(Aasandha Not Covered)</span></button>
                                            <button class="p-2 px-4 bg-red-300 rounded-md text-red-500">Not
                                                Available</button>
                                            <button class="p-2 px-4 bg-blue-300 rounded-md text-blue-500">Available</button>
                                        </td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div></template>

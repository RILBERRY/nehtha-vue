<script setup>
import { onMounted } from 'vue';

onMounted(() => {
    const $buttonElement = document.querySelector('#button');
    const $modalElement = document.querySelector('#modal');
    const $closeButton = document.querySelector('#closeButton');

    const modalOptions = {
        backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40'
    }

    if ($modalElement) {
        const modal = new Modal($modalElement, modalOptions);
        $buttonElement.addEventListener('click', () => modal.toggle());
        $closeButton.addEventListener('click', () => modal.hide());

        // programmatically show
        // modal.show();
    }
})
</script>
<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5">
        <div
            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 bg-white p-5">
            <div class="P-2 font-bold text-gray-500 text-xl">
                PRODUCTS
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
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search for items">
            </div>
        </div>
        <h1 class="wi-full py-40  text-center text-secondary/70 text-3xl font-bold">Comming Soon</h1>
    </div>
</template>

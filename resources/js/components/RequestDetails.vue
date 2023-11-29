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
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700  overflow-hidden">
            <div class="p-4 pl-5 w-full bg-primary text-secondary font-bold">
                <h4>REQ-2023-220123 </h4>
            </div>
            <div class="p-5 ">
                <div class="flex justify-between text-gray-500 font-bold align-middle">
                    <h4 class="mt-auto">Patient Info</h4>
                    <div class="flex gap-2 ">
                        <button type="button" class="text-white bg-red-600 p-2 px-4 rounded-md">Not-Available</button>
                        <button type="button" class="text-white bg-green-600 p-2 px-4 rounded-md">Available</button>
                    </div>
                </div>
                <div class=" mt-5 p-2 rounded-lg border border-gray-300 " >
                    <div class="w-full flex gap-2 flex-wrap">
                        <p class="p-2 "><span  class="text-gray-400">Name :</span> Ali Rilwan</p>
                        <p class="p-2 "><span  class="text-gray-400">Patient N-ID :</span> A887878</p>
                        <p class="p-2 "><span  class="text-gray-400">Prescription Date :</span> 20 Nov 2023</p>
                        <p class="p-2 "><span  class="text-gray-400">Status :</span> Pending</p>
                        <p class="p-2 "><span  class="text-gray-400">Remarks :</span> -</p>
                    </div>
                </div>
                <div class=" mt-5 p-2 rounded-lg border border-gray-300 " >
                    <div class="w-full flex gap-2 flex-wrap">
                        <p class="p-2 "><span  class="text-gray-400">Name :</span> Ali Rilwan</p>
                        <p class="p-2 "><span  class="text-gray-400">Patient N-ID :</span> A887878</p>
                        <p class="p-2 "><span  class="text-gray-400">Prescription Date :</span> 20 Nov 2023</p>
                        <p class="p-2 "><span  class="text-gray-400">Status :</span> Pending</p>
                        <p class="p-2 "><span  class="text-gray-400">Remarks :</span> -</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

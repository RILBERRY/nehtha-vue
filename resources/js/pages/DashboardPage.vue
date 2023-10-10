<script setup>
import { onMounted } from 'vue';
import ExampleComponent from '../components/ExampleComponent.vue';

onMounted(() => console.log('dashboard page mounted'))
</script>
<template>
    <div>
        Dashboard Page
        <br>
        <ExampleComponent/>
    </div>
</template>

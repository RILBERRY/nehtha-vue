<script setup>
import { onMounted } from 'vue';

onMounted(() => console.log('dashboard layout mounted'))
</script>
<template>
    <div>
        Dashboard Layout

        <router-view></router-view>
    </div>
</template>

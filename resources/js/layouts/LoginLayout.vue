<script setup>
import { onMounted } from 'vue';

onMounted(() => console.log('login layout mounted'))
</script>
<template>
    <div>
        Login Layout

        <router-view></router-view>
    </div>
</template>

<script setup>
import Layout from '@/Layouts/Layout.vue';

defineOptions({
    layout: Layout
});
</script>

<template>
    <div class="bg-container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white/80 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-container {
    background-image: url('https://e0.pxfuel.com/wallpapers/966/986/desktop-wallpaper-1-slam-dunk-anime.jpg');
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

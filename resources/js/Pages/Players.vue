<script setup>
import { Link } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';

const props = defineProps({
    players: Array
});

defineOptions({
    layout: Layout
});
</script>

<template>
    <div class="bg-container">
        <div class="content-wrapper">
            <div class="flex">
                <h1 class="text-4xl my-3 pink flex-1">Player List</h1>
                <Link href='/players/create' class="p-3 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Add Player</Link>
            </div>

            <table class="table-auto bg-white/80 backdrop-blur-md w-full mt-5 rounded shadow-lg">
                <thead class="bg-pink-200">
                    <tr>
                        <th class="p-2">Position</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Jersey No.</th>
                        <th class="p-2">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="player in players" :key="player.id" class="hover:bg-pink-100">
                        <td class="p-2">{{ player.position }}</td>
                        <td class="p-2">{{ player.name }}</td>
                        <td class="p-2">{{ player.jerseyno }}</td>
                        <td class="text-center p-2">
                            <Link :href="'/players/' + player.id" class="text-blue-500 hover:text-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                </svg>
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
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
    padding: 20px;
}

.content-wrapper {
    background: rgba(249, 249, 249, 0.9); /* Semi-transparent white */
    backdrop-filter: blur(1px); /* Adds a blur effect */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1200px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f3c6c6;
}

tbody tr:hover {
    background-color: #ffe5e5;
}

button, .btn {
    font-size: 1rem;
    padding: 0.75rem 1.25rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #1d4ed8;
    color: white;
}

.btn-primary:hover {
    background-color: #2563eb;
}

table {
    margin-top: 20px;
}
</style>

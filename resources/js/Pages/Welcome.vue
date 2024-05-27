<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="relative min-h-screen bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img
            id="background"
            class="absolute inset-0 w-full h-full object-cover"
            src="https://w0.peakpx.com/wallpaper/417/739/HD-wallpaper-anime-slam-dunk.jpg"
            alt="Background Image"
        />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex lg:justify-center lg:col-start-2">

                    </div>
                    <div>
                        <nav v-if="canLogin" class="-mx-3 flex flex-1 button justify-center">
                            <Link
                                v-if="$page.props.auth.user"
                                :href="route('dashboard')"
                                class="button-link"
                            >
                                Dashboard
                            </Link>

                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="button-link"
                                >
                                    Log in
                                </Link>

                                <Link
                                    v-if="canRegister"
                                    :href="route('register')"
                                    class="button-link"
                                >
                                    Register
                                </Link>
                            </template>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
    </div>
</template>

<style scoped>
.button {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 40px;
}

.button-link {
    border: black 2px solid;
    padding: 1rem 2rem; /* Increase padding for larger buttons */
    font-size: 1.25rem; /* Increase font size */
    border-radius: 0.5rem; /* Add border radius */
    transition: background-color 0.3s, color 0.3s;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
}

.button-link:hover {
    background-color: #cce4ff;
    color: #000;
}

.button-link:focus {
    outline: none;
    ring: 2px solid #FF2D20;
}

.dark .button-link {
    color: white;
}

.dark .button-link:hover {
    color: white;
    opacity: 0.8;
}

.dark .button-link:focus {
    ring: 2px solid white;
}
</style>

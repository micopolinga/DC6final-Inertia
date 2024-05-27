<script setup>
import { Link } from '@inertiajs/vue3'
import 'tailwindcss/tailwind.css';
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import Layout from '@/Layouts/Layout.vue';

const props = defineProps({
        player: Array
    })

    defineOptions({
        layout: Layout
    });

const showEdit = ref(false)

const delForm = useForm({
    id: props.player.id
})

const form = useForm({
    position: props.player.position,
    name: props.player.name,
    jerseyno: props.player.jerseyno,
    team: props.player.team,
})

const submit = () => {
    form.submit('put', '/players/' + props.player.id)
}

const delEmp = () => {
    const del = confirm("Are you sure you want to delete this player?")
    if(del)
        delForm.submit('delete', '/players/' + props.player.id)
}
</script>

<template>
    <div class="p-8">
        <h1 class="text-4xl">View Player</h1>

        <div class="border bordp p-4 rounded m-6 fs-5 view-container">
            <table v-if="!showEdit" class="tanle-striped flex">
                <tr class="flex flex-col border-end border-solid mr-2 p-2">
                    <th>Position: </th>
                    <th>Name: </th>
                    <th>Jersey #: </th>
                    <th>Team: </th>
                </tr>
                <tr class="flex flex-col">
                    <td>{{ player.position }}</td>
                    <td>{{ player.name }}</td>
                    <td>{{ player.jerseyno }}</td>
                    <td>{{ player.team }}</td>
                </tr>
            </table>

            <div v-if="showEdit">
                <form @submit.prevent="submit">
                    <div class="mb-3">
                        <label for="position">Position: </label>
                        <input type="text" id="position" class="w-full" v-model="form.position">
                    </div>
                    <div class="mb-3">
                        <label for="name">Name: </label>
                        <input type="text" id="name" class="w-full" v-model="form.name">
                    </div>
                    <div class="mb-3">
                        <label for="jerseyno">Jersey #: </label>
                        <input jerseyno="text" id="jerseyno" class="w-full" v-model="form.jerseyno">
                    </div>
                    <div class="mb-3">
                        <label for="team">Team: </label>
                        <input type="text" id="team" class="w-full" v-model="form.team">
                    </div>

                    <button type="submit" class="bg-blue-700 text-white py-2 px-3 rounded">Submit</button>

                </form>

            </div>

            <div class="mt-2 flex">
                <Link href="/players" class="btn-success btn ">Back</Link>
                <button class="btn btn-danger text-white rounded ms-2" @click="delEmp">Delete</button>
                <button class="btn btn-primary rounded ms-2"
                    @click="showEdit = !showEdit">{{ showEdit ? 'Cancel' : 'Edit' }} </button>
            </div>
        </div>
    </div>
</template>

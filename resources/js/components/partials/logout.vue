logout.vue =

<template>
    <button type="button" class="btn btn-light btn-block" @click="logoutUser">Logout</button>
</template>

<script>
    export default {
        methods: {
        logoutUser() {
        axios.post('/logout').then(response => {
        window.location.href = '/login';
        }).catch(error => {
        location.reload();
        });
        }
        }
    };
</script>
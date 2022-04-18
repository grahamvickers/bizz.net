logout.vue =

<template>
    <button type="button"  @click="logoutUser">LOGOUT</button>
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
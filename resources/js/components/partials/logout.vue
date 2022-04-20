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
<style lang="scss" scoped>
button{
    border: none;
    background: none;
    text-decoration: none;
    font-family: niveau-grotesk, sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #615CF2;
    font-size: 18px;
    line-height: 28px;
    // margin-left: 20px;
    padding: 5px 10px 5px 10px;
    border-radius: 5px;
    transition: .2s ease-in-out;
    &:hover{
        background: #615CF2;
        color: #F2F2F2;
        cursor: pointer;
    }
}
</style>
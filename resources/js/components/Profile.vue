<template>
    <div>
        <section id="contentCon">
            <h2>Edit Profile</h2>

            <div id="row">

                <div>
                    <password-form />
                </div>

                <div >
                    <avatar-form />
                </div>
            </div>
        </section>
       
    </div>
</template>

<script>
    import AvatarForm from './partials/profile/avatar-form.vue';
    import PasswordForm from './partials/profile/password-form.vue';

    export default {   
        components: {
            AvatarForm,
            PasswordForm
        }
    };
</script>

<style lang="scss" scoped>
h2{
    text-align: center;
}
#row{
    margin-top: 40px;
}
@media screen and (min-width: 760px) {
    #row{
        margin-top: 40px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        
    }
    .rowDiv{
        margin-bottom: 40px;
    }
}
</style>
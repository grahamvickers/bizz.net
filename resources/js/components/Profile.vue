<template>
    <div>
        <section id="contentCon">
            <h2>Account Management</h2>

            <div id="row">

                <div>
                    <change-password-form />
                </div>

                <div >
                    <profile-picture-form />
                </div>
            </div>
        </section>
       
    </div>
</template>

<script>
    import ProfilePictureForm from './partials/profile/profile-picture-form.vue';
    import ChangePasswordForm from './partials/profile/change-password-form.vue';

    export default {   
        components: {
            ProfilePictureForm,
            ChangePasswordForm
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
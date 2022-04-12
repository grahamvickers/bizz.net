<template>
    <div>
        <h1>Profile</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="mt-3">
                    <password-form />
                </div>
            </div>
            <div class="col-md-5">
                <avatar-form />
            </div>
        </div>
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
<template>
    <div id="pwordCon">
        <div>
            <h3>Change Password</h3>
        </div>
        <div>
            <form id="password-form">
                <div class="formItemCon">
                    <label for="password">Current Password *</label>
                    <input
                        :type="showPasswords ? 'text' : 'password'"
                        id="password"
                        name="password"
                        class="form-control"
                        v-model="currentPassword"
                    />
                </div>

                <div class="formItemCon">
                    <label for="new_password">New Password *</label>
                    <input
                        :type="showPasswords ? 'text' : 'password'"
                        id="new_password"
                        name="new_password"
                        class="form-control"
                        v-model="newPassword"
                    />
                </div>

                <div class="formItemCon">
                    <label for="new_password_confirm">Confirm New Password *</label>
                    <input
                        :type="showPasswords ? 'text' : 'password'"
                        id="new_password_confirm"
                        name="new_password_confirm"
                        class="form-control"
                        v-model="confirmPassword"
                    />
                </div>

                <button
                    type="button"
                    class="button"
                    @click="showPasswords = !showPasswords"
                >
                    <template v-if="showPasswords">
                        <span class="fa fa-eye"></span>
                            Hide
                    </template>
                    <template v-else>
                        <span class="fa fa-eye-slash"></span>
                        Show 
                    </template>
                </button>
                <div v-if="errors" class="alert alert-danger">
                    <p class="alert-heading h4">There were some issues updating your password.</p>
                    <p v-for="(error, index) in errors" class="mb-0" :key="`errors-${index}`">
                        {{ error[0] }}
                    </p>
                </div>


                <button type="button" class="button" @click="submit" :disabled="processing">
                    {{ processing ? 'Processing...' : 'Update' }}
                </button>
            </form>
        </div>
    </div>
</template>



<script>
    export default {
        data() {
            return {
                showPasswords: false, 
                currentPassword: null,
                newPassword: null,
                confirmPassword: null,
                errors: null,
                processing: false 
            };
        },

        computed: {
            user() {
                return this.$store.state.user;
            },
        },

        methods: {
            submit() {
                this.processing = true;
                this.errors = null;

                axios.patch(`/api/users/${this.user.id}`, {
                    'old_password': this.currentPassword,
                    'new_password': this.newPassword,
                    'new_password_confirmation': this.confirmPassword
                }).catch(error => {
                    this.errors = error.response.data.errors;
                }).then(() => {
                    this.currentPassword = null;
                    this.newPassword = null;
                    this.confirmPassword = null;
                    this.processing = false;
                });
            }
        }
    }
</script>

<style lang="scss">
#pwordCon{
    margin-bottom: 40px ;
}
</style>
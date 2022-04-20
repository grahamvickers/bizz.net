<template>
    <div class="card">

        <h3>Profile Picture</h3>

        <div>
            <!-- this will be displayed when the user has uploaded an profile picture -->
            <template v-if="hasProfilePicture">
                <div class="avatar" :style="{'background': `url(${user.avatar_uri})`}"></div>
                <button
                    type="button"
                    class="button"
                    @click="deleteProfilePicture"
                    :disabled="processing"    
                >
                    {{ processing ? 'Processing...' : 'Remove Photo'}}
                </button>
            </template>

            <!-- this form will be displayed if the user has no profile picture -->
            <template v-else>
                <form ref="avatarForm" enctype="multipart/form-data" id="mainFormCon">

                    <input type="hidden" name="upload_avatar" value="1" />

                    <div class="formItemCon">
                        <label for="avatar" id="chooseFile">Add Avatar</label>
                        <input type="file" name="avatar" id="avatar" />
                    </div>


                    <div v-if="errors" class="alert alert-danger">
                        <p class="alert-heading h4">There were some issues updating your information.</p>
                        <p v-for="(error, key) in errors" class="mb-0" :key="`errors-${key}`">{{ error[0] }}</p>
                    </div>

                    <button class="button" @click="submit" :disabled="processing">
                        {{ processing ? 'Processing...' : 'Upload' }}
                    </button>

                </form>
            </template>

        </div>
    </div>
</template>

<script>
    export default { 
        data() {
            return {
                processing: false,
                errors: null
            }
        } ,
        computed: {
            user() {
                return this.$store.state.user;
            },

            hasProfilePicture() {
                return this.user
                    ? this.user.has_avatar
                    : false;
            }
        },
        
        methods: {
            submit() {
                this.processing = true;
                this.errors = null;

                const formData= new FormData(this.$refs.avatarForm);
                formData.append('_method', 'PATCH');

                axios.post(`/api/users/${this.user.id}`, formData)
                    .then(response => {
                        this.$store.commit('user', response.data);
                    }).catch(error => {
                        this.errors = error.response.data.errors;
                    }).then(() => {
                        this.processing = false;
                    });
            },

            deleteProfilePicture() {
                this.processing = true;

                axios.patch(`/api/users/${this.user.id}`, {'remove_avatar': true})
                    .then(response => {
                        this.$store.commit('user', response.data);
                    }).catch(() => {})
                    .then(() => {
                        this.processing = false;
                    });
            }

        }
    };
</script>

<style lang="scss" scoped>
    .avatar {
        background-size:cover !important;
        background-position:center !important;
        height:200px;
        width:200px;
        border-radius: 5px;
        margin: 30px 0px;
        // margin:0 auto;
    }    
</style>
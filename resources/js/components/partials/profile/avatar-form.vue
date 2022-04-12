<template>
    <div class="card">
        <div class="card-header">
            Avatar
        </div>
        <div class="card-body">
            <template v-if="hasAvatar">
                <div 
                    class="avatar"
                    :style="{'background': `url(${user.avatar_uri})`}"
                >
                </div>
                <button
                    type="button"
                    class="btn btn-danger btn-block mt-3"
                    @click="removeAvatar"
                    :disabled="processing"    
                >
                    {{ processing ? 'Processing...' : 'Delete Avatar'}}
                </button>
            </template>
            <template v-else>
                <form ref="avatarForm" enctype="multipart/form-data"> 
                <input type="hidden" name="upload_avatar" value="1" />
                    <div class="form-group">
                        <label for="avatar">Avatar *</label>
                        <input type="file" class="form-control" name="avatar" id="avatar" />
                    </div>
                    <div v-if="errors" class="alert alert-danger">
                        <p class="alert-heading h4">
                            There were some issues updating your information.
                        </p>
                        <p v-for="(error, key) in errors" class="mb-0" :key="`errors-${key}`">
                            {{ error[0] }}
                        </p>
                    </div>
                    <button class="btn btn-primary btn-block" @click="submit" :disabled="processing">
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

            hasAvatar() {
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

            removeAvatar() {
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
        height:300px;
        width:100%;
        margin:0 auto;
    }    
</style>
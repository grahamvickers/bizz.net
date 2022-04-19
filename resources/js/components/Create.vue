<template>
    <div>
        <section id="contentCon">
            <h2>Create a new Listing</h2>

            <div>
                <form ref="listingForm" enctype="multipart/form-data">

                    <div class="formItemCon">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="formItemCon">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div>  

                    <div class="formItemCon">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div> 

                    <div class="formItemCon">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div>

                    <div class="formItemCon">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div> 

                    <div class="formItemCon">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div> 

                    <div v-if="errors" class="alert alert-danger">
                        <p>There were some issues creating your listing, please try again!</p>
                        <!-- <p v-for="(error, key) in errors" class="mb-0" :key="`errors-${key}`">{ error[0] }}</p> -->
                    </div>  
                    <button class="button" @click="submit" :disabled="processing">
                        {{ processing ? 'Processing...' : 'Create' }}
                    </button>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            processing: false,
            errors: null
        }
    },
    computed: {
        listing() {
            return this.$store.state.listing;
        }
    },
    methods: {
        submit() {
            this.processing = true;
            this.errors = null;

            const formData = new FormData(this.$refs.listingForm);
            formData.append('_method', 'PATCH');

            axios.post(`/api/listings`, formData)
                .then(response => {
                    this.$store.commit('user', response.data);
                }).catch(error => {
                    this.errors = error.response.data.errors;
                }).then(() => {
                    this.processing = false;
                });
        },
    }
}
</script>
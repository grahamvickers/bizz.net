<template>
    <div>
        <section id="contentCon">
            <h2>Create a new Listing</h2>

            <div id="mainFormCon">
                <form ref="listingForm" enctype="multipart/form-data">
                <div id="formFlex">
                    <div>
                        <div class="formItemCon">
                            <label for="name">Company Name</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="formItemCon">
                            <label for="address">Company Address</label>
                            <input type="text" name="address" id="address">
                        </div>  

                        <div class="formItemCon">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city">
                        </div> 

                        <div class="formItemCon">
                            <label for="province">Province/ State</label>
                            <input type="text" name="province" id="province">
                        </div> 

                        <div class="formItemCon">
                            <label for="country">Country</label>
                            <select name="country" id="country">
                                <option label="Choose...">Select</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>
                        </div> 
                    </div>

                    <div>
                        <div class="formItemCon">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price">
                        </div>

                        <div class="formItemCon">
                            <label for="profit">Net Profit %</label>
                            <input type="text" name="profit" id="profit">
                        </div> 

                        <div class="formItemCon">
                            <label for="income">Annual Income</label>
                            <input type="text" name="income" id="income">
                        </div> 

                        <div class="formItemCon">
                            <label for="img">Exterior Photo</label>
                            <input type="file" name="img" id="img">
                        </div> 

                        <div class="formItemCon">
                            <label for="content">About Description</label>
                            <textarea type="text" name="content" id="content" />
                        </div>
                    </div>
                </div>
                <div v-if="errors" class="alert alert-danger">
                    <p>There were some issues creating your listing, please try again!</p>
                    <!-- <p v-for="(error, key) in errors" class="mb-0" :key="`errors-${key}`">{ error[0] }}</p> -->
                </div>  
                <button class="button" @click="submit" :disabled="processing">
                    {{ processing ? 'Uploading...' : 'Upload Listing' }}
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
            name: null,
            address: null,
            city: null,
            province: null,
            country: null,
            price: null,
            profit: null,
            income: null,
            img: null,
            content: null,
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
                    console.log(response.status);
                    this.$store.commit('listing', response.data);
                    this.$router.push("/");
                }).catch(error => {
                    this.errors = error.response.data.errors;
                }).then(() => {
                    this.processing = false;
                });
        },
    }
}
</script>

<style lang="scss">
#formFlex{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 auto;
}

#contentCon{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 auto;
    text-align: center;
}

@media screen and (min-width: 780px) {
    #formFlex{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    margin: 0 auto;
}
}
</style>
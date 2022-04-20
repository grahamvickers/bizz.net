<template>
    <div>
        <section id="contentCon">
            <h2>Create a new Listing</h2>

            <div id="mainFormCon">
                <form ref="listingForm" enctype="multipart/form-data">
                <div id="formFlex">
                    <div>
                        <div class="formItemCon">
                            <label for="name">Company Name*</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="formItemCon">
                            <label for="address">Company Address*</label>
                            <input type="text" name="address" id="address">
                        </div>  

                        <div class="formItemCon">
                            <label for="city">City*</label>
                            <input type="text" name="city" id="city">
                        </div> 

                        <div class="formItemCon">
                            <label for="province">Province/ State*</label>
                            <select id="province" name="province">
                                <option value="">Select One...</option>
                                <optgroup label="Canadian Provinces">
                                    <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NF">Newfoundland</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="YT">Yukon Territory</option>
                                </optgroup>
                                <optgroup label="U.S. States/Territories">
                                    <option value="AK">Alaska</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="IA">Iowa</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MD">Maryland</option>
                                    <option value="ME">Maine</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MT">Montana</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NY">New York</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VA">Virginia</option>
                                    <option value="VT">Vermont</option>
                                    <option value="WA">Washington</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                
                            </select>
                        </div> 

                        <div class="formItemCon">
                            <label for="country">Country*</label>
                            <select name="country" id="country">
                                <option label="Select One...">Select One...</option>
                                <option value="canada">Canada</option>
                                <option value="united states of america">United States of America</option>
                            </select>
                        </div> 
                    </div>

                    <div>
                        <div class="formItemCon">
                            <label for="price">Price*</label>
                            <input type="text" name="price" id="price">
                        </div>

                        <div class="formItemCon">
                            <label for="profit">Net Profit %*</label>
                            <input type="text" name="profit" id="profit">
                        </div> 

                        <div class="formItemCon">
                            <label for="income">Annual Income*</label>
                            <input type="text" name="income" id="income">
                        </div> 

                        <div class="formItemCon">
                            <label for="img">Exterior Photo*</label>
                            <input type="file" name="img" id="img">
                        </div> 

                        <div class="formItemCon">
                            <label for="content">About Description*</label>
                            <textarea type="text" name="content" id="content" />
                        </div>
                    </div>

                    <div>
                        <div class="formItemCon">
                            <label for="one">2021 Revenue $*</label>
                            <input type="text" name="one" id="one">
                        </div>

                        <div class="formItemCon">
                            <label for="two">2020 Revenue $*</label>
                            <input type="text" name="two" id="two">
                        </div> 

                        <div class="formItemCon">
                            <label for="three">2019 Revenue $</label>
                            <input type="text" name="three" id="three">
                        </div> 

                        <div class="formItemCon">
                            <label for="four">2018 Revenue $</label>
                            <input type="text" name="four" id="four">
                        </div> 

                        <div class="formItemCon">
                            <label for="five">2017 Revenue $</label>
                            <input type="text" name="five" id="five">

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
            one: null,
            two: null,
            three: null,
            four: null,
            five: null,
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
                    this.$router.go();
                }).catch(error => {
                    this.errors = error.response.data.errors;
                }).then(() => {
                    this.processing = false;
                });
        },
    }
}
</script>

<style lang="scss" scoped>
form{
    margin: 0 auto !important;
}
#formFlex{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    margin: 0 auto !important;
}

#contentCon{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 0 auto;
    text-align: center;
}

@media screen and (min-width: 1080px) {
    #formFlex{
    display: flex;
    flex-direction: row;
    align-items: baseline;

    justify-content: space-around;
    margin: 0 auto;
}
}
</style>
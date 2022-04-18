<template>
    <div>
        <section>
            <h1 class="hidden">Settings</h1>
            <router-link to="/manage_listings" class="noLine">
                <div>
                    <img src="/images/manage.svg" alt="manage listings">
                    <h3>Manage Listings</h3>
                </div>
            </router-link>
            <router-link to="/profile" class="noLine">
                <div>
                    <img src="/images/profile.svg" alt="edit profile">
                    <h3>Edit Profile</h3>
                </div>
            </router-link>
        </section>
    </div>
</template>

<style lang="scss" scoped>
    section{
        padding: 60px 0px;
        margin: 0 auto;
        max-width: 900px;
        div{
            text-align: center;
            margin-bottom: 40px;
            h3{
                margin-top: 20px;
                text-decoration: none !important;
                &:visited{
                    text-decoration: none !important;
                }
                &:link{
                    text-decoration: none !important;
                }
                &:active{
                    text-decoration: none !important;
                }
            }
        }
    }
    .noLine{
        text-decoration: none !important;
        &:visited{
            text-decoration: none !important;
        }
        &:link{
            text-decoration: none !important;
        }
        &:active{
            text-decoration: none !important;
        }
    }

    @media screen and (min-width: 580px) {
        section{
            padding: 80px 0px;
            display: flex;
            justify-content: space-around;
            margin-bottom: 60px;
        }
    }
</style>
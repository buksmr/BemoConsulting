<template>
    <section class="hero is-fullheight is-default is-bold">
        <layout-finpay></layout-finpay>
        <section style="padding-bottom:90px">
            <div id="login" class="has-background-white">
                <div class="login-card has-background-white">
                    <div
                        class="card-title has-background-grey-darker has-text-white"
                    >
                        <h1 class="has-text-centered is-size-6 is-uppercase">
                            Please Sign In
                        </h1>
                    </div>
                    <div class="content">
                        <form v-on:submit.prevent="Login" novalidate>
                            <input
                                id="email"
                                v-model="user.email"
                                type="email"
                                name="email"
                                title="email"
                                placeholder="Email"
                                required
                                autofocus
                            />
                            <input
                                id="password"
                                v-model="user.password"
                                type="password"
                                name="password"
                                title="password"
                                placeholder="Password"
                                required
                            />

                            <div class="level options">
                                <div
                                    class="checkbox level-left is-size-7 has-text-grey-light"
                                >
                                    <input
                                        type="checkbox"
                                        id="checkbox"
                                        class="regular-checkbox"
                                    />
                                    <label for="checkbox"></label>
                                    <span class>Remember me</span>
                                </div>

                                <a
                                    class="btn btn-link level-right is-size-7 has-text-black-bis"
                                    href="#"
                                    >Forgot Password?</a
                                >
                            </div>
                            <span
                                v-if="isError != null && isError != ''"
                            ></span>
                            <!-- <router-link to="/"> -->
                            <div class="has-text-centered">
                                <button
                                    class="button has-background-grey-darker has-text-white"
                                >
                                    Login
                                </button>
                            </div>
                            <div
                                style="text-align: center; 
margin-top: 10px;"
                            ></div>
                            <!-- </router-link> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <layout-footer></layout-footer>
    </section>
</template>

<script>
import { mapState, mapActions, mapGetters } from "vuex";
import LayoutFinpay from "./layouts/finpay.vue";
import LayoutFooter from "./layouts/Footer.vue";
export default {
    components: {
        LayoutFinpay,
        LayoutFooter
    },
    name: "Login",

    data() {
        return {
            user: {
                email: "",
                password: ""
            },
            isError: "",
            submitted: false,
            error_msg_invalid: "",
            url: "/login"
        };
    },
    computed: {
        ...mapState({
            loading: state => state.isLoading,
            userState: state => state.user
        })
    },
    methods: {
        ...mapActions({
            setLoading: "setLoading"
        }),
        Login(e) {
            this.submitted = true;
            this.setLoading(true);
            // this.$validator.validate().then(valid => {
            //   if (valid) {
            this.$store
                .dispatch("login", this.user)
                .then(response => {
                    if (parseInt(response.data.status) == 0) {
                        this.isError = response.data.message;
                        this.$buefy.toast.open({
                            duration: 5000,
                            message: response.data.message,
                            position: "is-top-right",
                            type: "is-danger"
                        });
                    } else {
                        this.$buefy.toast.open({
                            duration: 5000,
                            message: response.data.message,
                            position: "is-top-right",
                            type: "is-success"
                        });

                        window.location.href = "/bemconsulting/home";
                    }
                })
                .catch(error => {
                    this.isError = error;
                })
                .finally(() => {
                    this.setLoading(false);
                });
            //   }
            // });
        }
    }
};
</script>

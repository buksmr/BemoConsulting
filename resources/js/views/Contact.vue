<template>
    <section>
        <head>
            <!-- 
 <title>test</title>
 <meta name="description" content="Bemo" /> -->
        </head>
        <section class="hero contactus is-fullheight">
            <nav class="is-two-thirds">
                <layout-header></layout-header>
            </nav>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="slider-content animated zoomIn pb-6">
                        <div>
                            <p class="title is-1 main-text"></p>
                        </div>
                    </div>
                    <span class="scroll-down animated zoomIn">
                        <svg
                            width="30px"
                            height="100%"
                            viewBox="0 0 247 390"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="
                fill-rule: evenodd;
                clip-rule: evenodd;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 1.5;
              "
                        >
                            <path
                                id="wheel"
                                d="M123.359,79.775l0,72.843"
                                style="fill: none; stroke: #fff; stroke-width: 20px;"
                            />
                            <path
                                id="mouse"
                                d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                                style="fill: none; stroke: #fff; stroke-width: 20px;"
                            />
                        </svg>
                    </span>
                </div>
            </div>
        </section>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-8 is-variable ">
                        <div class="column is-two-thirds has-text-left">
                            <h1 class="title is-1">Contact Us</h1>
                            <p class="is-size-4">
                                Toll Free: 1-855-900-BeMo (2366) Email:
                                info@bemoacademicconsulting.com
                            </p>
                            <br />

                            <p class="is-size-4">
                                <b>Note: </b>If you are having difficulties with
                                our contact us form above, send us an email to
                                info@bemoacademicconsulting.com (copy & paste
                                the email address)
                            </p>
                            <div class="is-justify-content-left">
                                <a
                                    href="https://www.facebook.com/bemoacademicconsulting"
                                    class="is-size-4 social-link"
                                >
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a
                                    href="https://twitter.com/BeMo_AC"
                                    class="is-size-4 social-link"
                                >
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>

                        <div class="column is-one-third has-text-left">
                            <form v-on:submit.prevent="Submit" novalidate>
                                <div class="field">
                                    <label class="label"
                                        >Name<span class="has-text-danger"
                                            >*</span
                                        ></label
                                    >
                                    <div class="control">
                                        <input
                                            v-model="contact.name"
                                            required
                                            class="input is-medium"
                                            type="text"
                                        />
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label"
                                        >Email<span class="has-text-danger"
                                            >*</span
                                        ></label
                                    >
                                    <div class="control">
                                        <input
                                            v-model="contact.email"
                                            required
                                            class="input is-medium"
                                            type="email"
                                        />
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label"
                                        >Message
                                        <span class="has-text-danger"
                                            >*</span
                                        ></label
                                    >
                                    <div class="control">
                                        <textarea
                                            v-model="contact.message"
                                            required
                                            class="textarea is-medium"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="control">
                                    <button
                                        class="button is-dark is-pulled-right is-small"
                                    >
                                        Submit
                                    </button>
                                    <button
                                        type="button"
                                        class="button is-small has-background-light is-pulled-right clearbuton"
                                        @click="clear"
                                    >
                                        Clear
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</template>

<script>
import { mapState, mapActions, mapGetters } from "vuex";
import LayoutHeader from "./layouts/Header.vue";
import LayoutBanner from "./layouts/Banner.vue";
import LayoutFooter from "./layouts/Footer.vue";
export default {
    components: {
        LayoutHeader,
        LayoutFooter,
        LayoutBanner
    },

    data() {
        return {
            search: "",
            submitted: false,
            contact: {
                name: "",
                email: "",
                message: ""
            },

            isPaginated: true,
            isPaginationSimple: false,
            defaultSortDirection: "asc",
            currentPage: 1,
            perPage: 5,
            hasMobileCards: false
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

        Submit(e) {
            let context = this;
            context.submitted = true;
            context.setLoading(true);
            context.$validator.validate().then(valid => {
                if (valid) {
                    let url = "/Contact";
                    // console.log(url);
                    let config = {
                        headers: {
                            Authorization:
                                "Bearer " + sessionStorage.getItem("token"),
                            //  'content-type': 'multipart/form-data',
                            "content-type": "application/json"
                        }
                    };
                    let formdata = new FormData();
                    formdata.append("name", context.contact.name);
                    formdata.append("email", context.contact.email);
                    formdata.append("message", context.contact.message);

                    axios
                        .post(url, formdata, config)
                        .then(response => {
                            // console.log(response.data.status)
                            if (response.data.status == 1) {
                                context.$buefy.toast.open({
                                    duration: 4000,
                                    message: response.data.message,
                                    title:
                                        "client details submitted successfully",
                                    type: "is-success",
                                    position: "is-top-right"
                                });

                                context.$router.push("/Home");
                            } else {
                                context.$buefy.toast.open({
                                    duration: 4000,
                                    message: response.data.message,
                                    title: "submitted failed",
                                    position: "is-top-right",
                                    type: "is-danger"
                                });
                                // context.$router.push('/clienttable');
                            }
                        })
                        .catch(error => {
                            console.log(error);
                        })
                        .finally(() => {
                            context.setLoading(false);
                        });
                } else {
                    context.setLoading(false);
                }
            });
        },

        clear() {
            this.contact = {
                name: "",
                email: "",
                message: ""
            };
        }
    }
};
</script>

<style lang="css">
.contactus {
    background-image: url("/assets/images/contact.jpg");
    background-size: cover;
}
</style>

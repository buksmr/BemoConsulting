<template>
    <body>
        <section class="hero main_hero is-fullheight">
            <nav class="is-two-thirds">
                <layout-header></layout-header>
            </nav>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="slider-content animated zoomIn pb-6">
                        <div>
                            <p class="title is-1 main-text">
                                CDA Interview Guide
                            </p>
                            <h4 class="main_title title is-5">
                                Ultimate Guide to CDA Structured Interview: Tips
                                & Proven Strategies to Help You Prepare & Ace
                                Your CDA Interview
                            </h4>
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
    </body>
</template>

<script>
import LayoutHeader from "./Header.vue";
export default {
    components: {
        LayoutHeader
    },
    data() {
        return {
            backgroundcolor: "url(assets/images/bemo-logo2.png)",
            width: "1200px",
            height: "50px"
        };
    }
};
</script>
<style lang="css">
.main_hero {
    background-image: url("/assets/images/background.jpg");
    background-size: cover;
}
</style>

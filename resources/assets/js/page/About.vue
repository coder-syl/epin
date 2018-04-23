<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="develop">
            <Development>></Development>
        </div>
        <div class="comIntro">
            <CompanyIntro></CompanyIntro>
        </div>
    </div>
</template>
<!-- 关于我们 -->
<script>
    import Development from "./../components/about/Development.vue"
    import CompanyIntro from "./../components/about/CompanyIntro.vue"
    import Nav from "../components/share/Nav.vue"
    export default {
        components: {
            Nav,
            Development,
            CompanyIntro
        },

        data() {
            return {}
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    @import "../static/css/share/common.css";
    .comIntro {
        padding-top: 100px;
    }
</style>

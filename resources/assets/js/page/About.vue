<template>
    <div>
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
    import Development from "./../components/Development.vue"
    import CompanyIntro from "./../components/CompanyIntro.vue"

    export default {
        components: {
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
    .develop {

    }

    .comIntro {
        padding-top: 100px;
    }
</style>

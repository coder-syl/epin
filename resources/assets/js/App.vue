<!---->
<template>
    <el-container >
        <!--<el-header>-->
            <!--<Nav></Nav>-->
        <!--</el-header>-->

        <!--<el-main>-->
            <router-view></router-view>
        <!--</el-main>-->

        <!--<el-footer>-->
            <!--<div class="Footer">-->
                <!--<Footer></Footer>-->
            <!--</div>-->
        <!--</el-footer>-->

        </el-container>
</template>

<script>
    import Nav from "./components/share/Nav.vue"
    import Footer from "./components/share/Footer.vue"


    export default {
        components: {
            Nav,
            Footer
        },
        name: "App",
    }
</script>

<style>

    .el-container {
        height:100%;
        width:100%;
        /*margin: 0 auto;*/
    }

    /*.el-header {*/
        /*margin: 20px 0px 10px 0px;*/

    /*}*/

    /*.el-main {*/
        /*width:90%;*/
        /*margin:auto;*/
    /*}*/

    /*.el-footer {*/
        /*margin-top: 100px;*/
    /*}*/
</style>

<template>
    <!--<div class="container">-->
    <el-container>
        <el-header>
            <Nav></Nav>
        </el-header>

        <el-main>
            <router-view></router-view>
        </el-main>

        <el-footer>
            <div class="Footer">
                <Footer></Footer>
            </div>
        </el-footer>

    </el-container>
    <!--</div>-->
</template>

<script>
    import Nav from "./components/Nav.vue"
    import Footer from "./components/Footer.vue"

    export default {
        components: {
            Nav,
            Footer
        },
        name: "App",
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

    .el-container {
        width: 80%;
        margin: 0 auto;
    }

    .el-header {
        margin: 20px 0px 20px 0px;

    }

    .el-main {

    }

    .el-footer {
        margin-top: 100px;
    }


</style>

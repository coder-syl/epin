<template>
    <div>
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
    </div>
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
<style scoped>
    .el-header {
        padding: 15px 0px 80px 0px;
        /*    background-color: #B3C0D1;
        */
        color: #333;

    }

    .el-main {
        /*    background-color: #E9EEF3;
        */
        color: #333;
        text-align: center;
        width: 100%;
        height: 100%;
    }

    .el-container {
        margin-bottom: 40px;
    }

    .el-footer {
        padding: 50px 0px 0px 0px;
        /*  background-color: #B3C0D1;
        */
        color: #333;
    }

    .Footer {
        padding-left: 150px;
        padding-right: 150px;
    }
</style>

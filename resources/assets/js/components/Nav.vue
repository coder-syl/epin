<template>
    <div class="navclass">
        <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal">
            <div class="logo"><img src="./../img/logo.png" alt="logo"></div>
            <el-menu-item index="1">
                <router-link to="/">主页</router-link>
            </el-menu-item>

            <el-menu-item index="2">
                <router-link to="/JobOnline">在线招聘</router-link>
            </el-menu-item>

            <el-menu-item index="3">
                <router-link to="/JobAnalyse">行业分析</router-link>
            </el-menu-item>

            <el-menu-item index="4">
                <router-link to="/JobRecom">岗位推荐</router-link>
            </el-menu-item>

            <el-menu-item index="5">
                <router-link to="/JobTrain">在线培训</router-link>
            </el-menu-item>
            
            <el-menu-item index="6">
                <router-link to="/JobSkill">求职技巧</router-link>
            </el-menu-item>

            <el-menu-item index="7">
                <router-link to="/about">关于我们</router-link>
            </el-menu-item>
        </el-menu>
    </div>
</template>
<script>
    export default {
        name: "Nav",
        data() {
            return {
                activeIndex: '1',
            };
        },
        methods: {}
    }
</script>
<style scoped>
    @keyframes rotating {
        from {
            transform: rotate(0)
        }
        to {
            transform: rotate(360deg)
        }
    }

    a {
        text-decoration: none;
    }

    .logo {
        padding-right: 30px;
        float: left;
    }

    img {
        width: 56px;
        height: 56px;
        animation: rotating 1.2s linear infinite
    }

    .navclass {
        padding-left: 150px;
        padding-right: 150px;
    }
</style>

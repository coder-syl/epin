<template>
    <div class="navclass">
        <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal">
            <div class="logo"><img src="../../static/imgs/logo.jpg" alt="logo"></div>
            <el-menu-item index="1">
                <router-link to="/">首页</router-link>
            </el-menu-item>

            <!--<el-menu-item index="2">-->
            <!--<router-link to="/JobOnline">在线招聘</router-link>-->
            <!--</el-menu-item>-->

            <el-menu-item index="2">
                <router-link to="/JobAnalyse">行业分析</router-link>
            </el-menu-item>

            <!--<el-menu-item index="3" v-show="showRecom">-->
                <!--<router-link to="/JobRecom">岗位推荐</router-link>-->
            <!--</el-menu-item>-->

            <el-menu-item index="3">
                <router-link to="/JobTrain">在线培训</router-link>
            </el-menu-item>

            <!--<el-menu-item index="6">-->
            <!--<router-link to="/JobSkill">求职技巧</router-link>-->
            <!--</el-menu-item>-->

            <el-menu-item index="4">
                <router-link to="/about">关于我们</router-link>
            </el-menu-item>

            <el-menu-item index="5" style="float:right;" v-show="showlogin">
                <el-dropdown>
                      <span class="el-dropdown-link">
                        登录<i class="el-icon-arrow-down el-icon--right"></i>
                      </span>
                    <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>
                            <router-link to="/personlogin">个人用户</router-link>
                        </el-dropdown-item>
                        <el-dropdown-item>
                            <router-link to="/companylogin">企业用户</router-link>
                        </el-dropdown-item>
                    </el-dropdown-menu>
                </el-dropdown>
            </el-menu-item>
            <el-menu-item index="6" style="float:right;" v-show="showinfo">
                <el-dropdown>
                      <span class="el-dropdown-link">
                        {{username}}<i class="el-icon-arrow-down el-icon--right"></i>
                      </span>
                    <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>
                            <router-link to="/addpersonalinfo" v-if="usertype=='personal'">个人中心</router-link>
                            <router-link to="/companyinfo" v-else>企业信息</router-link>
                        </el-dropdown-item>
                        <el-dropdown-item>
                            <p @click="loginOut">登出</p>
                        </el-dropdown-item>
                    </el-dropdown-menu>
                </el-dropdown>
            </el-menu-item>

        </el-menu>
    </div>
</template>
<script>
    import {getCookie, delCookie} from "../../static/js/cookie.js"

    export default {
        name: "Nav",
        data() {
            return {
                activeIndex: '1',
                username: '',
                showlogin: true,
                showinfo: false,
                showRecom: false,
                usertype: '',
            };
        },
        mounted() {
            this.username = getCookie('username');
            this.usertype = getCookie('usertype');

            if (this.username !== '') {
                if (this.usertype == 'personal') {
                    this.showlogin = false;
                    this.showinfo = true;
                    this.showRecom = true;
                }
            }

        },

        methods: {
            loginOut() {
                delCookie('username', 'usertype');
                // setTimeout(function () {
                this.$router.push({name: 'Home'});
                // }.bind(this), 1000);

            }
        }
    }
</script>
<style scoped>
    .navclass {
        padding-bottom: 20px;
    }

    /*@keyframes rotating {*/
        /*from {*/
            /*transform: rotate(0)*/
        /*}*/
        /*to {*/
            /*transform: rotate(360deg)*/
        /*}*/
    /*}*/

    a {
        text-decoration: none;
    }

    .logo {
        width:10%;
        height:100%;
        padding-top:10px;
        padding-right: 30px;
        float: left;
    }

    img {
        width: 100%;
        height: 100%;
        /*animation: rotating 1.2s linear infinite*/
    }
</style>

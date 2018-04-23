<template>
    <div class="page-width">
        <!--<course-carousel></course-carousel>-->
        <!--<course-tabs></course-tabs>-->
        <Nav></Nav>
        <div>
            <div class="right">
                <CourseClassifyMenu></CourseClassifyMenu>
            </div>
            <div class="rolling_grap">
                <CourseCarousel></CourseCarousel>
            </div>
            <ul class="job_tabs">
                <el-tabs v-model="activeName" type="card" @tab-click="handleClick">
                    <el-tab-pane label="免费好课" name="first">　
                        <div class="card" v-for="i in 5">
                            <router-link to="VideoPlay">
                                <div class="imgcard">
                                    <img src="../../static/imgs/course/c4.jpg" alt="">
                                </div>
                                <div class="des">
                                        <div class="info">
                                            <h3> syl</h3>
                                            <p>通过Java认识并且创造XML文件，如何应用 Java“解析 XML</p>
                                        </div>
                                </div>
                            </router-link>
                        </div>
                    </el-tab-pane>
                </el-tabs>
            </ul>
            <ul class="job_tabs">
                <el-tabs v-model="activeName" type="card" @tab-click="handleClick">
                    <el-tab-pane label="畅销好课" name="first">
                        <div class="card" v-for="i in 5">
                            <div class="img-card">
                                <img src="../../static/imgs/course/c3.jpg" alt="">
                            </div>
                            <div class="des">
                                <div class="info">
                                    <h3> syl</h3>
                                    <p>注解Java中的常用技能，通过实战演示注解在实际项目中的应用</p>
                                </div>
                            </div>
                        </div>
                    </el-tab-pane>
                </el-tabs>
            </ul>
            <!--<ul class="job_tabs">-->
                <!--<el-tabs v-model="activeName" type="card" @tab-click="handleClick">-->
                    <!--<el-tab-pane label="站外好课" name="first">-->

                    <!--</el-tab-pane>-->
                <!--</el-tabs>-->
            <!--</ul>-->
        </div>
    </div>
</template>

<script>
    import CourseCarousel from "../../components/jobtrain/CourseCarousel"
    // import CourseTabs from './../components/CourseTabs'
    import CourseClassifyMenu from '../../components/jobtrain/CourseClassifyMenu'
    import Nav from "../../components/share/Nav"

    export default {
        name: "online-train",
        components: {
            Nav,
            CourseCarousel,
            // CourseTabs,
            CourseClassifyMenu
        },
        data() {
            return {
                activeName: 'first',
            }
        }
    }
</script>

<style scoped>
    @import "../../static/css/share/common.css";

    .jobtrain {

    }

    .rolling_grap {
        width: 75%;
        height: 330px;
        overflow: hidden;
    }

    .job_tabs {
        margin-bottom: 14px;
        padding: 0;
        list-style: none;
        display: block;
    }
    .card{
        height:180px;
        width:19%;
        float:left;
        margin-left:10px;
        text-align:center;
        display: block;
        position: relative;
    }
    .card .img-card{
        height:100%;
        width:100%;
    }
    .card img{
        height:180px;
        width:100%;
        border-radius:5%;
    }
    .card .des{
        display: none;
        position: absolute;
        top: 0px;
        width: 100%;
        height: 180px;
        background-color:#fff;
    }
    .info{

        text-align: center;
        color:#fff;
    }
    .card:hover  .des{
        display: block;
        border-radius:5%;
        background-color:rgba(0,0,0,0.5);
    }
</style>
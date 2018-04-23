<template>
    <div class="page-width">
        <Nav></Nav>
        <PositionSearch></PositionSearch>
        <div class="content_body">
            <div class="clearfix">
                　<div>
                    <JobClassifyMenu></JobClassifyMenu>
                    <div class="rolling_grap">
                        <JobCarousel></JobCarousel>
                    </div>
                 </div>
                <br>
                <ul class="job_tabs">
                    <el-tabs v-model="activeName" @tab-click="handleClick">
                        <el-tab-pane label="推荐岗位" name="first"><HotPosition></HotPosition></el-tab-pane>
                        <el-tab-pane label="热门岗位" name="second"><HotPosition></HotPosition></el-tab-pane>
                        <el-tab-pane label="热门公司" name="thrid"><hot-company></hot-company></el-tab-pane>
                    </el-tabs>
                    <!--<li class="hot_tab">岗位推荐</li>-->
                    <!--&lt;!&ndash; <li class="new_tab">最新职位</li> &ndash;&gt;-->
                </ul>
                <!--<ul class="hot_company">-->
                    <!--<li class="hot_company_1">热门公司</li>-->
                <!--</ul>-->

            </div>
        </div>
    </div>
</template>

<script>
    import Nav from "../../components/share/Nav.vue"
    import PositionSearch from "../../components/jobonline/PositionSearch.vue"
    import JobClassifyMenu from "../../components/jobonline/JobClassifyMenu.vue"
    import HotCompany from "../../components/jobonline/HotCompany.vue"
    import HotPosition from "../../components/jobonline/HotPosition.vue"
    import JobCarousel from "../../components/jobonline/JobCarousel.vue"

    export default {
        name: "online-job",
        components: {
            Nav,
            JobClassifyMenu,
            HotPosition,
            HotCompany,
            JobCarousel,
            PositionSearch
        },
        data() {
            return {
                inputData: '',
                jobs: [],
                activeName: 'first'
            }
        },
        methods: {
            formatter(row, column) {
                return row.address;
            }
        },
        mounted() {
            // var app = this;
            //
            // axios.get('api/onlineJob').then(function (response) {
            //     alert("success load position");
            //     console.log(response.data);
            //     app.jobs = response.data;
            // }).catch(function (response) {
            //     console.log(response);
            //     alert("Could not load position");
            // });
        }
    }
</script>

<style scoped>
    @import "../../static/css/share/common.css";




    /*.joblist {*/
    /*padding-top: 20px;*/
    /*margin: 0 auto;*/
    /*}*/
    .rolling_grap {
        width:75%;
        /*position: relative;*/
        /*margin-left: 360px;*/
        /*margin-top: 20px;*/
        height: 366px;
        overflow: hidden;
        /*background-color: #F2F5F4;*/
    }

    .job_tabs {
        margin-top: 16px;
        margin-bottom: 14px;
        font-size: 0;
        border-bottom: 1px solid #E8E8E8;
        padding: 0;
        list-style: none;
        display: block;

    }

    .hot_tab {
        border-bottom: 2px solid #333;
        background: #fff;
        color: #333;
        margin-left: -307px;
    }

    .job_tabs li {
        cursor: pointer;
        display: inline-block;
        padding: 14px 0;
        margin-right: 58px;
        font-size: 15px;
        text-align: left;
    }

    .hot_company {
        display: block;
        margin-top: 10px;
        margin-bottom: 14px;
        font-size: 0;
        border-bottom: 1px solid #E8E8E8;
        padding: 0;
        list-style: none;
    }

    .hot_company .hot_company_1 {
        border-bottom: 2px solid #333;
        background: #fff;
        color: #333;
        display: inline-block;
        padding: 14px 0;
        margin-right: 58px;
        font-size: 15px;
    }


</style>
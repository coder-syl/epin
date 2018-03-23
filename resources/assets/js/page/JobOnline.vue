<template>
    <div>
        <div class="jobAnalyse">
            <div class="search">
                <el-input
                        size="medium"
                        placeholder="请输入内容"
                        v-model="inputData">
                </el-input>
            </div>

            <div style="float: left">
                <el-button type="primary" icon="el-icon-search">搜索</el-button>
            </div>

            <p>Message is: {{ inputData }}</p>
            <p v-if="inputData in  jobs">输入有误</p>
        </div>
        <!--<div class="joblist">-->
        <!--<el-table-->
        <!--:data="jobs"-->
        <!--style="width: 100%"-->
        <!--border="true"-->
        <!--:default-sort="{prop: 'id', order: 'descending'}"-->
        <!--&gt;-->
        <!--<el-table-column-->
        <!--prop="id"-->
        <!--label="编号"-->
        <!--sortable-->
        <!--width="80">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="company"-->
        <!--label="公司"-->
        <!--sortable-->
        <!--width="180">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="positionName"-->
        <!--label="岗位"-->
        <!--width="180">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="adr"-->
        <!--label="地址"-->
        <!--width="80">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="edu"-->
        <!--label="学历"-->
        <!--width="80">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="exp"-->
        <!--label="经验/年"-->
        <!--width="80">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="lowmoney"-->
        <!--label="最低薪资"-->
        <!--width="80">-->
        <!--</el-table-column>-->
        <!--<el-table-column-->
        <!--prop="curmon"-->
        <!--label="发布时间/月份"-->
        <!--width="150">-->
        <!--</el-table-column>-->
        <!--<el-table-column label="操作">-->
        <!--<template slot-scope="scope">-->
        <!--<el-button-->
        <!--size="mini"-->
        <!--@click="handleEdit(scope.$index, scope.row)">查看详情-->
        <!--</el-button>-->
        <!--</template>-->
        <!--</el-table-column>-->
        <!--</el-table>-->
        <!--</div>-->
        <div class="content_body">
            <div class="clearfix">
                <JobClassifyMenu></JobClassifyMenu>
                <div class="rolling_grap">
                    <ul class="bg_images">
                        <li class="bg_images1">
                            <a href="">
                                <img src="./../static/joblistcarimg.png"
                                     width="840"
                                     height="366" alt="">
                            </a>
                        </li>
                        <li class="bg_images2">
                            <a href="">
                                <img src="./../static/joblistcarimg.png"
                                     width="840"
                                     height="366" alt="">
                            </a>
                        </li>
                        <li class="bg_images1">
                            <a href="">
                                <img src="./../static/joblistcarimg.png"
                                     width="840"
                                     height="366" alt="">
                            </a>
                        </li>
                        <li class="bg_images1">
                            <a href="">
                                <img src="./../static/joblistcarimg.png"
                                     width="840"
                                     height="366" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="job_tabs">
                    <li class="hot_tab">热门职位</li>
                    <li class="new_tab">最新职位</li>
                </ul>
                <JobOnlineList></JobOnlineList>
                <ul class="hot_company">
                    <li class="hot_company_1">热门公司</li>
                </ul>
                <div class="hotCompany_list">
                    <ul class="hotCompany_list_1">
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                        <li class="hotCompany_listItems">
                            <div class="hotCompany_listItems_1">
                                <p>
                                    <a href="">
                                        <img src="https://static.lagou.com/thumbnail_160x160/image1/M00/00/08/CgYXBlTUWA-Ado56AAB8Y3fIbXg365.png"
                                             width="80" height="80" alt="">
                                    </a>
                                </p>
                                <p class="hotcompanyName_1">
                                    <a href="">芝麻科技</a>
                                </p>
                                <p class="hotcompanyName_2">
                                    <span>O2O,数据服务</span>
                                    <span>A轮</span>
                                </p>
                                <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                            </div>
                            <div class="hotCompany_listItems_2">
                                <a href="" class="hotCompany_listItems_2_1">
                                    <p class="green">
                                        <span>20</span>
                                    </p>
                                    <p class="gray">面试评价</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_2">
                                    <p class="green">
                                        <span>5</span>
                                    </p>
                                    <p class="gray">在招职位</p>
                                </a>
                                <a href="" class="hotCompany_listItems_2_3">
                                    <p class="green">
                                        <span>100%</span>
                                    </p>
                                    <p class="gray">简历处理率</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <p style="text-align:center;"><input type="submit" class="list_more_button" value="查看更多"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JobClassifyMenu from "./../components/JobClassifyMenu.vue"
    // import JonOnlineCarousel from "./../components/JobOnlineCarousel.vue"
    import JobOnlineList from "./../components/JobOnlineList.vue"

    export default {
        name: "online-job",
        components: {
            JobClassifyMenu,
            // JobOnlineCarousel,
            JobOnlineList,
        },
        data() {
            return {
                inputData: '',
                jobs: [],
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
    a {
        text-decoration: none;
    }

    .jobAnalyse {
        height: 80px;
    }

    .search {
        float: left;
        width: 80%;
        margin: 0 auto;
    }

    /*.joblist {*/
    /*padding-top: 20px;*/
    /*margin: 0 auto;*/
    /*}*/
    .rolling_grap {
        position: relative;
        margin-left: 360px;
        margin-top: 20px;
        height: 366px;
        overflow: hidden;
        /* background-color: #F2F5F4; */
    }

    .rolling_grap .bg_images {
        left: -840px;
        width: 3360px;
        zoom: 1;
        position: absolute;
        margin: 20px 0px 0px 0px;
        padding: 0;
        list-style: none;
        display: block;
    }

    .rolling_grap .bg_images li {
        float: left;
        width: 840px;
        height: 346px;
        display: list-item;
        text-align: -webkit-match-parent;
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
        font-size: 16px;
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
        font-size: 16px;
    }

    .hotCompany_list_1 {
        width: 1216px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .hotCompany_list_1 li {
        box-sizing: border-box;
        float: left;
        width: 288px;
        height: 270px;
        margin-top: 16px;
        margin-right: 16px;
        border: 1px solid #EEE;
        display: list-item;

    }

    .hotCompany_list_1 li .hotCompany_listItems_1 {
        margin: 0 13px;
        padding: 20px 0 14px;
        text-align: center;
        border-bottom: 1px dashed #E0E0E0;
        /* background: yellow; */
    }

    .hotCompany_list_1 li .hotCompany_listItems_1 p {
        line-height: 22px;
    }

    p {
        display: block;
        margin: 0;
    }

    .hotcompanyName_1 {
        height: 22px;
        margin-top: 13px;
        font-size: 16px;
        color: #333;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        word-wrap: normal;
    }

    .hotcompanyName_2 {
        height: 22px;
        margin-top: 3px;
        color: #999;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        word-wrap: normal;
    }

    .hotcompanyName_2 span + span:before {
        content: '/';
    }

    .hotcompanyName_3 {
        margin-top: 5px;
        color: #555;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        word-wrap: normal;
    }

    .hotCompany_listItems_2:before {
        content: '';
        display: table;
    }

    .hotCompany_listItems_2_1 {
        width: 90px;
        position: relative;
        display: block;
        margin-top: 17px;
        text-align: center;
        float: left;
    }

    .hotCompany_listItems_2 p {
        line-height: 1;
    }

    .hotCompany_listItems_2 .green {
        color: #00b38a;
    }

    .hotCompany_listItems_2 .gray {
        margin-top: 4px;
        font-size: 12px;
        color: #999;
    }

    .hotCompany_listItems_2_2 {
        width: 90px;
        position: relative;
        display: block;
        margin-top: 17px;
        text-align: center;
        float: left;
        /* border-left: 1px solid #999; */
    }

    .hotCompany_listItems_2_3 {
        width: 104px;
        border-right: 0;
        position: relative;
        display: block;
        margin-top: 17px;
        text-align: center;
        float: left;
    }

    .hotCompany_listItems_2_1:after, .hotCompany_listItems_2_2:after {
        position: absolute;
        top: 0;
        right: 0;
        content: "";
        height: 30px;
        width: 1px;
        background: #EDEDED;
    }

</style>
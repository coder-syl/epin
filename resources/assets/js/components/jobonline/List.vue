<template>
    <div>
        <div class="jobs_list_div">
            <ul class="job_list_ul">
                <li class="job_list_li"
                    v-for="positionlist in positionlists.slice((curpage-1)*pagesize,(curpage)*pagesize)">
                    <div class="job_list_top">
                        <div class="job_list_l">
                            <div class="jobs_t">
                                <a class="job_link" target="_blank">
                                    <router-link to="/jobinfo"><h3>{{positionlist.positionName}}</h3></router-link>
                                    <span class="address">[
                                                <em>{{positionlist.adr}}</em>]
                                            </span>
                                </a>
                                <span class="times">{{positionlist.year}}/{{positionlist.curmon}}</span>
                                <div class="chat_me"></div>
                            </div>
                            <div class="jobs_b">
                                <div class="job_b_money">
                                    <span class="money">{{positionlist.lowmoney}}-{{positionlist.highmoney}}</span>
                                    经验{{positionlist.exp}}年 / {{positionlist.edu}}
                                </div>
                            </div>
                        </div>
                        <div class="job_list_cen">
                            <div class="companys">
                                <router-link to="/companyinfo">{{positionlist.company}}</router-link>
                                <i class="company_lo">
                                    <span>该企业已上传营业执照并通过资质验证审核</span>
                                </i>
                            </div>
                            <div class="lingyu">
                                移动互联网 / A轮
                            </div>
                        </div>
                        <div class="job_list_r">
                            <a href="">
                                <img src="https://www.lgstatic.com/thumbnail_120x120/i/image/M00/75/65/CgqKkVgzwuiAIqwVAAbhEVjDUlk817.png"
                                     alt="石墨" width="60"
                                     height="60">
                            </a>
                        </div>

                    </div>
                    <div class="job_list_bottom">
                        <div class="job_list_type">
                            <span>企业服务</span>
                            <span>web前端</span>
                            <span>javascript</span>
                            <span>CSS</span>
                            <span>Angularjs</span>
                            <span>react</span>
                        </div>
                        <div class="job_company_r">
                            “技术驱动 创业平台 高速成长 人性化福利”
                        </div>
                    </div>
                </li>
            </ul>

            <div class="list_pager">
                <el-pagination
                        @size-change="handleSizeChange"
                        @current-change="handleCurrentChange"
                        :current-page.sync="curpage"
                        :page-size="pagesize"
                        layout="total, prev, pager, next"
                        :total="positionlists.length">
                </el-pagination>
            </div>

        </div>
    </div>

</template>

<script>
    import axios from 'axios';
    import PositionSearch from "./PositionSearch.vue"

    export default {
        name: "list",
        props: ['tag'],
        components: {
            PositionSearch
        },
        data() {
            return {

                positionlists: [],
                pagesize: 10,
                curpage: 1,
            }
        },
        methods: {
            handleSizeChange(val) {
                this.pagesize = val;
                // console.log(`每页 ${val} 条`);
            },
            handleCurrentChange(val) {
                this.curpage = val;
               // console.log(`当前页: ${val}`);
            },
            getPosition() {
                var app = this;
                axios.get('api/positionList/' + app.tag)
                    .then(function (resp) {
                        return app.positionlists = resp.data;

                    })
                    .catch(function (resp) {
                        app.$message({
                            showClose: true,
                            message: '数据加载失败，请刷新重试',
                            type: 'error'
                        });
                    });
            }
        },

        watch: {
            tag: function (newTag, oldTag) {
                this.getPosition();

            }
        },
        mounted() {
            this.getPosition();
        },


    }
</script>

<style scoped>
    @import "../../static/css/jobrecom/RecomPositionList.css";
</style>
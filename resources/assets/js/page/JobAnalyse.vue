<template>
    <div class="page-width">
        <Nav></Nav>
        <el-tabs>
            <el-tab-pane label="岗位分析">
                <div>

                    <div class="commonStyle">
                        <h3>工资情况</h3>
                        <SalaryChart></SalaryChart>
                    </div>
                    <div class="commonStyle">
                        <h3>经验要求</h3>
                        <ExpChart></ExpChart>
                    </div>
                </div>

                <div>
                    <div class="commonStyle">
                        <h3>趋势预测</h3>
                        <TendencyChart></TendencyChart>
                    </div>
                    <div class="commonStyle">
                        <h3>学历要求</h3>
                        <EduChart></EduChart>
                    </div>
                </div>
            </el-tab-pane>
            <!--<el-tab-pane label="就业形势">-->
            <!---->
            <!--</el-tab-pane>-->
            <el-tab-pane label="岗位职责">
                <div class="commonStyle">
                    <h3>岗位职责</h3>
                    <DutyLists :duties="duties"></DutyLists>
                </div>
                <div class="commonStyle">
                    <h3>标签云</h3>
                    <WordCloud></WordCloud>
                </div>

            </el-tab-pane>
        </el-tabs>
    </div>
</template>

<script>
    import SalaryChart from "./../components/jobanalyse/SalaryChart.vue"
    import TendencyChart from "./../components/jobanalyse/TendencyChart.vue"
    import ExpChart from "./../components/jobanalyse/ExpChart.vue"
    import EduChart from "./../components/jobanalyse/EduChart.vue"
    import WordCloud from "./../components/jobanalyse/WordCloud.vue"
    import DutyLists from "./../components/jobanalyse/DutyLists.vue"
    import Nav from "./../components/share/Nav.vue"

    export default {
        name: "analyse",
        components: {
            Nav,
            SalaryChart,
            TendencyChart,
            ExpChart,
            EduChart,
            WordCloud,
            DutyLists,

        },
        data() {
            return {
                duties: [
                    {
                        title: '熟练掌握 Java 及面向对象设计开发，对部分 Java 技术有深入研究',
                        recomCourses:['课程1','课程2','课程3']
                    },
                    {
                        title:'了解 SOA 架构理念、实现技术；熟悉常见设计模式，熟练掌握Spring、myBatis 等框架；',
                        recomCourses:['课程1','课程2','课程3']
                    },
                    {
                        title:'熟练掌握 MySQL 应用开发、数据库原理和常用性能优化和扩展技术，以及 NoSQL，Queue 的原理；',
                        recomCourses:['课程1','课程2','课程3']
                    },
                    {
                        title:'研究过 http 协议、搜索引擎、缓存、jvm 调优、序列化、nio、RPC 调用框架等，有相应实践经验者优先',
                        recomCourses:['课程1','课程2','课程3']
                    },
                ],
            }
        },

    }
</script>

<style scoped>
    @import "../static/css/share/common.css";

    .commonStyle {
        float: left;
        width: 50%;
    }
</style>
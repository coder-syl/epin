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
        <div class="joblist">
            <el-table
                    :data="jobs"
                    style="width: 100%"
                    border="true"
                    :default-sort="{prop: 'id', order: 'descending'}"
            >
                <el-table-column
                        prop="id"
                        label="编号"
                        sortable
                        width="80">
                </el-table-column>
                <el-table-column
                        prop="company"
                        label="公司"
                        sortable
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="positionName"
                        label="岗位"
                        width="180">
                </el-table-column>
                <el-table-column
                        prop="adr"
                        label="地址"
                        width="80">
                </el-table-column>
                <el-table-column
                        prop="edu"
                        label="学历"
                        width="80">
                </el-table-column>
                <el-table-column
                        prop="exp"
                        label="经验/年"
                        width="80">
                </el-table-column>
                <el-table-column
                        prop="lowmoney"
                        label="最低薪资"
                        width="80">
                </el-table-column>
                <el-table-column
                        prop="curmon"
                        label="发布时间/月份"
                        width="150">
                </el-table-column>
                <el-table-column label="操作">
                    <template slot-scope="scope">
                        <el-button
                                size="mini"
                                @click="handleEdit(scope.$index, scope.row)">查看详情
                        </el-button>
                    </template>
                </el-table-column>
            </el-table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "online-job",
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
            var app = this;

            axios.get('api/onlineJob').then(function (response) {
                alert("success load position");
                console.log(response.data);
                app.jobs = response.data;
            }).catch(function (response) {
                console.log(response);
                alert("Could not load position");
            });
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

    .joblist {
        padding-top: 20px;
        margin: 0 auto;
    }
</style>
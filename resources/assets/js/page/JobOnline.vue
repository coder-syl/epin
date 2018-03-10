<template>
    <div >
        <div class="jobAnalyse" >

            <div style="float: left;width: 550px;">
                <el-input
                        size="medium"
                        placeholder="请输入内容"
                        v-model="inputData">
                </el-input>
                <!--<el-button type="primary" icon="el-icon-search">搜索</el-button>-->
            </div>

            <div style="float: left">
                <el-button type="primary" icon="el-icon-search">搜索</el-button>
            </div>

            <!--<p>Message is: {{ inputData }}</p>-->
        </div>
        <div class="joblist">
            <div class="div1">
                <a href="" style="">python开发</a>
                <!--<p>地点</p>-->
            </div >
            <div class="div2">
                div2
            </div>
            <div class="div3">
                div3
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "online-job",
        data: {
            inputData: "",
        }
    }
</script>

<style scoped>
    a {
        text-decoration: none;
    }
    .jobAnalyse {
        /*background-color: #409eff;*/
        height: 100px;
        padding-left: 300px;
        padding-right: 600px;
    }
    .joblist {
        /*background-color: #fff;*/
        padding-top: 50px;

        padding-left: 127px;
    }
    .div1{
        width: 435px;
        height: 50px;
        /*background-color: #69c23a;*/
        float: left;
    }
    .div2{
        height: 50px;
        width: 435px;
        /*background-color: #e6a23c;*/
        float: left;
    }
    .div3{
        height: 50px;
        width:435px;
        /*background-color: #f56c6c;*/
        float: left;
    }
</style>
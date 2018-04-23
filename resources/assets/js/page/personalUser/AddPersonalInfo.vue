<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="addinfo">
            <el-tabs v-model="activeName" tab-position="left" style="line-height:100px">
                <el-tab-pane label="我的简历" name="zero">
                    <Resume></Resume>
                </el-tab-pane>
                <el-tab-pane label="基本资料" name="first">
                    <BaseInfo></BaseInfo>
                </el-tab-pane>
                <el-tab-pane label="获奖情况" name="second"></el-tab-pane>
                <el-tab-pane label="工作经验" name="thirth"></el-tab-pane>
                <el-tab-pane label="自我评价" name="fourth"></el-tab-pane>
            </el-tabs>
        </div>
    </div>
</template>
<script>
    import Nav from "../../components/share/Nav.vue";
    import BaseInfo from "../../components/personalUser/InfoForm/BaseInfo";
    import Resume from "../../components/personalUser/Resume";

    export default {
        components: {
            Nav,
            Resume,
            BaseInfo,
        },
        data() {
            return {
                activeName: 'zero'
            };
        },
        methods: {}
    };
</script>
<style >
    @import '../../static/css/share/common.css';
    .addinfo{
        margin-top:15px;
    }
    .el-tabs__item {
        height: 80px;
        line-height: 80px;
    }
</style>
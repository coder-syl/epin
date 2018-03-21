<template>
    <div class="comintro">
        <el-tabs tab-position="left" >
            <el-tab-pane label="宗旨">{{ purpose }}</el-tab-pane>
            <el-tab-pane label="位置">{{ position }}</el-tab-pane>
            <el-tab-pane label="目标">{{ goal }}</el-tab-pane>
            <el-tab-pane label="成员">{{ member }}</el-tab-pane>
        </el-tabs>
    </div>
</template>
<script>
    export default {
        name: "CompanyIntro",
        data() {
            return {
                purpose: "一切为了更好的工作",
                position: "江苏省徐州市",
                goal: "没啥大目标慢慢发展就好",
                member: "一帮程序猿"
            }
        },
        methods: {}

    }
</script>
<style scoped>
    .comintro {
        text-align: center;
        height: 200px;
    }
</style>

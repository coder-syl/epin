<template>

    <el-steps :active="1" align-center>

        <el-step v-for="development in developments" :key="development.title" :title="development.title"
                 :description="development.des"></el-step>

    </el-steps>

</template>
<script>
    export default {
        name: "Development",
        data() {
            return {
                developments: [
                    {
                        title: "step 1",
                        des: "2017 公司成立"
                    },
                    {
                        title: "step 2",
                        des: "暂无时间节点"
                    },
                    {
                        title: "step 3",
                        des: "暂无时间节点"
                    },
                    {
                        title: "step 4",
                        des: "暂无时间节点"
                    }
                ]
            }
        }
    }
</script>
<style scoped>

</style>

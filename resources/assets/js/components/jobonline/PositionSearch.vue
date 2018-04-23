<template>
    <div class="positionsearch">
        <div class="search">
            <el-input
                    size="medium"
                    placeholder="请输入内容"
                    v-model="inputData">
            </el-input>
        </div>

        <div style="float: left">
            <el-button type="primary" icon="el-icon-search" @click="search">搜索</el-button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "position-search",
        data(){
            return {
                inputData:"",
            }
        },
        methods: {
           search () {
               var searchData=this.inputData;
               this.$router.push({ name: 'PositionList', params: {tag: searchData }})
           }

        },

    }
</script>

<style scoped>
    .positionsearch {
        height: 80px;
    }

    .search {
        float: left;
        width: 80%;
        margin: 0 auto;
    }
</style>
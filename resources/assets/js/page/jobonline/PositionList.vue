<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="jobAnalyse">
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
        <ChooseBar></ChooseBar>
        <list :tag="tag"></list>
    </div>

</template>

<script>
    import List from "../../components/jobonline/List"
    import ChooseBar from "../../components/jobonline/ChooseBar"
    import Nav from "../../components/share/Nav"
    export default {
        name: "position-list",
        components: {
            List,
            Nav,
            ChooseBar,
        },
        data() {
            return {
                inputData: "",
                tag: this.$route.params.tag,
            }
        },
        methods: {
            search:function(){
                if(this.inputData != "")
                {
                    this.tag=this.inputData;
                }
            }

          }


    }
</script>

<style scoped>
    @import "../../static/css/share/common.css";
    .jobAnalyse {
        height: 50px;
    }

    .search {
        float: left;
        width: 70%;
        margin: 0 auto;
    }
</style>
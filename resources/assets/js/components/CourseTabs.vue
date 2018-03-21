<template>
    <div>
        <el-tabs v-model="activeName" @tab-click="handleClick">

            <el-tab-pane :label="course1" name="first">
                <a href="#" class="imgcard" v-for="i in  5">
                    <img src="./../static/intro2.jpg" style="width:220px ; height:150px;"/>
                    <div class="container">
                        <p>java从入门到精通</p>
                    </div>
                </a>
            </el-tab-pane>

            <el-tab-pane :label="course2" name="second">
                <a href="#" class="imgcard" v-for="i in  5">
                    <img src="./../static/intro1.jpg" style="width:220px ; height:150px;"/>
                    <div class="container">
                        <p>java从入门到精通</p>
                    </div>
                </a>
            </el-tab-pane>

            <el-tab-pane :label="course3" name="third">
                <a href="#" class="imgcard" v-for="i in  5">
                    <img src="./../static/intro3.jpg" style="width:220px ; height:150px;"/>
                    <div class="container">
                        <p>java从入门到精通</p>
                    </div>
                </a>
            </el-tab-pane>

            <el-tab-pane :label="course4" name="fourth">
                <a href="#" class="imgcard" v-for="i in  5">
                    <img src="./../static/intro2.jpg" style="width:220px ; height:150px;"/>
                    <div class="container">
                        <p>java从入门到精通</p>
                    </div>
                </a>
            </el-tab-pane>

        </el-tabs>
    </div>


</template>
<script>
    export default {
        data() {
            return {
                activeName: 'first',
                course1: "大数据",
                course2: "C语言",
                course3: "数据库",
                course4: "爬虫"
            };
        },
        methods: {
            handleClick(tab, event) {
                console.log(tab, event);
            }
        }
    };
</script>
<style scoped>
    a {
        float: left;
        text-decoration: none;
        color: #000;
        margin-left: 20px;
    }

    .imgcard {
        width: 220px;
        height: 210px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }

    .container {
        padding: 10px;
    }

</style>
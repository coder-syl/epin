<template>
    <el-collapse v-model="activeName" accordion>
        <el-collapse-item v-for=" (duty,index) in duties" :name="index" :key="duty.title" >
            <template slot="title" style="overflow: hidden;" >
                {{ duty.title}}<i class="header-icon el-icon-info"></i>
            </template>
            <a v-for="recomCourse in duty.recomCourses" href="">

                <div class="single-member effect-2">
                    <div class="member-image">
                        <img src="../../static/imgs/course/c1.jpg" alt="Member">
                    </div>
                    <div class="member-info">
                        <h3> {{ recomCourse}}</h3>
                        <h5> 尚衍亮</h5>
                        <p>java面向对象开发</p>
                    </div>
                </div>
            </a>
        </el-collapse-item>
    </el-collapse>
</template>
<script>
    export default {
        name: "duty-lists",
        props: ['duties'],
        data() {
            return {
                activeName: '1'
            };
        }
    }
</script>
<style scoped>
    .el-collapse-item__header {
        height: 60px;
    }
    .single-member{width: 28%; float: left; margin: 5px 2.5%; background-color: #fff; text-align: center; position: relative;color:#409EFF;}
    .member-image img{max-width: 100%; max-height: 100%;vertical-align: middle; border-radius:5%}
    p {font-size: 14px; font-weight: 300; line-height: 14px; padding: 0 30px; margin-bottom: 10px;}
    .effect-2{max-height: 170px; min-height: 170px; overflow: hidden;}
    .effect-2 h3{padding: 2px; line-height: 14px;}
    .effect-2 h5{padding-top: 2px; line-height: 14px;}
    .effect-2 .member-image{height: 100px; overflow: hidden; width: 100%; transition: 0.4s; display: inline-block; float: none; vertical-align: middle;}
    .effect-2 .member-info{transition: 0.4s;}
    .effect-2 .member-image img{width: 100%; vertical-align: bottom;}
    .effect-2:hover .member-image{height: 0px; transition: 1s;}
</style>

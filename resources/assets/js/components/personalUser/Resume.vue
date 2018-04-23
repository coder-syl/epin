<template>
    <div class="resume">
        <div class="resume-left">
            <img src="../../static/imgs/ava.jpg" alt="此处是照片">
            <hr>
            <div class="base-info">
                <div class="info-detail">
                    <i class="el-icon-document">&nbsp;&nbsp;&nbsp;尚衍亮</i>
                </div>
                <div class="info-detail">
                    <i class="el-icon-date">&nbsp;&nbsp;&nbsp;2018-11</i>
                </div>
                <div class="info-detail">
                    <i class="el-icon-location">&nbsp;&nbsp;&nbsp;江苏徐州</i>
                </div>
                <div class="info-detail">
                    <i class="el-icon-phone-outline">&nbsp;&nbsp;&nbsp;18796323596</i>
                </div>
                <div class="info-detail">
                    <i class="el-icon-message">&nbsp;&nbsp;&nbsp;2522011411@qq.com</i>
                </div>
            </div>
        </div>
        <div class="resume-right">
            <div class="edu">
                <p>教育背景</p>
                <div class="edu-info">
                    <span>江苏师范大学 本科 软件工程</span>
                </div>
            </div>
            <div class="exp">
                <p>工作经验</p>
                <div class="exp-info">
                    <span>1. 隐藏的实习地点  爬虫工程师（2018-至今）</span>
                    <div class="exp-detail">
                        <span>
                        进行数据抓取，数据清洗
                        </span>
                    </div>

                </div>
                <div class="exp-info">
                    <span>2. 隐藏的实习地点 网站开发工程师（2018-至今）</span>
                    <div class="exp-detail">
                        <span>
                        进行数据抓取，数据清洗
                        </span>
                    </div>
                </div>
            </div>
            <div class="honor">
                <p>获奖情况</p>
                <div class="honor-info">

                </div>
            </div>
            <div class="intro">
                <p>自我评价</p>
                <div class="intro-info"></div>
            </div>
            <div>
            </div>
        </div>
    </div>


</template>


<script>
    export default {
        data() {
            return {}
        }

    }
</script>

<style scoped>
    .resume {
        width: 70%;
        height: 100%;
        margin-left: 5%;
        line-height: 30px;
    }

    .resume-left {
        width: 25%;
        height: 100%;
        border: 1px solid #F0F0F0;
        float: left;
        /*text-align:center;*/
    }

    .base-info {
        width: 100%;
        text-indent: 5px;
    }

    .resume-right {
        width: 50%;
        height: 100%;
        border: 1px solid #F0F0F0;
        float: left;

    }

    img {
        width: 80%;
        height: auto;
        margin-left: 10%;
        border-radius: 80%;
        border: 1px solid #F0F0F0;
        margin-top: 10px;
    }

    .info-detail {
        width: 80%;
        height: 100%;
        font-size: 14px;
    }

    .resume-right p {
        padding-left: 15px;
        border-bottom: 1px solid #F0F0F0;
        font-size: 16px;
        color: #409EFF;
    }

    .edu-info span {
        font-size: 14px;
        padding-left: 15px;
    }

    .exp-info span {
        font-size: 14px;
        padding-left: 15px;
    }
    .exp-detail{
        padding-left:20px;
    }
</style>
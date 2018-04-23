<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="contents_1">
            <div class="contents_2">
                <div class="contents_3">
                    <div class="contents_4">
                        <div class="contents_5">随手科技随手数据服务公司-流量经营中心招聘</div>
                        <span class="name">产品经理</span>
                    </div>
                    <dd class="jobTopic">
                        <p>
                            <span class="salary">10-20k</span>
                            <span>/深圳 /</span>
                            <span>经验1-3年 /</span>
                            <span>本科以上 /</span>
                            <span>全职</span>
                        </p>
                        <ul class="jobLabels">
                            <li class="labels">移动互联网</li>
                            <li class="labels">金融</li>
                            <li class="labels">产品经理</li>
                            <li class="labels">电商</li>
                        </ul>
                        <p class="publicTime">1天前发布</p>
                    </dd>
                </div>
            </div>
        </div>
        <div class="contents_001">
            <div class="contents_0010">
                <dl class="jobdetail">
                    <dd class="jobdetail_1">
                        <!-- <span class="advan">职位诱惑:</span> -->
                        <h3>职位诱惑:</h3>
                        <p>互联网金融,平台好,发展空间大,氛围好</p>
                    </dd>
                    <dd class="jobdec">
                        <h3 class="decs">职位描述:</h3>
                        <!-- <div> -->
                        <p>岗位职责:</p>
                        <p>1、负责卡牛贷款超市贷款业务的规划、策划和推进，包括App、H5、Web端等；</p>
                        <p>2、以用户体验为中心，不断优化产品策略，提升平台交易率；</p>
                        <p>3、通过用户调研和数据分析，对需求进行持续提炼并转化成产品功能；</p>
                        <p>4、协调相关资源（推广/设计/开发/测试/商务），推动各个团队，保证产品按时按质上线；</p>
                        <p>5、支撑运营侧，确保贷款用户的新增、活跃、留存；</p>
                        <p>6、支撑商务侧，确保B端业务顺利开展；</p>
                        <p>7、支撑推广侧，确保流量的精准度。</p>
                        <br>
                        <p>任职要求：</p>
                        <p>1、本科以上学历，计算机、信息管理等相关专业优先，2年以上相关工作经历；</p>
                        <p>2、有移动互联网/互联网金融相关经验及有产品线的前后台产品设计和项目管理经验者优先；</p>
                        <p>3、熟悉数据分析、效果评估方法；具备创造性思维、快速学习适应能力，对用户需求有很强的洞察力和判断力；</p>
                        <p>4、优秀的创新能力、钻研精神，出色的执行能力和沟通协调能力，及独立解决问题的能力。</p>
                        <!-- </div> -->
                    </dd>
                    <dd class="jobadress">
                        <h3>工作地址:</h3>
                        <a href="">深圳</a> -
                        <a href="">南山区</a> -
                        <a href="">科技园</a> - 科技园金蝶软件园
                        <!--<a href="" class="maps">查看地图</a>-->
                    </dd>

                </dl>
            </div>
        </div>
    </div>
</template>

<script>
    import Nav from '../../components/share/Nav'
    export default {
        name: "job-info",
        components:{
            Nav,
        }
    }
</script>

<style scoped>
    @import '../../static/css/share/common.css';
    /*.page-width{*/
        /*background-color: #f2f5f4;*/
    /*}*/
    .contents_1 {
        /*background-color: #f2f5f4;*/
        padding: 15px 0 11px;
        width: 100%;
        min-width: 1024px;
        border: 1px solid  	#D0D0D0;

    }

    .contents_2 {
        position: relative;
        width:80%;
        height: 180px;
        margin: 0 auto;
    }

    .contents_3 {
        float: left;
        max-width: 696px;
    }

    .contents_4 {
        margin: 0 0 13px;
        /* height: 3px;
        background: red; */
    }

    .contents_5 {
        margin: -2px 0 8px 0;
        font-size: 14px;
        color: #555;
        position: relative;
        left: 2px;
    }

    .contents_4 .name {
        position: relative;
        font-size: 36px;
        color: #333;
        line-height: 36px;
    }

    .jobTopic {
        margin: 2px 0 0 0;
        font-size: 18px;
        color: #555;
    }

    .jobTopic p {
        margin: 0 0 8px 0;
        display: block;
    }

    .jobTopic .salary {
        color: #fd5f39;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: block;
    }

    /* .jobLabels:before {
        content: "";
        display: table;
    } */
    .labels {
        float: left;
        height: 22px;
        margin-right: 8px;
        padding: 0 10px;
        line-height: 22px;
        background-color: #fff;
        color: #70797b;
        font-size: 12px;
        border-radius: 10px;
    }

    .publicTime {
        clear: both;
        color: #70797b;
        font-size: 14px;
        padding-top: 10px;
        /*margin-bottom: 8px;*/
    }

    p {
        margin: 0;
        display: block;
    }

    h3 {
        margin: 10px 0;
        display: block;
    }


    .contents_001 {
        width:100%;
        margin: 0 auto;
        /*padding-bottom: 118px;*/
        border: 1px solid  #D0D0D0;
         /*background: #70797b; */

    }
    .contents_0010 {
        width:80%;
        margin: 0 auto;
        /*position: relative;*/
        /*padding-top: 10px;*/
        /*float: left;*/
        /*border: 2px solid #f2f5f4;*/

        /* left: -40px; */
    }
    .jobdetail dd {
        padding: 15px 0 10px;
        color: #333;
        word-wrap: break-word;
    }
    .jobdetail_1 {
        padding: 15px 0 10px;
        color: #333;
        word-wrap: break-word;
        display: block;
    }
    .advan {
        font-size: 16px;
        color: #333;
        font-weight: 700;
    }
    .jobdetail_1 p {
        margin-top: 8px;
        color: #333;
    }
    .decs {
        font-size: 16px;
        font-weight: 700;
        color: #333;
        line-height: 16px;
        margin:5px 0 22px 0;
        display: block;
    }
    .jobdec p {
        display: block;
        margin: 10px 0;
    }
    .jobadress {
        padding-top: 25px;
        margin-top: -26px;
        margin-bottom: 5px;
    }
    .jobadress a {
        color: #00b38a;
        /* cursor: pointer; */
    }
    .jobadress .maps {
        float: right;
    }
    .publisher {
        /* padding: 5px 0 10px; */
        position: relative;
        margin-top: -15px;
        margin-bottom: 40px
    }
    .publishers_img {
        height: 70px;
        padding: 14px 10px;
        padding-left: 0;
        position: relative;
        z-index: 1;
        /* background: red; */
    }
    .avaters.c4 {
        color: #ff8590;
        background-position: -250px 0px;
    }
    .avaters {
        left: 0;
        top: 14px;
        width: 60px;
        height: 60px;
        text-align: center;
        font-style: normal;
        font-size: 26px;
        line-height: 60px;
        background: url(https://static.lagou.com/www/static/job-detail/modules/job-info/img/publisher_c5b292d.png) no-repeat;
        position: absolute;
    }
    .publisher_name {
        float: left;
    }
    .publisher_name .name {
        float: left;
        font-size: 18px;
        color: #333;
        margin: 10px 0 0 65px;
        max-width: 140px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .publisher_name .chat_me {
        position: relative;
        float: left;
        font-size: 18px;
        color: #333;
        width: 25px;
        height: 25px;
        margin: 8px 0 0 5px;
        background: url(https://static.lagou.com/www/static/job-detail/modules/job-info/img/icon-chat_4a70ffc.png) no-repeat 0 0;
        cursor: pointer;
    }
    .publisher_name .pos {
        clear: left;
        float: left;
        font-size: 14px;
        color: #999;
        margin: 5px 0 5px 65px;
        max-width: 120px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .publishMes {
        position: absolute;
        top: 12px;
        right: -22px;
    }
    .publishMes div {
        position: relative;
        padding-left: 27px;
        padding-right: 23px;
        float: left;
        /* border-right: 1px solid #c4c3c3; */
    }
    .publishMes div span {
        display: block;
        text-align: center;
    }
    .publishMes_1 {
        color: #555;
        margin: 0 auto;
        padding-right: 5px;
        margin-bottom: 4px;
        /* max-width: 100px;
        font-size: 15px; */
    }
    .publishMes_1 i {
        display: inline-block;
        width: 15px;
        height: 16px;
        margin-left: 2px;
        background: url(https://static.lagou.com/www/static/job-detail/modules/job-info/img/icon-mark_fc1e516.png) no-repeat 1px 0;
        vertical-align: sub;
        cursor: pointer;

    }
    /* .publishMes .tips {
        display: none;
        padding: 2px;
        width: 220px;
        background: #fff;
        border: 1px solid #d4d4d4;
        position: absolute;
        top: -30px;
        left: -5px;
        color: #999;
    }
    .publishMes:hover .tips {
        display: block;
    } */
    .publishMes .publishMes_1 i .tips {
        display: none;
        padding: 2px;
        width: 220px;
        background: #fff;
        border: 1px solid #d4d4d4;
        position: absolute;
        top: -30px;
        left: -5px;
        color: #999;
    }
    .publishMes_1 i:hover .tips {
        display: block;
    }
    .publishMes .data {
        margin-top: 3px;
        margin-left: -10px;
        font-size: 16px;
        color: #333;
    }
    .tips_1 {
        font-size: 12px;
        color: #999;
        /* position: relative; */
    }
    .publishMes em {
        float: left;
        width: 1px;
        height: 60px;
        background: #f3f3f3;
        margin-top: 10px;
    }
    .tips_1 .tips_2 {
        color: #FF3333;
    }
    i {
        font-style: normal;
    }
</style>
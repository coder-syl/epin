<template>
    <div class="main_contents">
        <!--左边部分-->
        <div class="main_left">
            <div class="filterTab">
                <ul class="filterTabs">
                    <div class="filterTabs_1">
                        <li class="filterTabs_li">
                            <span class="title_l">工作地点：</span>
                            <a href="" class="active">不限</a>
                            <a class="country" href="">全国</a>
                            <a href="">上海</a>
                            <a href="">深圳</a>
                            <a href="">广州</a>
                            <a href="">成都</a>
                            <a href="">南京</a>
                            <a href="">武汉</a>
                            <a href="">西安</a>
                            <a href="">厦门</a>
                            <span class="more_r" href="">更多
                                    <i></i>
                            </span>
                        </li>
                        <li class="filterTabs_li">
                            <span class="title_l">工作经验：</span>
                            <a href="" class="active">不限 </a>
                            <a href="">应届毕业生</a>
                            <a href="">3年及以下</a>
                            <a href="">3-5年</a>
                            <a href="">5-10年</a>
                            <a href="">10年以上</a>
                            <a href="">不要求</a>
                        </li>
                        <li class="filterTabs_li">
                            <span class="title_l">学历要求：</span>
                            <a href="" class="active">不限 </a>
                            <a href="">大专</a>
                            <a href="">本科</a>
                            <a href="">硕士</a>
                            <a href="">博士</a>
                            <a href="">不要求</a>
                        </li>
                        <li class="filterTabs_li">
                            <span class="title_l">融资阶段：</span>
                            <a href="#" class="active">不限 </a>
                            <a href="#">未融资</a>
                            <a href="#">天使轮</a>
                            <a href="#">A轮</a>
                            <a href="#">B轮</a>
                            <a href="#">C轮</a>
                            <a href="#">D轮及以上</a>
                            <a href="#">上市公司</a>
                            <a href="#">不需要融资</a>
                        </li>
                        <li class="filterTabs_li">
                            <span class="title_l">行业领域：</span>
                            <a href="" class="active">不限 </a>
                            <a href="">移动互联网</a>
                            <a href="">电子商务</a>
                            <a href="">金融</a>
                            <a href="">企业服务</a>
                            <a href="">教育</a>
                            <a href="">文化娱乐</a>
                            <a href="">游戏</a>
                            <a href="">O2O</a>
                            <a href="">硬件</a>
                            <span class="more_r" href="">更多
                                    <i></i>
                            </span>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "choose-bar",
        mouted:{
            // document.
        }
    }
</script>

<style scoped>
    a {
        text-decoration:none;
        background-color: transparent;
        color: #555;
        cursor: auto;
        font-size: 14px;
        word-wrap: normal;
    }
    .main_contents {
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        /*padding-bottom: 100px;*/
        /* background: #d2d2d2; */
    }
    .main_contents .main_left {
        width: 960px;
        float: left;
        /* background: #999; */
        /* height: 500px; */
    }
    .main_contents .main_left .filterTab {
        margin-bottom: 20px;
    }
    .main_contents .main_left .filterTab .filterTabs {
        position: relative;
        background: #fafafa;
        border: 1px solid #ededed;
        min-height: 36px;
        padding: 10px 0px 10px 35px;
    }
    .filterTabs .filterTabs_1 {
        position: relative;
        overflow: visible;
        /* width: 900px;
        height: 100px;
        background: #999; */
        left: -40px;
    }
    .filterTabs li {
        padding: 6px 16px;
        zoom: 1;
        color: #555;
    }
    li {
        display: list-item;
        list-style: none;
    }
    .filterTabs .filterTabs_li span {
        font-weight: 500;
        word-wrap: normal;
        margin-right: -5px;
        float: left;
        padding: 5px 8px;
        font-size: 14px;
        line-height: 14px;
    }
    .filterTabs .filterTabs_li .country {
        background: #FFF;
        color: #555;
        font-size: 14px;
        border: 1px solid #E8E8E8;
    }
    .filterTabs .filterTabs_li .active {
        background: #409EFF;
        color: #FFF;
        font-size: 14px;
    }
    .filterTabs .filterTabs_1 .filterTabs_li a {
        margin-right: 5px;
        padding: 5px 8px;
        font-size: 14px;
        line-height: 16px;
    }
    .filterTabs .filterTabs_li a:hover {
        background: #409EFF;
        color: #FFF;
    }
    .filterTabs .filterTabs_li .more_r {
        position: relative;
        float: right;
        z-index: 15;
        font-weight: 400;
        left: -10px;
    }
    .filterTabs .filterTabs_li .more_r i {
        position: absolute;
        top: 10px;
        right: -9px;
        font-size: 0;
        height: 0;
        width: 0;
        border-width: 6px 6px 0;
        border-style: solid dashed;
        border-color: #409EFF transparent transparent;
        overflow: hidden;
        transition: all .4s ease 0s;
    }
    .filterTabs .filterTabs_li .more_r:hover i {
        transform: rotate(180deg);
        animation-fill-mode: forwards;
    }

</style>
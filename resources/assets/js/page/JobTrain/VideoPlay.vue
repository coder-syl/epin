<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="content">
            <div class="left" id="left">
                <!--<video src="../../static/video/1.mp4" ></video>-->
            </div>
            <div id="floatDiv">
                <div style="width:290px; float:left">
                    <div class="floatDtitle">Maya2017初识与基础操作</div>
                    <div class="floatShadow">
                        <ul class="floatDlist">
                            <li>第1章 初识Maya2017</li>
                            <li><a target="_blank" href="#">1-1 初识Maya2017(02:15)</a></li>
                            <li>第2章 Maya2017安装以及工具栏的介绍</li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-2 菜单栏、状态栏、工具栏、...(09:01)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li>第2章 Maya2017安装以及工具栏的介绍</li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                            <li><a target="_blank" href="#">2-1 Maya安装教程(04:18)</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div id="List" class="rightArrow">
                <img src="../../static/imgs/jobtrain/list.png"><a href="javascript:;" title="列表"></a></div>
            <div id="Notes" class="rightArrow" style="margin-top: 50px">
                <img src="../../static/imgs/jobtrain/notes.png"><a href="javascript:;" title="笔记"></a></div>
            <div id="Question" class="rightArrow" style="margin-top: 100px">
                <img src="../../static/imgs/jobtrain/question.png"><a href="javascript:;" title="提问"></a></div>

            <div id="myModel" class="model">
                <span class="close">x</span>
                <div id="popup" class="model-content"></div>
            </div>
        </div>
    </div>

</template>

<script>
    import  Nav from "../../components/share/Nav"
    export default {
        name: "video-play",
        components:{
           Nav,
        },
        mounted() {
            var count = 0;
            document.getElementById("List").addEventListener("click", function () {
                count += 1;
                if (count % 2 == 1) {
                    document.getElementById("left").style.width = "77.5%";
                    document.getElementById("floatDiv").style.display = "block";
                    document.getElementById("List").className = "rightArrow_1";
                    document.getElementById("Notes").className = "rightArrow_1";
                    document.getElementById("Question").className = "rightArrow_1";
                } else {
                    document.getElementById("left").style.width = "100%";
                    document.getElementById("floatDiv").style.display = "none";
                    document.getElementById("List").className = "rightArrow";
                    document.getElementById("Notes").className = "rightArrow";
                    document.getElementById("Question").className = "rightArrow";
                }
            })

            document.getElementById("Notes").addEventListener("click", function () {
                document.getElementById("myModel").style.display = "block";
            })

            var close = document.getElementsByClassName("close")[0];

            close.onclick = function () {
                document.getElementById("myModel").style.display = "none";
            }
            }
    }
</script>

<style scoped>
    @import "../../static/css/share/common.css";
    img {
        border: none;
        outline: none;
        margin-left: 9px;
        margin-top: 5px;
    }

    a {
        color: #666;
        text-decoration: none;
        outline: none;
    }

    a:hover {
        color: #00CC99;
    }

    .content {
        width: 100%;
        height: 600px;
        background: white;
        position: relative;
        margin-top: 20px;
    }

    /*left*/
    .left {
        width: 100%;
        position: relative;
        height: 100%;
        float: left;
        border: 1px solid #CCCCCC;
        transition: 0.2s;
    }

    /*浮动*/
    #floatDiv {
        display: none;
        width: 22.5%;
        background: #fff;
        position: absolute;
        right: 0;
        z-index: 999;
        border: 1px solid #CCCCCC;
        float: right;
        height: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
        animation-name: slideIn;
        animation-duration: 0.2s;
    }

    @keyframes slideIn {
        from {
            right: -22.5%;
            opacity: 0
        }
        to {
            right: 0;
            opacity: 1;
        }
    }

    #floatDiv .floatDtitle {
        width: 100%;
        height: 45px;
        line-height: 45px;
        background: #00CC99;
        color: #fff;
        font-size: 18px;
        text-indent: 22px;
        position: relative;
    }

    #floatDiv .floatDlist {
        padding: 0 14px;
    }

    #floatDiv .floatDlist li {
        height: 45px;
        line-height: 45px;
        font-size: 15px;
        border-bottom: 1px solid #e3e3e3;
        padding: 0 0 0 50px;
        padding-left: 0px;
        overflow: hidden; /*自动隐藏文字*/
        text-overflow: ellipsis; /*文字隐藏后添加省略号*/
        white-space: nowrap; /*强制不换行*/
        width: 20em; /*不允许出现半汉字截断*/
    }

    .floatShadow {
        background: #fff;
        box-shadow: -2px 0 3px rgba(0, 0, 0, 0.25);
    }

    /*弹窗背景*/
    .model {
        display: none;
        width: 800px;
        height: 700px;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 200px;
        top: 100px;
        overflow: auto;
        background-color: rgba(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.5);
    }

    .model-content {
        margin: auto;
        display: block;
        width: 70%;
        max-width: 700px;
    }

    #caption {
        margin: auto;
        display: block;
        width: 70%;
        max-width: 800px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /*添加动画*/
    .model-content, #caption {
        width: 400px;
        height: 300px;
        background-color: white;
        margin: 0 auto;
        border-radius: 5px;
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.2s;
        animation-name: zoom;
        animation-duration: 0.2s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        transition: 0.5s;
    }

    .close:hover, .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    .rightArrow {
        width: 50px;
        height: 45px;
        background: url(../../static/imgs/jobtrain/bg副本.jpg) no-repeat;
        position: absolute;
        top: 200px;
        right: 0;
        z-index: 999;
    }

    .rightArrow_1 {
        width: 50px;
        height: 45px;
        background: url(../../static/imgs/jobtrain/bg副本.jpg) no-repeat;
        position: absolute;
        top: 200px;
        right: 23%;
        z-index: 999;
        animation-name: slide;
        animation-duration: 0.2s;
    }

    @keyframes slide {
        from {
            right: 0;
            opacity: 0
        }
        to {
            right: 23%;
            opacity: 1;
        }
    }

    video {
        height: 100%;
        width: 100%;
    }
</style>
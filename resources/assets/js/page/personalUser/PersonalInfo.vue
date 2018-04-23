<template>
    <div class="page-width">
        <Nav></Nav>
        <div class="base-info">
            <div class="img-info">
                <img src="http://cdn.v2ex.com/gravatar/761c42d6ec5514c3493fafe18296bcc5?s=160&d=mm&r=g" alt="照片">
            </div>
            <div class="per-info">
                <p>syl</p>
                <p>
                    <span>男</span>
                    <span>23岁</span>
                    <span>徐州</span>
                    <span>本科 | 在校生</span>
                </p>
                <p>
                    <span>2522011411@qq.com</span>
                    <span>18796323596</span>
                </p>
            </div>
        </div>
        <div class="base-info">
            <div class="img-info">
            </div>
            <div class="per-info">
                <p>教育经历</p>
                <p>

                    <span>  2015.09 - 2019.07</span>
                    <span>本科</span>
                    <span>江苏师范大学</span>
                    <span>软件工程专业</span>
                </p>
            </div>
        </div>
        <div class="base-info">
            <div class="img-info">
            </div>
            <div class="per-info">
                <p>自我介绍</p>
                <p>
                    <span> 瓜皮一个</span>

                </p>
            </div>
        </div>
        <div class="base-info">
            <div class="img-info">
            </div>
            <div class="per-info">
                <p>求职意向</p>
                <p>

                    <span>  北京,上海，杭州，苏州，南京</span>
                    <span>前端工程师</span>
                </p>
            </div>
        </div>

    </div>
</template>


<script>
    import Nav from  '../../components/share/Nav.vue'
    export default {
        name: "personal-info",
        components:{
           Nav,
        },
        data() {
            return {}
        }

    }
</script>

<style scoped>
   @import "../../static/css/share/common.css";

    .base-info {
        height: 110px;
        border: 1px solid #eaeaea;
    }

    .img-info {
        float: left;
        width: 12%;
        height: 100%;
    }

    .img-info img {
        width: 90px;
        height: 90px;
        margin-left: 20px;
        margin-top: 10px;

        border-radius: 50%;
    }

    .per-info {
        float: left;
        width: 80%;
        height: 100%;
        margin-left: 50px;
        font-size: 14px;
        color: #555;
    }

    .per-info p span {
        padding-right: 20px;
    }


</style>
<template>
    <div class="contain">
        <div class="base">
            <div class="company-logo">
                <img src="../../static/imgs/logo.png" alt="here is logo">
            </div>
            <div class="company-detail">
                <div>
                    <h1 style="color:#409EFF;">江苏盛凡知识产权服务股份有限公司</h1>
                </div>
                <div>
                    认证： 实名 手机 营业执照
                    <br>
                    江苏徐州鼓楼 咨询 民营/私企
                    <br><br><br>
                </div>
                <div>
                    联系人：吉女士
                    <br>
                    手机：18896559182
                    <br>
                    公司地址：江苏 徐州 鼓楼 黄河北路90号（淮海文化科技产业园）
                </div>
            </div>
            <div class="company-imgs">
                <CompanyPhotoCarousel></CompanyPhotoCarousel>
            </div>
        </div>
        <div class="intro">
            <div class="company-logo">

            </div>
            <div class="company-detail">
                <div>
                    <h2 style="color:#409EFF;">公司介绍</h2>
                </div>
                <div>
                    <p>我们是一家年轻有活力的互联网公司，立足于最火热的文化产业，有着充沛的企业生命力和超强的行业竞争力。
                        我们大都来自90后，脚踏着实际，怀揣着梦想。我们拒绝陈旧不知变通，我们崇尚能力至上。
                        牛人们，这是为你们准备的强者至上的舞台，我们不拘泥你的学历，不在乎你得经验，我们看重的是你的潜力，你对自己对他人的一份责任心，
                        更重要的是你一定是真心的，真心对自己，真心对他人，真心对工作，只要你满足这几点都足以让我们如获至宝的欢喜珍惜！
                    </p>
                </div>
               <div>
                   <p>我们是中国领先的大型综合性知识产权服务机构，商标、专利申请量均位居行业前十。
                       自成立以来在知识产权领域服务大量客户，稳定客户达 20,000 余家。
                       并已经与世界上100多个国家或地区的知识产权代理机构建立了互惠合作关系。
                       我们是徐州盛凡网络科技有限公司（北京盛凡网知识产权代理有限公司徐州分公司）！
                   </p>
               </div>
                <div>
                    <p> 我们真诚招人！最爱心怀梦想的真心人！</p>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
    import CompanyPhotoCarousel from '../CompanyInfo/CompanyPhotoCarousel.vue'
    export default {
        name: "company-detail",
        components:{
            CompanyPhotoCarousel,
        }
    }
</script>

<style scoped>
    .base {
        height:300px;
        background-color: #f8f8f8;

    }
    .intro{
        margin-top: 20px;
        height:300px;
        background-color: #f8f8f8;
    }
    .company-logo {
        width: 15%;
        height: 300px;
        float: left;
    }

    .company-logo img {
        width: 100%;
        height: 70%;
        border-radius: 50%;
        margin: auto;
    }

    .company-detail {
        margin-left: 50px;
        width: 40%;
        height: 300px;
        float: left;
    }
    .intro .company-detail{
        width: 80%;
    }
</style>
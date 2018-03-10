<template>
    <div class="homeClass">

        <HomeCard v-for="msg in msgs" :msg="msg"></HomeCard>

    </div>
</template>
<!-- 主页 -->
<script>
    import HomeCard from "./../components/HomeCard.vue"

    export default {
        components: {
            HomeCard,
        },

        data() {
            return {
                msgs: [
                    {
                        title: "招聘分析",
                        intro: '通过数据挖掘，对各类岗位的进行数据分析，并进行预测',
                        photoAdress: "/static/intro1.jpg"
                    },
                    {
                        title: "智能推荐",
                        intro: '通过建立推荐模型，根据个人的需求给出相应的职位推荐',
                        photoAdress: "http://127.0.0.1:8000/img/intro2.jpg"
                    },
                    {
                        title: "在线招聘",
                        intro: '通过实时数据挖掘，整合优化各大招聘网站的招聘数据',
                        photoAdress: "http://127.0.0.1:8000/img/intro3.jpg"
                    }

                ]


            }
        },

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .homeClass {
        padding-left: 130px;
    }
</style>

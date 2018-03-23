<template>

    <el-card class="box-card">
        <h2>
            {{msg.title}}
        </h2>
        <span>
        {{msg.intro}}
      </span>
        <img v-bind:src="msg.photoAdress" alt="photo">
    </el-card>


</template>
<script>
    export default {
        name: "HomeCard",
        data() {
            return {};
        },
        props: ['msg']
    }
</script>
<style scoped>
    .box-card {
        width: 360px;
        float: left;
        margin: 0 33px 0px 0;
    }

    img {
        width: 310px;
        height: 280px;
        padding-top: 20px;
        padding-right: 30px;
    }

</style>

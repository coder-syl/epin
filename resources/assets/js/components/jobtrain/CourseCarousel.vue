<template>
    <el-carousel :interval="3000" arrow="always"  height="330px">
        <el-carousel-item v-for="item in 3" :key="item">
        </el-carousel-item>
    </el-carousel>
</template>
<script>

</script>
<style>
    .el-carousel__item:nth-child(3n) {
        background-image: url("../../static/imgs/courseCal/cc1.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }

    .el-carousel__item:nth-child(3n+1) {
        background-image: url("../../static/imgs/courseCal/cc2.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }
    .el-carousel__item:nth-child(3n+2) {
        background-image: url("../../static/imgs/courseCal/cc3.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;

    }
</style>
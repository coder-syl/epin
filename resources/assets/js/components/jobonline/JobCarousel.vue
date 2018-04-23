<template>
    <el-carousel :interval="3000" arrow="always" type="card" height="366px">
        <el-carousel-item v-for="item in 3" :key="item">
        </el-carousel-item>
    </el-carousel>
</template>
<script>

</script>
<style>
    .el-carousel__item:nth-child(3n) {
        background-image: url("../../static/imgs/jobCal/jc1.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        overflow:hidden;
    }


    .el-carousel__item:nth-child(3n+1) {
        background-image: url("../../static/imgs/jobCal/jc2.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .el-carousel__item:nth-child(3n+2) {
        background-image: url("../../static/imgs/jobCal/jc3.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
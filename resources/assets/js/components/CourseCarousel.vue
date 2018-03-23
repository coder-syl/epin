<template>
    <el-carousel :interval="3000" arrow="always"  type="card" autoplay="true">
        <el-carousel-item v-for="item in 3" :key="item">
        </el-carousel-item>
    </el-carousel>
</template>

<style>


    .el-carousel__item:nth-child(2n) {
        background-image: url("./../static/cau1.jpg");
        background-repeat:no-repeat;
        background-size: 100% 100%;
    }

    .el-carousel__item:nth-child(2n+1) {
        background-image: url("./../static/cau2.jpg");
        background-repeat:no-repeat;
        background-size: 100% 100%;
    }
</style>
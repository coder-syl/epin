<template>
    <el-carousel :interval="5000" arrow="always">
        <el-carousel-item v-for="item in 3" :key="item">
        </el-carousel-item>
    </el-carousel>
</template>

<style>
    .el-carousel__item h3 {
        color: #475669;
        font-size: 18px;
        opacity: 0.75;
        line-height: 300px;
        margin: 0;
    }

    .el-carousel__item:nth-child(2n) {
        background-image: url("./../static/intro2.jpg");
        background-repeat:no-repeat;
        background-size: 100% 100%;
    }

    .el-carousel__item:nth-child(2n+1) {
        background-image: url("./../static/intro1.jpg");
        background-repeat:no-repeat;
        background-size: 100% 100%;
    }
</style>
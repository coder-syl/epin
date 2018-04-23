<template>
    <el-carousel :interval="3000" arrow="always"  height="300px">
        <el-carousel-item v-for="item in 3" :key="item">
        </el-carousel-item>
    </el-carousel>
</template>

<script>
    export default {
        name: "company-photo-carousel"
    }
</script>

<style scoped>
    .el-carousel__item:nth-child(3n+0) {
        background-image: url("http://img01.chrstatic.com/images/photo//201605/1463044794816wy48tp.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .el-carousel__item:nth-child(3n+1) {
        background-image: url("http://img01.chrstatic.com/images/photo//201605/1463044794634c8a97q.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .el-carousel__item:nth-child(3n+2) {
        background-image: url("http://img01.chrstatic.com/images/photo//201605/1463044825594m6v3he.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
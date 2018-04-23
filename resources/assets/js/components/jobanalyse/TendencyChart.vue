<template>
    <div class="chart" ref="chartOne" :style="{width: '600px', height: '300px'}">

    </div>
</template>


<script>
    let echarts = require('echarts/lib/echarts');
    require('echarts/lib/chart/pie');
    export default {
        data() {
            return {}
        },
        methods: {
            /*创建图表一*/
            createChartOne() {
                let chartOne = echarts.init(this.$refs.chartOne);

                chartOne.setOption({
                    title: {
                        text: 'Java开发工程师',
                        subtext: '最后三个月为预测结果，仅做参考',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} {c}"
                    },
                    xAxis: {
                        type: 'category',
                        data: ['January', 'February', 'March', 'April', 'May', 'June', 'July',
                            'August', 'September', 'October', 'November', 'December'],
                        name: '时间',
                        nameLocation: 'end',
                        "axisLabel": {
                            interval: 0,
                            rotate:30
                        },

                    },
                    yAxis: {
                        type: 'value',
                        name: '数量',
                        nameLocation: 'end',
                    },
                    series: [{
                        name: "数量",
                        data: [820, 932, 901, 934, 1290, 1330, 1320, 798, 987, 987, 689, 889],
                        type: 'line',
                        // smooth: true. //是否圆滑的线段
                    }]
                })
            }
        },
        mounted() {
            this.createChartOne();
        },
    }
</script>
<style scoped>
    .echarts {
        height: 300px;
    }
</style>
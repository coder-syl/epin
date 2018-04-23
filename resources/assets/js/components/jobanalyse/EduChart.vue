<template>
    <div ref="chartOne" :style="{width:'600px',height: '300px'}">
    </div>
</template>

<script>
    let echarts = require('echarts/lib/echarts');
    require('echarts/lib/chart/bar');
    export default {
        name: "edu-chart",
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
                        data: ['高中', '高职', '大专', '本科', '硕士', '博士', '其他'],
                        name: '时间',
                        nameLocation: 'end',
                        "axisLabel": {
                            interval: 0
                        }
                    },
                    yAxis: {
                        type: 'value',
                        name: '数量',
                        nameLocation: 'end',
                    },
                    series: [{
                        name: "数量",
                        data: [1200, 2000, 1500, 800, 700, 1100, 1300],
                        type: 'bar'
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

</style>
<template>

    <div  ref="chartOne" :style="{width:'600px',height: '300px'}">
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
                        subtext: '演示效果',
                        x: 'center'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c} ({d}%)"
                    },
                    legend: {
                        orient: 'vertical',
                        left: 'left',
                        data: ['3k-5k', '5k-7k', '7k-8k', '8k-9k', '>10k']
                    },
                    series: [
                        {
                            name: '区间',
                            type: 'pie',
                            radius: '55%',
                            center: ['50%', '60%'],
                            data: [
                                {value: 335, name: '3k-5k'},
                                {value: 310, name: '5k-7k'},
                                {value: 234, name: '7k-8k'},
                                {value: 135, name: '8k-9k'},
                                {value: 1548, name: '>10k'}
                            ],
                            itemStyle: {
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }
                    ]
                })
            }
        },
        mounted() {
            this.createChartOne();
        },
    }
</script>
<style scoped>
    /*.chart {*/
        /*height: 300px;*/
        /*width: 80%;*/
    /*}*/
</style>
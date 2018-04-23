<template>

    <div ref="chartOne" :style="{width:'300px',height: '300px'}">
    </div>

</template>


<script>
    let echarts = require('echarts/lib/echarts');
    require('echarts-wordcloud');
    export default {
        data() {
            return {}
        },
        methods: {
            /*创建图表一*/
            createChartOne() {
                let chartOne = echarts.init(this.$refs.chartOne);

                chartOne.setOption({
                    series: [
                        {
                            type: 'wordCloud',
                            gridSize:20,
                            sizeRange: [20, 50],
                            rotationRange: [-90, 90],
                            shape: 'pentagon',
                            textStyle: {
                                normal: {
                                    color: function () {
                                        var colors = ['#fda67e', '#81cacc', '#cca8ba', "#88cc81", "#82a0c5", '#fddb7e', '#735ba1', '#bda29a', '#6e7074', '#546570', '#c4ccd3'];
                                        return colors[parseInt(Math.random() * 10)];
                                        // return 'rgb(' + [
                                        //     Math.round(Math.random() * 255),
                                        //     Math.round(Math.random() * 255),
                                        //     Math.round(Math.random() * 255)
                                        // ].join(',') + ')';
                                    }
                                },
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowColor: '#333'
                                }
                            },
                            data: [
                                {
                                    name: 'java',
                                    value: 10000
                                }, {
                                    name: 'mysql',
                                    value: 6181
                                }, {
                                    name: 'html',
                                    value: 4386
                                }, {
                                    name: '数据库',
                                    value: 4055
                                }, {
                                    name: 'spring',
                                    value: 2467
                                }, {
                                    name: 'mybits',
                                    value: 2244
                                }, {
                                    name: 'css',
                                    value: 1898
                                }, {
                                    name: 'js',
                                    value: 1484
                                }, {
                                    name: 'UI',
                                    value: 1112
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }, {
                                    name: '算法',
                                    value: 965
                                }]
                        }
                    ]
                })
            }},

    mounted()
    {
        this.createChartOne();
    }
    ,
    }
</script>
<style scoped>
    /*.chart {*/
    /*height: 300px;*/
    /*width: 80%;*/
    /*}*/
</style>
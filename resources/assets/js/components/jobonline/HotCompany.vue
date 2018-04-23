<template>
    <div class="hotCompany_list">
        <ul class="hotCompany_list_1" v-for="i in 8">
            <li class="hotCompany_listItems">
                <div class="hotCompany_listItems_1">
                    <p>
                        <a href="">
                            <img src="../../static/imgs/comava.png"
                                 width="80" height="80" alt="">
                        </a>
                    </p>
                    <p class="hotcompanyName_1">
                        <a href="">在行</a>
                    </p>
                    <p class="hotcompanyName_2">
                        <span>O2O,数据服务</span>
                        <span>A轮</span>
                    </p>
                    <p class="hotcompanyName_3">Measure real experience.Drive real business.</p>
                </div>
                <div class="hotCompany_listItems_2">
                    <a href="" class="hotCompany_listItems_2_1">
                        <p class="green">
                            <span>20</span>
                        </p>
                        <p class="gray">面试评价</p>
                    </a>
                    <a href="" class="hotCompany_listItems_2_2">
                        <p class="green">
                            <span>5</span>
                        </p>
                        <p class="gray">在招职位</p>
                    </a>
                    <a href="" class="hotCompany_listItems_2_3">
                        <p class="green">
                            <span>100%</span>
                        </p>
                        <p class="gray">简历处理率</p>
                    </a>
                </div>
            </li>
        </ul>
        <p style="text-align:center;"><input type="submit" class="list_more_button" value="查看更多"></p>
    </div>
</template>

<script>

</script>
<style scoped>
    @import "../../static/css/jobonline/HotCompany.css";
</style>
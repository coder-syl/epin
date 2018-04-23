<template>
    <div class="page-width">
        <Nav></Nav>
        <CompanyDetail></CompanyDetail>
    </div>

</template>

<script>
    import  CompanyDetail from '../../components/share/CompanyDetail'
    import  Nav from '../../components/share/Nav'
    export default {
        name: "company",
        components:{
            CompanyDetail,
            Nav,
        }
    }
</script>

<style scoped>
    @import "../../static/css/share/common.css";
</style>
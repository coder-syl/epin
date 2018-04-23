<template>
    <div class="page-width">
        <Nav></Nav>
        <RecomPositionList></RecomPositionList>
    </div>

</template>

<script>
    import RecomPositionList from "../components/jonrecom/RecomPositionList.vue"
    import Nav from "../components/share/Nav.vue"

    export default {
        name: "job-recom",
        components: {
            Nav,
            RecomPositionList,
        }
    }
</script>

<style scoped>
    @import "../static/css/share/common.css";
</style>
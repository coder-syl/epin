<template>
    <div class="jobtrain">
        <course-carousel></course-carousel>
        <course-tabs></course-tabs>
    </div>
</template>

<script>
    import CourseCarousel from "./../components/CourseCarousel"
    import CourseTabs from './../components/CourseTabs'

    export default {
        name: "online-train",
        components: {
            CourseCarousel,
            CourseTabs
        }
    }
</script>

<style scoped>
    .jobtrain {

    }
</style>
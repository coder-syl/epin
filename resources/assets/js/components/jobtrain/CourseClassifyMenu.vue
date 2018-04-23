<template>
    <div class="sider_menu">
        <div class="menu1" v-for="courseClass in courseClasses">
            <div class="menu2">
                <div class="menu3">
                    <div class="menu_list">
                        <h2>{{courseClass.industry}}</h2>
                        <router-link v-for="i in courseClass.tagcourse.slice(0,2)" to="/" :key="i.tag">
                            {{i.tag }}
                        </router-link>
                        <i class="images1"></i>
                    </div>
                </div>
                <div class="menu4" >
                    <dl v-for="tc in courseClass.tagcourse">
                        <dt>
                            <span>{{tc.tag}}</span>
                        </dt>
                        <dd>
                            <a v-for="c in tc.course.slice(0,tc.course.count)" href="" class="dd1">{{c.course}}</a>

                        </dd>

                    </dl>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {

        data() {
            return {
                courseClasses: [],
            }
        },
        mounted() {
            var app = this;
            axios.get('api/courseClass')
                .then(function (resp) {
                    app.courseClasses = resp.data;
                })
                .catch(function (resp) {
                    alert("Could not load ");
                });
        }
    }
</script>

<style scoped>
    @import "../../static/css/jobonline/JobClassifymenu.css";
</style>
<template>
    <div class="sider_menu">
        <div class="menu1" v-for="pos in positions.slice(0,7)">
            <div class="menu2">
                <div class="menu3">
                    <div class="menu_list">
                        <h2>{{pos.tag}}</h2>
                        <router-link v-for="p in pos.position.slice(0,3)" :key="p.position"
                                     :to="{name: 'PositionList', params: {tag:p.position}}">
                            {{ p.position }}
                        </router-link>
                        <i class="images1"></i>
                    </div>
                </div>
                <div class="menu4">
                    <dl>
                        <dt>
                            <span>{{pos.tag}}</span>
                        </dt>
                        <dd>
                            <router-link v-for="p in pos.position.slice(3)" :key="p.position"
                                         :to="{name: 'PositionList', params: {tag:p.position}}" class="dd1">{{ p.position }}</router-link>
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
        name: "job-classify-menu",
        data() {
            return {
                positions: []
            }
        },
        mounted() {
            var app = this;
            axios.get('api/onlineJob')
                .then(function (resp) {
                    app.positions = resp.data;
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
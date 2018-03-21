/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue' //引入vue
import VueRouter from 'vue-router'//引入vue-router
import ElementUI from 'element-ui';//引入element-ui
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(VueRouter)//使用vue-router
Vue.use(ElementUI)//使用element-ui

import App from "./App.vue"
import Home from "./page/Home"//主页
import About from "./page/About"//关于
import JobOnline from "./page/JobOnline"//在线招聘
import JobAnalyse from "./page/JobAnalyse"//行业分析
import JobRecom from "./page/JobRecom"//岗位推荐
import JobTrain from "./page/JobTrain"//在线培训
import JobSkill from "./page/JobSkill"//在线培训

const router = new VueRouter({//定义路由
    // mode: 'history',      //history模式去掉了# 但是需要配置后台
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
        },
        {
            path: '/about',
            name: 'About',
            component: About,
        },
        {
            path: '/JobOnline',
            name: 'JobOnline',
            component: JobOnline,
        },
        {
            path: '/JobAnalyse',
            name: 'JobAnalyse',
            component: JobAnalyse,
        },
        {
            path: '/JobRecom',
            name: 'JobRecom',
            component: JobRecom,
        },
        {
            path: '/JobTrain',
            name: 'JobTrain',
            component: JobTrain,
        },
        {
            path: '/JobSkill',
            name: 'JobSkill',
            component: JobSkill,
        }
    ],
});
const app = new Vue({//实例化Vue
    el: '#app',
    components: {App},
    router,
});


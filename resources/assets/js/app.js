/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue' //引入vue
import VueRouter from 'vue-router'//引入vue-router
import ElementUI from 'element-ui';//引入element-ui
import 'vue-area-linkage/dist/index.css'; // v2 or higher
import VueAreaLinkage from 'vue-area-linkage';
import Croppa from 'vue-croppa';
import 'element-ui/lib/theme-chalk/index.css';
import echarts from 'echarts';
require('echarts-wordcloud');
// Vue.prototype.$echarts = echarts

Vue.use(VueRouter);//使用vue-router
Vue.use(ElementUI);//使用element-ui
Vue.use(VueAreaLinkage);
Vue.use(Croppa);

import App from "./App.vue"
import Home from "./page/Home"//主页
import About from "./page/About"//关于
import JobOnline from "./page/jobonline/JobOnline"//在线招聘
import JobInfo from "./page/jobonline/JobInfo"//在线招聘
import JobAnalyse from "./page/JobAnalyse"//行业分析
import JobRecom from "./page/JobRecom"//岗位推荐
import JobTrain from "./page/JobTrain/JobTrain"//在线培训
import JobSkill from "./page/JobSkill"//在线培训
import  PositionList from "./page/jobonline/PositionList"
import personLogin from "./page/personalUser/personLogin"
import personRegister from "./page/personalUser/personRegister"
import PersonalInfo from "./page/personalUser/PersonalInfo"
import AddPersonalInfo from "./page/personalUser/AddPersonalInfo"
import Company from "./page/CompanyUser/Company"
import CompanyRegister from "./page/CompanyUser/CompanyRegister"
import CompanyLogin from "./page/CompanyUser/CompanyLogin"
import VideoPlay from "./page/JobTrain/VideoPlay"
const router = new VueRouter({//定义路由
    // mode: 'history',      //history模式去掉了# 但是需要配置后台
    routes: [
        {
            path: '/',
            name: 'Home',
            component: JobOnline,
        },
        {
            path: '/personlogin',
            name: 'personlogin',
            component: personLogin,
        },
        {
            path: '/personregister',
            name: 'personRegister',
            component: personRegister,
        },
        {
            path: '/personalinfo',
            name: 'personalinfo',
            component: PersonalInfo,
        }
        ,{
            path: '/addpersonalinfo',
            name: 'addPersonalInfo',
            component: AddPersonalInfo ,
        },
        {
            path: '/companyinfo',
            name: 'company',
            component: Company,
        },
        {
            path: '/companylogin',
            name: 'companyLogin',
            component: CompanyLogin,
        },
        {
            path: '/companyregister',
            name: 'companyRegister',
            component: CompanyRegister,
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
            path: '/PositionList/:tag',
            name: "PositionList",
            component: PositionList,
        },
        {
            path: '/JobInfo',
            name: "JobInfo",
            component: JobInfo,
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
        },
        {
            path: '/VideoPlay',
            name: 'VideoPlay',
            component: VideoPlay,
        }
    ],
});
const app = new Vue({//实例化Vue
    el: '#app',
    components: {App},
    router,
});


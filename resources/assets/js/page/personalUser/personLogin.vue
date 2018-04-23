<template>
    <div class="bg">
        <div class="formwidth">
            <div class="form-comment">
                <h3>登录</h3>
                <el-form :label-position="labelPosition" :model="ruleForm" :rules="rules" ref="ruleForm"
                         label-width="15%" class="username">
                    <el-form-item label="用户名" prop="username">
                        <el-input type="text" v-model="ruleForm.username" class="inputtext"></el-input>
                    </el-form-item>
                    <el-form-item label="邮箱" prop="email">
                        <el-input type="text" v-model="ruleForm.email" class="inputtext"></el-input>
                    </el-form-item>
                    <el-form-item label="密码" prop="password">
                        <el-input type="password" v-model="ruleForm.password" class="inputtext"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="login('ruleForm')">立即登录</el-button>
                        <el-button @click="toRegister" class="button-right">尚未注册？去注册</el-button>
                    </el-form-item>
                </el-form>
            </div>
        </div>
    </div>
</template>

<script>
    import {setCookie} from '../../static/js/cookie.js';
    import axios from "axios"
    export default {
        name: "personlogin",
        data() {
            var validateUserName = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请输入用户名'));
                } else {
                    callback();
                }
            };
            var validateEmail = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请输入邮箱'));
                } else {
                    var regEmail = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    if (!regEmail.test(value)) {
                        callback(new Error("邮箱格式不正确"));
                    } else {
                        callback();
                    }
                }
            };
            var validatePassword = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请输入密码'));
                } else {
                    callback();
                }
            };
            return {
                labelPosition: 'left',
                ruleForm: {
                    username: '',
                    email: '',
                    password: '',
                },
                rules: {
                    username: [
                        {validator: validateUserName, trigger: 'blur'}
                    ],
                    email: [
                        {validator: validateEmail, trigger: 'blur'}
                    ],
                    password: [
                        {validator: validatePassword, trigger: 'blur'}
                    ],
                }
            }
        },
        methods: {
            login: function (formName) {
                let app=this;
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        axios.get('api/checkLogin?email='+app.ruleForm.email+'&password='+app.ruleForm.password
                        ).then(function (resp){
                            setCookie('username', app.ruleForm.username,'usertype','personal' ,1000 * 60);
                            if (resp.data.message === 'success') {

                                app.$message({
                                    showClose: true,
                                    message: '登录成功',
                                    type: 'success'
                                });

                                app.$router.push({name: 'Home'});
                            } else if (resp.data.message === 'fail') {
                                app.$message({
                                    showClose: true,
                                    message: '登录失败，请检查邮箱是否正确',
                                    type: 'error'
                                });
                            }else if (resp.data.message==='pwwrong'){
                                app.$message({
                                    showClose: true,
                                    message: '登录失败，请检查密码是否正确',
                                    type: 'error'
                                });
                            }
                        })
                    }
                })
            },
            toRegister: function () {
                this.$router.push({name: 'personRegister'})
            },
        },
    }
</script>

<style scoped>
    .bg {
        width: 100%;
        height: 800px;
        background-image: url("../../static/imgs/loginbg.jpg");
        background-size: 800px 800px;
    }

    .formwidth {
        width: 40%;
        margin: auto;
        margin-top: 150px;
        /*border: 1px solid #9b8a30;*/
        border-radius: 5px;
        /*box-shadow: -1px 0 0 #cccccc,1px 0 0 #cccccc,0 0 0 #cccccc,0 1px 0 #cccccc;*/
    }

    .form-comment {
        width: 75%;
        margin: 0 auto;
    }

    .button-right {
        float: right;
    }
</style>
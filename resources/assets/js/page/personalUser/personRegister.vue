<template>
    <div class="bg">
    <div class="formwidth">
        <div class="form-comment">
            <h3>注册</h3>
            <el-form :label-position="labelPosition" :model="ruleForm" :rules="rules" ref="ruleForm"
                     label-width="15%">
                <el-form-item label="姓名" prop="username">
                    <el-input type="text" v-model="ruleForm.username"></el-input>
                </el-form-item>
                <el-form-item label="邮箱" prop="email">
                    <el-input type="text" v-model="ruleForm.email"></el-input>
                </el-form-item>
                <el-form-item label="密码" prop="password">
                    <el-input type="password" v-model="ruleForm.password" auto-complete="off"></el-input>
                </el-form-item>
                <el-form-item label="确认密码" prop="checkPassword">
                    <el-input type="password" v-model="ruleForm.checkPassword" auto-complete="off"></el-input>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="register('ruleForm')">立即注册</el-button>
                    <el-button @click="toLogin" class="button-right">已有账号！去登录</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
    </div>
</template>

<script>
    import axios from "axios"
    import {setCookie} from '../../static/js/cookie.js';

    export default {
        name: "person-register",
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
                    if (this.ruleForm.checkPassword !== '') {
                        this.$refs.ruleForm.validateField('checkPassword');
                    }
                    callback();
                }
            };
            var validateCheckPassword = (rule, value, callback) => {
                if (value === '') {
                    callback(new Error('请再次输入密码'));
                } else if (value !== this.ruleForm.password) {
                    callback(new Error('两次输入密码不一致!'));
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
                    checkPassword: '',
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
                    checkPassword: [
                        {validator: validateCheckPassword, trigger: 'blur'}
                    ],
                }
            }
        },
        methods: {
            toLogin: function () {
                this.$router.push({name: 'personlogin'})
            },
            register: function (formName) {
                var app = this;
                this.$refs[formName].validate((valid) => {
                    if (valid) {

                        axios.post('api/personalRegister', {
                            username: this.ruleForm.username,
                            email: this.ruleForm.email,
                            password: this.ruleForm.password
                        }).then(function (resp) {
                                if (resp.data.message === 'success') {
                                    setCookie('username', app.ruleForm.username,'usertype','personal' ,1000 * 60);
                                    // setCookie('username', app.ruleForm.username, 1000 * 60);
                                    app.$message({
                                        showClose: true,
                                        message: '注册成功',
                                        type: 'success'
                                    });
                                    app.$router.push({name: 'Home'});
                                } else if (resp.data.message === 'fail') {
                                    app.$message({
                                        showClose: true,
                                        message: '注册失败',
                                        type: 'error'
                                    });
                                } else if (resp.data.message === 'repeat') {
                                    app.$message({
                                        showClose: true,
                                        message: '邮箱已被注册',
                                        type: 'error'
                                    });
                                }

                            }
                        );
                    } else {
                        console.log('error submit!!');
                        // return false;
                    }
                });
            }
        }
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
        border: 1px solid #9b8a30;
        border-radius: 5px;
        box-shadow: -1px 0 0 #cccccc, 1px 0 0 #cccccc, 0 0 0 #cccccc, 0 1px 0 #cccccc;
    }

    .form-comment {
        width: 75%;
        margin: 0 auto;
    }

    .button-right {
        float: right;
    }
</style>
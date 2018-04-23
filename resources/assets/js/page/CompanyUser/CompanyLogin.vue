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
    export default {
        name: "company-login",
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
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        setCookie('username', this.ruleForm.username, 'usertype','company',1000 * 60);
                        this.$message({
                            showClose: true,
                            message: '登录成功',
                            type: 'success'
                        });
                        setTimeout(function () {
                            this.$router.push({name: 'Home'});
                        }.bind(this), 5000);
                    } else {
                        console.log('error submit!!');
                        // return false;
                    }
                });
            },
            toRegister: function () {
                this.$router.push({name: 'companyRegister'})
            },
        },
    }
</script>

<style scoped>

</style>
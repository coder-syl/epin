<template>
    <div class="base-info">

        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
            <!--<el-form-item>-->
                <!--<croppa v-model="croppa"-->
                        <!--:width="200"-->
                        <!--:height="200"-->
                        <!--placeholder="上传照片"-->
                        <!--:placeholder-font-size="14"-->
                        <!--:placeholder-color="'#409EFF'"-->
                        <!--:disabled="false"-->
                        <!--:prevent-white-space="false"-->
                        <!--:show-remove-button="true"-->
                        <!--:canvas-color="'#DDDDDD'"-->
                        <!--@file-choose="handleCroppaFileChoose"-->
                        <!--@file-size-exceed="handleCroppaFileSizeExceed"-->
                        <!--@file-type-mismatch="handleCroppaFileTypeMismatch"-->
                        <!--@image-remove="handleImageRemove"-->
                        <!--@move="handleCroppaMove"-->
                        <!--@zoom="handleCroppaZoom">-->
                <!--</croppa>-->
            <!--</el-form-item>-->
            <el-form-item label="真实姓名" prop="name">
                <el-input v-model="ruleForm.name"></el-input>
            </el-form-item>

            <el-form-item label="出生日期" required>
                <el-col :span="11">
                    <el-form-item prop="birthday">
                        <el-date-picker type="date" placeholder="选择日期" v-model="ruleForm.birthday"
                                        style="width: 100%;"></el-date-picker>
                    </el-form-item>
                </el-col>
            </el-form-item>
            <el-form-item label="毕业时间" required>
                <el-col :span="11">
                    <el-form-item prop="gradday">
                        <el-date-picker type="date" placeholder="选择时间" v-model="ruleForm.gradday"
                                        style="width: 100%;"></el-date-picker>
                    </el-form-item>
                </el-col>
            </el-form-item>

            <el-form-item label="手机号码" prop="telephone">
                <el-input v-model="ruleForm.telephone"></el-input>
            </el-form-item>

            <el-form-item label="电子邮箱" prop="email">
                <el-input v-model="ruleForm.email"></el-input>
            </el-form-item>

            <el-form-item label="当前住址" prop="address">
                <area-select type="text" :placeholders="['选择省','选择市']" v-model="ruleForm.address"></area-select>
            </el-form-item>

            <el-form-item>
                <el-button type="primary" @click="addBaseInfo('ruleForm')">立即创建</el-button>
                <el-button @click="resetForm('ruleForm')">重置</el-button>
            </el-form-item>
        </el-form>

    </div>
</template>
<script>
    import axios from "axios"

    export default {
        data() {
            var checkPhone = (rule, value, callback) => {
                if (value.length != 11) {
                    callback(new Error('请检查联系方式是否正确'));
                } else {
                    callback();
                }
            };
            return {
                ruleForm: {
                    name: '',
                    birthday: '',
                    gradday: '',
                    telephone: '',
                    email: '',
                    address: [],
                },
                rules: {
                    name: [
                        {required: true, message: '请输入真实姓名', trigger: 'blur'},
                        {min: 3, max: 5, message: '长度在 3 到 5 个字符', trigger: 'blur'}
                    ],
                    birthday: [
                        {type: 'date', required: true, message: '请选择出生日期', trigger: 'change'}
                    ],
                    gradday: [
                        {type: 'date', required: true, message: '请选择时间', trigger: 'change'}
                    ],
                    telephone: [
                        {required: true, validator: checkPhone, message: '请输入联系方式', trigger: 'blur'}
                    ],
                    email: [
                        {type: 'email', required: true, message: '请输入邮箱', trigger: 'blur'}
                    ],
                    address: [
                        {required: true, message: '请选择现居地', trigger: 'blur'}
                    ],
                }
            };
        },
        methods: {

            addBaseInfo(formName) {
                let app = this;
                this.$refs[formName].validate((valid) => {
                    if (valid) {
                        console.log(this.ruleForm.address[0] + this.ruleForm.address[1]);
                        axios.post('api/addBaseInfo', {
                            username: app.ruleForm.username,
                            birthday: app.ruleForm.birthday,
                            gradday: app.ruleForm.gradday,
                            telephone: app.ruleForm.telephone,
                            email: app.ruleForm.email,
                            address: app.ruleForm.address[0] + app.ruleForm.address[1],
                        }).then(function (resp) {
                                if (resp.data.message === 'success') {
                                    app.$message({
                                        showClose: true,
                                        message: '更新个人信息成功',
                                        type: 'success'
                                    });
                                    app.$router.push({name: 'addPersonalInfo'});
                                } else if (resp.data.message === 'fail') {
                                    app.$message({
                                        showClose: true,
                                        message: '更新个人信息失败',
                                        type: 'error'
                                    });
                                }
                            }
                        );
                    } else {
                        app.$message({
                            showClose: true,
                            message: '更新个人信息失败',
                            type: 'error'
                        });
                    }
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>
<style>
    .base-info {
        width: 50%;
        margin-left: 5%;
    }

    .area-select .area-selected-trigger {
        padding: 0px 0px 0px 10px;
    }
</style>
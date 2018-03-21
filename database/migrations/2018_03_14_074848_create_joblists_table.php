<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoblistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');//公司名称
            $table->string('positionName');//岗位名称
            $table->string('adr');//公司地址
            $table->string('edu');//学历
            $table->integer('exp');//经验
            $table->integer('lowmoney');// 工资下限
            $table->integer('highmoney');//工资上限
            $table->integer('year');//发布年份
            $table->integer('curmon');//发布月份
            $table->string('jobclass');//职类
            $table->string('industry');//行业
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joblists');
    }
}

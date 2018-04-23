<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDescriptionOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('edu')->nullable()->change();;
            $table->string('exp')->nullable()->change();;
            $table->string('telephone',11)->nullable()->change();;
            $table->string('adr')->nullable()->change();;
            $table->string('school')->nullable()->change();;
            $table->date('gradtime')->nullable()->change();;
            $table->string('expectmoney')->nullable()->change();;
            $table->string('expectadr')->nullable()->change();;
            $table->string('expectposiiton')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

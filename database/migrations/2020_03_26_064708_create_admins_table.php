<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role_id'); # 用户角色ID
            $table->string('username'); # 用户名
            $table->string('password'); # 密码
            $table->char('mobile', 11)->nullable(); # 手机号
            $table->string('email', 32)->nullable(); # 邮箱
            $table->enum('gender', [1,2,3])->default('1');  # 用户性别 1男2女3隐藏
            $table->enum('status', [1,2])->default('2');  # 用户状态 1 黑名单，2 正常
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

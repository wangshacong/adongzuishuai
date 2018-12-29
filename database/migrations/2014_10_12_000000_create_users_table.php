<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('username')->comment('用户名');
			$table->integer('age')->comment('年龄')->nullable();
			$table->enum('sex', ['0', '1'])->comment('性别')->nullable();
			$table->string('upic')->comment('头像')->nullable()->default('/default/1.jpg');
			$table->string('email')->unique()->comment('邮箱')->nullable();
			$table->string('password')->comment('密码');
			$table->integer('status')->comment('状态')->nullable();
			$table->string('uaddr')->comment('地址')->nullable();
			$table->string('tel')->comment('电话')->nullable();
			$table->integer('score')->comment('积分')->nullable();
			$table->enum('auth', ['0', '1'])->comment('权限')->nullable();
			$table->string('name')->comment('微博id')->nullable();
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
        Schema::dropIfExists('users');
    }
}

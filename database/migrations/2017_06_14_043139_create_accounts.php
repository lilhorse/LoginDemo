<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('password')->nullable();
            $table->string('open_id')->nullable();
            $table->string('token')->nullable();
            $table->tinyInteger('register_way')->default(0);//0-微信，1-qq，2-微博，3-手机，4-邮箱
            $table->string('nickname', 50)->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('sex')->default(0);//0-未知，1-男，2-女
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}

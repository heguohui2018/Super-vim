<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarAndIntroductionToUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function (Blueprint $table) {
			// 设计两个字段,字段类型可为空
			//avatar 头像
			$table->string('avatar')->nullable();
			/* introduction 个人简介 */
			$table->string('introduction')->nullable();
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
			$table->dropColumn('avatar');
			$table->dropColumn('introduction');
		});
	}
}

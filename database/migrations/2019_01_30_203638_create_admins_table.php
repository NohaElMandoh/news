<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191);
			$table->string('password', 191);

            $table->string('email', 191);
			$table->string('api_token', 191);
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}
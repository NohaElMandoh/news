<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 191);
			$table->text('desc');
			$table->text('img');
			$table->integer('category_id');
			$table->integer('admin_id');
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}
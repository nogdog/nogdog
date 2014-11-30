<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reviews', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->integer('book_id')->unsigned();
			$table->integer('media_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('rating')->unsigned();
			$table->string('heading')->nullable();
			$table->text('review')->nullable();
			$table->integer('status')->unsigned();
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
		Schema::table('reviews', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

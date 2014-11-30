<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookToGenreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('book_to_genre', function(Blueprint $table)
		{
			$table->create();
			$table->integer('book_id')->unsigned();
			$table->integer('genre_id')->unsigned();
			$table->primary(array('book_id', 'genre_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('book_to_genre', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

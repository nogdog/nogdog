<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorToBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('author_to_book', function(Blueprint $table)
		{
			$table->create();
			$table->integer('author_id')->unsigned();
			$table->integer('book_id')->unsigned();
			$table->timestamps();
			$table->primary(array('author_id', 'book_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('author_to_book', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->date('pub_date')->nullable();
			$table->text('description')->nullable();
			$table->integer('format_id')->nullable();
			$table->string('isbn')->nullable();
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
		Schema::table('books', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

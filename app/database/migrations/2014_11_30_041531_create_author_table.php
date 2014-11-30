<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('last_name');
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('name_suffix')->nullable();
			$table->timestamps();
			$table->unique(array('last_name', 'first_name', 'middle_name', 'name_suffix'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

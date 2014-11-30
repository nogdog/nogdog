<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('media', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->text('description')->nullable();
		});
		DB::table('media')->insert(
            array(
                'name' => 'hardcover'
            )
        );
		DB::table('media')->insert(
            array(
                'name' => 'paperback'
            )
        );
		DB::table('media')->insert(
            array(
                'name' => 'e-book'
            )
        );
		DB::table('media')->insert(
            array(
                'name' => 'audio book'
            )
        );
		DB::table('media')->insert(
            array(
                'name' => 'other'
            )
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('media', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

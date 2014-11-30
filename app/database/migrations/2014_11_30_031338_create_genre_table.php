<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('genres', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->text('description')->nullable();
		});
		DB::table('genres')->insert(
            array(
                'name' => 'classic'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'crime/detective'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'fable/fairy tale'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'fan fiction'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'fantasy'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'folklore/mythology'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'historical fiction'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'horror'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'humor'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'mystery'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'poetry'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'science fiction'
            )
        );
		DB::table('genres')->insert(
            array(
                'name' => 'suspense/thriller'
            )
        );
		DB::table('genres')->insert(
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
		Schema::table('genres', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

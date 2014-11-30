<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('formats', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('name')->unique();
			$table->string('description')->nullable();
		});
		DB::table('formats')->insert(
            array(
                'name' => 'comic/graphic novel'
            )
        );
		DB::table('formats')->insert(
            array(
                'name' => 'novel'
            )
        );
		DB::table('formats')->insert(
            array(
                'name' => 'short story'
            )
        );
		DB::table('formats')->insert(
            array(
                'name' => 'collection'
            )
        );
		DB::table('formats')->insert(
            array(
                'name' => 'drama/script'
            )
        );
		DB::table('formats')->insert(
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
		Schema::table('formats', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

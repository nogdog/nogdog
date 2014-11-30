<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_types', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('type')->unique();
		});
		DB::table('user_types')->insert(
            array(
                'type' => 'normal'
            )
        );
		DB::table('user_types')->insert(
            array(
                'type' => 'moderator'
            )
        );
		DB::table('user_types')->insert(
            array(
                'type' => 'admin'
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
		Schema::table('user_types', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

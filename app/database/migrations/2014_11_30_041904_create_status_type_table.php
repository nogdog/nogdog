<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('status_types', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id')->unsigned();
			$table->string('status')->unique();
		});
		DB::table('status_types')->insert(
            array(
                'status' => 'approved'
            )
        );
		DB::table('status_types')->insert(
            array(
                'status' => 'pending'
            )
        );
		DB::table('status_types')->insert(
            array(
                'status' => 'suppressed'
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
		Schema::table('status_types', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}

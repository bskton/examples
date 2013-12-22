<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsersAddUsername extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('users', function($table)
        {
            $table->string('username');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('users', function($table)
        {
            $table->dropColumn('username');
        });
	}

}

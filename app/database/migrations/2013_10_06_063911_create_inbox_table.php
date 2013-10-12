<?php

use Illuminate\Database\Migrations\Migration;

class CreateInboxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
				 Schema::create('tbl_inbox', function($table)
    {
        $table->increments('id');
        $table->string('sms_from');
        $table->string('sms_to');
		$table->string('sms_body');
		$table->string('sms_date');
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
		  Schema::drop('tbl_inbox');
	}

}
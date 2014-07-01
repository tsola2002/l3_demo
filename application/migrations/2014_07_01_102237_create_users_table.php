<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table)
        {
            //
            $table->increments('id');
            $table->string('name');
            $table->text('body');
            $table->boolean('activated')->default(0);
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('users');
	}

}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirtujuanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dirtujuan', function(Blueprint $table)
		{
			$table->integer('id_dirtujuan',true);
			$table->mediumText('tujuan')->nullable();
			$table->string('tahun_penetapan', 4);
			$table->enum('status', array('N','Y'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dirtujuan');
	}

}

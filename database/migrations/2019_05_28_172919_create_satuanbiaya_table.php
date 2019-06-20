<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSatuanbiayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('satuanbiaya', function(Blueprint $table)
		{
			$table->integer('id_satuanbiaya', true);
			$table->string('namabarang', 200)->nullable();
			$table->integer('id_satuan')->nullable();
			$table->float('hargasatuan', 10, 0)->nullable();
			$table->string('acuan', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('satuanbiaya');
	}

}

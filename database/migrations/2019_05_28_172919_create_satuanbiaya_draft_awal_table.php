<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSatuanbiayaDraftAwalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('satuanbiaya_draft_awal', function(Blueprint $table)
		{
			$table->integer('id_satuanbiaya', true);
			$table->string('namabarang', 200)->nullable();
			$table->string('id_satuan', 50)->nullable();
			$table->float('hargasatuan', 10, 0)->nullable();
			$table->string('acuan', 200)->nullable();
			$table->string('akun', 6)->nullable();
			$table->string('kelompok', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('satuanbiaya_draft_awal');
	}

}

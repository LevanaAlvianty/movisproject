<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefBarangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ref_barang', function(Blueprint $table)
		{
			$table->integer('id_barang')->default(0)->primary();
			$table->string('kode_barang', 10)->nullable();
			$table->string('akun', 6)->nullable();
			$table->string('nama_barang', 200)->nullable();
			$table->string('satuan', 100)->nullable();
			$table->decimal('nominal', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ref_barang');
	}

}

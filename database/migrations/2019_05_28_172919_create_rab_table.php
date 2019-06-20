<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rab', function(Blueprint $table)
		{
			$table->integer('id_rab', true);
			$table->integer('id_kegiatan')->nullable();
			$table->integer('id_barang')->nullable();
			$table->float('harga', 11, 0)->nullable();
			$table->float('jumlah', 11, 0)->nullable();
			$table->float('total', 11, 0)->nullable();
			$table->string('akun', 6)->nullable();
			$table->dateTime('waktu')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rab');
	}

}

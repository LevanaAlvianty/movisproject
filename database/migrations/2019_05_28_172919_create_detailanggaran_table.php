<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailanggaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detailanggaran', function(Blueprint $table)
		{
			$table->integer('id_detailanggaran', true);
			$table->integer('id_kegiatan')->nullable()->index('id_kegiatanidx');
			$table->string('id_satuanbiaya', 50)->nullable();
			$table->string('namabarang')->nullable();
			$table->string('satuan', 100)->nullable();
			$table->float('harga', 10, 0)->nullable();
			$table->float('jumlah', 10, 0)->nullable();
			$table->float('frequensi', 10, 0)->nullable()->default(1);
			$table->string('satuanfrequensi', 100)->nullable();
			$table->float('frequensi2', 10, 0)->nullable()->default(1);
			$table->string('satuanfrequensi2', 100)->nullable();
			$table->float('total', 10, 0)->nullable();
			$table->mediumText('keterangan',191)->nullable();
			$table->string('akun', 6)->nullable();
			$table->string('username', 50)->nullable();
			$table->string('kelompok', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detailanggaran');
	}

}

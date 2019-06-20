<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRekapKegiatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekap_kegiatan', function(Blueprint $table)
		{
			$table->integer('id_rekap', true);
			$table->string('rekap', 200)->nullable();
			$table->string('tabel', 100)->nullable();
			$table->string('field', 100)->nullable();
			$table->string('value', 100)->nullable();
			$table->integer('urutan')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rekap_kegiatan');
	}

}

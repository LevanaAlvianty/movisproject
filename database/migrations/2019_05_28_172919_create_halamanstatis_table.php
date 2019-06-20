<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHalamanstatisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('halamanstatis', function(Blueprint $table)
		{
			$table->integer('id_halaman', true);
			$table->string('judul', 100);
			$table->text('isi_halaman', 65535);
			$table->date('tgl_posting');
			$table->string('gambar', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('halamanstatis');
	}

}

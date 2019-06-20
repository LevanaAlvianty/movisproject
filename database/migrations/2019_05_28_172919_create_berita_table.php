<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeritaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('berita', function(Blueprint $table)
		{
			$table->integer('id_berita', true);
			$table->integer('id_kategori');
			$table->string('username', 30);
			$table->string('judul', 100);
			$table->string('judul_seo', 100);
			$table->enum('headline', array('Y','N'))->default('Y');
			$table->text('isi_berita', 65535);
			$table->string('hari', 20);
			$table->date('tanggal');
			$table->time('jam');
			$table->string('gambar', 100);
			$table->integer('dibaca')->default(1);
			$table->string('tag', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('berita');
	}

}

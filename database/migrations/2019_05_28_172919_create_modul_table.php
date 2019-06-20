<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modul', function(Blueprint $table)
		{
			$table->integer('id_modul', true);
			$table->string('nama_modul', 50);
			$table->string('link', 100);
			$table->text('static_content', 65535);
			$table->string('gambar', 100);
			$table->enum('publish', array('Y','N'))->default('Y');
			$table->enum('status', array('user','reviewkeu','pimpinan','all','adminsbu','admin'));
			$table->enum('aktif', array('Y','N'))->default('Y');
			$table->integer('urutan');
			$table->string('link_seo', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modul');
	}

}

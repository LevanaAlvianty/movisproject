<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalleryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery', function(Blueprint $table)
		{
			$table->integer('id_gallery', true);
			$table->integer('id_album');
			$table->string('jdl_gallery', 100);
			$table->string('gallery_seo', 100);
			$table->text('keterangan', 65535);
			$table->string('gbr_gallery', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gallery');
	}

}

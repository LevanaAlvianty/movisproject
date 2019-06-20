<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewValKeuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review_val_keu', function(Blueprint $table)
		{
			$table->integer('id_review_val_keu', true);
			$table->integer('id_kegiatan')->nullable();
			$table->string('review1', 191)->nullable();
			$table->dateTime('tgl_review')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('review_val_keu');
	}

}

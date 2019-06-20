<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewKeuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review_keu', function(Blueprint $table)
		{
			$table->integer('id_reviewkeu', true);
			$table->integer('id_kegiatan')->nullable();
			$table->string('rreview1', 2)->nullable();
			$table->text('review1', 65535)->nullable();
			$table->string('rreview2', 2)->nullable();
			$table->text('review2', 65535)->nullable();
			$table->string('rreview3', 3)->nullable();
			$table->text('review3', 65535)->nullable();
			$table->string('rreview4', 2)->nullable();
			$table->text('review4', 65535)->nullable();
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
		Schema::drop('review_keu');
	}

}

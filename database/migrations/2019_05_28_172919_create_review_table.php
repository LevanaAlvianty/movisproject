<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review', function(Blueprint $table)
		{
			$table->integer('id_review', true);
			$table->integer('id_kegiatan')->nullable();
			$table->text('review', 65535)->nullable();
			$table->text('rsasaran', 65535)->nullable();
			$table->enum('rrsasaran', array('N','Y'))->nullable();
			$table->text('rprogutama', 65535)->nullable();
			$table->enum('rrprogutama', array('Y','N'))->nullable();
			$table->text('rikuikk', 65535)->nullable();
			$table->enum('rrikuikk',['Y','N'])->nullable();
			
			$table->text('rindikin', 65535)->nullable();
			$table->enum('rrindikin', array('Y','N'))->nullable();
			$table->text('rjudul', 65535)->nullable();
			$table->enum('rrjudul', array('Y','N'))->nullable();
			$table->text('rlatarbelakang', 65535)->nullable();
			$table->enum('rrlatarbelakang', array('Y','N'))->nullable();
			$table->text('rtujuankeg', 65535)->nullable();
			$table->enum('rrtujuankeg', array('Y','N'))->nullable();
			$table->text('rbasis', 65535)->nullable();
			$table->enum('rrbasis', array('Y','N'))->nullable();
			$table->text('rjenis', 65535)->nullable();
			$table->enum('rrjenis', array('Y','N'))->nullable();
			$table->text('rmekanisme', 65535)->nullable();
			$table->enum('rrmekanisme', array('Y','N'))->nullable();
			$table->text('rindiout', 65535)->nullable();
			$table->enum('rrindiout', array('Y','N'))->nullable();
			$table->dateTime('tgl_update')->nullable();
			$table->char('status_edit', 1)->nullable();
			$table->enum('rrsasan', array('N','Y'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('review');
	}

}

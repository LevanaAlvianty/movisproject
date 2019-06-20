<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKegiatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kegiatan', function(Blueprint $table)
		{
			$table->integer('id_kegiatan', true);
			$table->string('username', 50)->nullable();
			$table->mediumText('namakegiatan')->nullable();
			$table->integer('id_dirtujuan')->nullable()->default(0);
			$table->integer('id_renstra')->nullable()->default(0);
			$table->integer('id_dirprogutama')->nullable()->default(0);
			$table->integer('id_dirkegiatan')->nullable()->default(0);
			$table->integer('id_dirindikator')->nullable()->default(0);
			$table->mediumText('id_dirikp')->nullable();
			$table->dateTime('tglinput')->nullable();
			$table->decimal('perkiraanbiaya', 11, 0)->nullable();
			$table->date('tgl_mulai')->nullable();
			$table->date('tgl_selesai')->nullable();
			$table->string('nip', 20)->nullable()->default('197706142000121001');
			$table->text('latarbelakang', 65535)->nullable();
			$table->text('tujuan', 65535)->nullable();
			$table->string('thnang', 4)->nullable()->default('2019');
			$table->integer('id_kelang')->nullable()->default(0);
			$table->integer('id_jenis')->nullable()->default(0);
			$table->string('status_kirim', 1)->nullable()->default('0');
			$table->integer('id_basis')->nullable();
			$table->integer('id_keputusan')->nullable();
			$table->string('id_user_keputusan', 50)->nullable();
			$table->dateTime('tgl_keputusan')->nullable();
			$table->string('status_kirimkeu', 2)->nullable();
			$table->integer('id_rev_keu')->nullable();
			$table->integer('id_rev_spi')->nullable();
			$table->string('status_kirim_val_keu', 2)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kegiatan');
	}

}

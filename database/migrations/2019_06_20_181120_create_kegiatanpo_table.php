<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatanpo', function (Blueprint $table) {
            $table->bigIncrements('id')->increments();
            $table->text('nama_kegiatan');
            $table->unsignedInteger('id_jurbagnitpus');
            $table->string('pimpinan')->nullable();
            $table->string('nip_pic')->nullable();
            $table->string('reviewer_spi')->nullable();
            $table->string('reviewer_ang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatanpo');
    }
}

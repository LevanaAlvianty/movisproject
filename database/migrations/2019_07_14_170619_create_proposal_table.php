<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_kegiatan')->nullable();
            $table->unsignedInteger('id_kodeunit')->nullable();
            $table->unsignedInteger('nip_pelaksana')->nullable();
            $table->unsignedInteger('id_kelang')->nullable();
            $table->unsignedInteger('id_dirprogram')->nullable();
            $table->unsignedInteger('id_pejabat')->nullable();
            $table->enum('status', ['0', '1','2','3'])->default(0);
            $table->text('judul')->nullable();
            $table->string('namapelaksana')->nullable();
            $table->enum('jk', ['L', 'P'])->nullable();
            $table->string('jab_struktural')->nullable();
            $table->string('jab_fungsional')->nullable();
            $table->string('unit_pelaksana')->nullable();
            $table->string('mak')->nullable();
            $table->string('thn_anggaran')->nullable();
            $table->text('acuan')->nullable();
            $table->double('pagu', 13, 2)->nullable()->default(0);
            $table->date('tglmulai')->nullable();
            $table->date('tglselesai')->nullable();
            $table->date('tgltulis')->nullable();
            $table->string('tempat')->nullable();
            $table->text('target_luaran')->nullable();
            $table->text('dampak')->nullable();
            $table->string('jab_unitpelaksana')->nullable();
            $table->string('nama_unitpelaksana')->nullable();
            $table->string('nip_unitpelaksana')->nullable();
            $table->string('nama_direktur')->nullable();
            $table->string('nip_direktur')->nullable();
            $table->string('jab_wadir1')->nullable();
            $table->string('nama_wadir1')->nullable();
            $table->string('nip_wadir1')->nullable();
            $table->string('jab_wadir2')->nullable();
            $table->string('nama_wadir2')->nullable();
            $table->string('nip_wadir2')->nullable();
            $table->text('latarbelakang1')->nullable();
            $table->text('latarbelakang2')->nullable();
            $table->text('latarbelakang3')->nullable();
            $table->text('luaran_prop')->nullable();
            $table->text('mekanisme_prop')->nullable();
            $table->text('tujuan_prop')->nullable();
            $table->text('penutup_prop')->nullable();
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
        Schema::dropIfExists('proposal');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_proposal')->nullable();
            $table->unsignedInteger('id_kegiatan')->nullable();
            $table->unsignedInteger('nip_pelaksana')->nullable();
            $table->string('namapelaksana')->nullable();
            $table->enum('status', ['0', '1','2','3'])->default(0);
            $table->text('judul')->nullable();
            $table->date('tgltulis')->nullable();
            $table->string('katapengantar')->nullable();
            $table->mediumText('latarbelakang1')->nullable();
            $table->mediumText('latarbelakang2')->nullable();
            $table->mediumText('latarbelakang3')->nullable();
            $table->mediumText('maksud_tujuan')->nullable();
            $table->mediumText('mekanisme_laporan')->nullable();
            $table->mediumText('pelaksanaan')->nullable();
            $table->mediumText('overview_peserta')->nullable();
            $table->mediumText('alasan_peserta')->nullable();
            $table->mediumText('peran_panitia')->nullable();
            $table->mediumText('overview_sumberdaya')->nullable();
            $table->mediumText('luaran_kegiatan')->nullable();
            $table->mediumText('overview_indikator')->nullable();
            $table->mediumText('rincian_indikator1')->nullable();
            $table->mediumText('rincian_indikator2')->nullable();
            $table->mediumText('permasalahan')->nullable();
            $table->mediumText('pemecahan')->nullable();
            $table->mediumText('kesimpulan')->nullable();
            $table->mediumText('rekomendasi')->nullable();
            $table->string('foto_laporan')->nullable();
            $table->string('surat_laporan')->nullable();
            $table->string('materi_laporan')->nullable();
            $table->string('berita_laporan')->nullable();
            $table->string('luaran_laporan')->nullable();
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
        Schema::dropIfExists('laporan');
    }
}

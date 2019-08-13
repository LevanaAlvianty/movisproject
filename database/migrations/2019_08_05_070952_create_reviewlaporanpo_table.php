<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewlaporanpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewlaporanpo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_laporan')->nullable();
            $table->mediumText('r_sampul')->nullable();
            $table->mediumText('r_pengesahan')->nullable();
            $table->mediumText('r_katapengantar')->nullable();
            $table->mediumText('r_daftarisi')->nullable();
            $table->mediumText('r_daftarlampiran')->nullable();
            $table->mediumText('r_latar1')->nullable();
            $table->mediumText('r_latar2')->nullable();
            $table->mediumText('r_latar3')->nullable();
            $table->mediumText('r_maksudtujuan')->nullable();
            $table->mediumText('r_mekanisme')->nullable();
            $table->mediumText('r_pelaksanaan')->nullable();
            $table->mediumText('r_datapeserta')->nullable();
            $table->mediumText('r_sumberdaya')->nullable();
            $table->mediumText('r_luaran')->nullable();
            $table->mediumText('r_indikator')->nullable();
            $table->mediumText('r_permasalahan')->nullable();
            $table->mediumText('r_pemecahan')->nullable();
            $table->mediumText('r_kesimpulan')->nullable();
            $table->mediumText('r_rekomendasi')->nullable();
            $table->mediumText('r_lampiran')->nullable();
            $table->enum('status', ['0', '1'])->default(0);
            $table->enum('status_laporan', ['0','1','2'])->default(0);
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
        Schema::dropIfExists('reviewlaporanpo');
    }
}

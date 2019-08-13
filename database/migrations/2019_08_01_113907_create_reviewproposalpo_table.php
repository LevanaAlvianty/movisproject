<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewproposalpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewproposalpo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('r_sampul')->nullable();
            $table->string('r_pengesahan')->nullable();
            $table->string('r_latar1')->nullable();
            $table->string('r_latar2')->nullable();
            $table->string('r_latar3')->nullable();
            $table->string('r_tujuan')->nullable();
            $table->string('r_mekanisme')->nullable();
            $table->string('r_panitiadalam')->nullable();
            $table->string('r_panitialuar')->nullable();
            $table->string('r_peserta')->nullable();
            $table->string('r_luaran')->nullable();
            $table->string('r_jadwal')->nullable();
            $table->string('r_anggaran')->nullable();
            $table->string('r_penutup')->nullable();
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
        Schema::dropIfExists('reviewproposalpo');
    }
}

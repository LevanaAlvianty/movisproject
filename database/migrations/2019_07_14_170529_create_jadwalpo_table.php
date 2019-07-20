<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalpo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_proposal');
            $table->string('kegiatan');
            $table->enum('stat_jan', ['Y', 'N'])->nullable();
            $table->enum('stat_feb', ['Y', 'N'])->nullable();
            $table->enum('stat_mar', ['Y', 'N'])->nullable();
            $table->enum('stat_april', ['Y', 'N'])->nullable();
            $table->enum('stat_mei', ['Y', 'N'])->nullable();
            $table->enum('stat_jun', ['Y', 'N'])->nullable();
            $table->enum('stat_jul', ['Y', 'N'])->nullable();
            $table->enum('stat_agust', ['Y', 'N'])->nullable();
            $table->enum('stat_sept', ['Y', 'N'])->nullable();
            $table->enum('stat_okt', ['Y', 'N'])->nullable();
            $table->enum('stat_nov', ['Y', 'N'])->nullable();
            $table->enum('stat_des', ['Y', 'N'])->nullable();
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
        Schema::dropIfExists('jadwalpo');
    }
}

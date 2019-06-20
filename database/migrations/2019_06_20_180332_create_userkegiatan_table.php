<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserkegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userkegiatan', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->unsignedInteger('role_id')->default(2);
            $table->string('nip', 25)->nullable();
            $table->string('password', 191);
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
        Schema::dropIfExists('userkegiatan');
    }
}

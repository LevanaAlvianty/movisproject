<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('role_id')->default(2);
            $table->string('name');
            $table->string('username')->unique();
            $table->enum('jk',['L','P']);
            $table->string('nip')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->default('default.png');
            $table->rememberToken();
            $table->timestamps();
            //$table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users1');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kontaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('email');
            $table->string('pendidikan_terakhir')->nullable();;
            $table->string('riwayat_pelatihan')->nullable();;
            $table->string('riwayat_pekerjaan')->nullable();;
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
        Schema::dropIfExists('tb_kontaks');
    }
}

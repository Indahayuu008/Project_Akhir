<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakulsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makuls', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_makul');
            $table->string('nama_dosen');
            $table->integer('jumlah_mahasiswa');
            $table->integer('sks');
            $table->string('ruangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('makuls');
    }
}

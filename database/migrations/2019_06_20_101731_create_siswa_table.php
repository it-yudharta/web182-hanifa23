<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('tempat_tanggal_lahir');
            $table->string('kewarganegaraan');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('agama');
            $table->string('anak_ke');
            $table->text('alamat');
            $table->string('telpon');
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
        Schema::dropIfExists('siswa');
    }
}

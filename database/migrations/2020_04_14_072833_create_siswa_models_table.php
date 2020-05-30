<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nis')->unique();
            $table->tinyInteger('nisn')->nullable();
            // $table->unsignedBigInteger('warga_sekolah_id');
            $table->bigInteger('warga_sekolah_id');
            $table->unsignedBigInteger('ortu_id');
            $table->bigInteger('asal_sekolah_id')->nullable();
            $table->date('tanggal_masuk');
            $table->tinyInteger('kelas_id');
            $table->tinyInteger('absensi_id'); //dicek lagi
            $table->tinyInteger('tingkat'); // kelas 1, 2, 3 dan seterusnya...
            // diisi jika jenjang pendidikan adalah SMK
            $table->tinyInteger('jurusan_id')->nullable();
            $table->TinyInteger('status_kesiswaan_id')->default(1);
            // $table->tinyInteger('jenjang_pendidikan_id'); //dicek lagi
            //diisi tingkat 1-6 untuk jenjang SD/setingkat; 7-9 untuk SMP/setingkat; 10-12 untuk SMA setingkat
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
        Schema::dropIfExists('siswa_models');
    }
}

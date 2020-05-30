<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsalSekolahModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('asal_sekolah_models', function (Blueprint $table) {
    //         $table->tinyIncrements('id');
    //         // ['SD', 'MI', 'SMP', 'MTs', 'SMA', 'SMK', 'MA']);
    //         $table->tinyInteger('jenjang_pendidikan_id');
    //         $table->string('nama_sekolah');
    //         $table->bigInteger('provinsi_id');
    //         $table->bigInteger('kabupaten_id');
    //         $table->bigInteger('kecamatan_id');
    //         $table->bigInteger('desa_id');
    //         $table->enum('status_sekolah', ['negeri', 'swasta']);
    //         $table->timestamps();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  *
    //  * @return void
    //  */
    // public function down()
    // {
    //     Schema::dropIfExists('asal_sekolah_models');
    // }
}

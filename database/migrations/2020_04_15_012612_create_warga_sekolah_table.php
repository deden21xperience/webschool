<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargaSekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga_sekolah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 70);
            // $table->unsignedBigInteger('user_id');
            $table->string('tempat_lahir', 40)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jenis_kel', ['L', 'P'])->nullable();
            $table->tinyInteger('agama_id');
            $table->string('tlp', 25)->nullable();
            $table->string('hp', 25)->nullable();
            $table->tinyInteger('jobs_id');
            $table->tinyInteger('posisi_user_id');
            // $table->boolean('can_login')->default(true);
            $table->boolean('status_warga')->default(true);
            $table->string('photo')->nullable();
            $table->string('facebook_address')->nullable();
            $table->string('instagram_address')->nullable();
            $table->string('email_address')->nullable();
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
        Schema::dropIfExists('warga_sekolah');
    }
}

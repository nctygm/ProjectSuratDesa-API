<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltdkmampuhs', function (Blueprint $table) {
            $table->id();
            $table->string ('hubungan');
            $table->string ('jnssurat_pengantar');
            $table->string ('nama_terkait');
            $table->string ('pekerjaan');
            $table->string ('alamat');
            $table->string ('tujuan');
            $table->date ('tgl_buat');
            $table->string ('pengantar_file');
            $table->string ('pernyataan_file');
            $table->string ('ktp_file');
            $table->string ('kk_file');
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
        Schema::dropIfExists('tbl_tidak_mampu');
    }
};

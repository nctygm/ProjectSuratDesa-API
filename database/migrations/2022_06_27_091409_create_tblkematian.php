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
        Schema::create('tblkematians', function (Blueprint $table) {
            $table->id();
            $table->string ('hubungan');
            $table->string ('nik_alm');
            $table->string ('nama');
            $table->date ('tgl_lahir');
            $table->string ('jns_kelamin');
            $table->string ('alamat');
            $table->string ('agama');
            $table->string ('status_kawin');
            $table->string ('pekerjaan');
            $table->string ('wrga_negara');
            $table->date ('tgl_meninggal');
            $table->string ('tmpt_meninggal');
            $table->string ('penyebab');
            $table->string ('penentu_mninggal');
            $table->date ('tgl_buat');
            $table->string ('pernyataan_file');
            $table->string ('ktp_file');
            $table->string ('kk_file');
            $table->string ('ktp_alm_file');
            $table->string ('kk_alm_file');
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
        Schema::dropIfExists('tblkematian');
    }
};

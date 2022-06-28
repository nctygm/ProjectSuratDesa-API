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
        Schema::create('tbl_domisili_usaha', function (Blueprint $table) {
            $table->id();
            $table->string ('jenis_usaha');
            $table->string ('nama_usaha');
            $table->string ('alamat');
            $table->date ('tgl_buat');
            $table->string ('pengantar_file');
            $table->string ('kk_file');
            $table->string ('ktp_file');
            $table->string ('akta_usaha_file');
            $table->string ('pernyataan_file');
            $table->string ('kepemilikan_file');    
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
        Schema::dropIfExists('tbl_domisili_usaha');
    }
};

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
        Schema::create('tbl_biodata', function (Blueprint $table) {
            $table->id();
            $table->string ('nama_kpl_kluarga');
            $table->string ('alamat');
            $table->string ('nama');
            $table->string ('nik');
            $table->string ('jns_kelamin');
            $table->string ('tmpt_lahir');
            $table->date ('tgl_lahir');
            $table->string ('hubungan');
            $table->string ('akta_kelahira_file');
            $table->string ('akta_perkawinan_file');
            $table->string ('ijazah_file');
            $table->string ('kk_file');
            $table->string ('ktp_file');
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
        Schema::dropIfExists('tbl_biodata');
    }
};

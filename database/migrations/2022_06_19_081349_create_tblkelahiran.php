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
        Schema::create('tblkelahiran', function (Blueprint $table) {
            $table->id();
            $table->string ('hubungan');
            $table->string ('nama_anak');
            $table->datetime ('tgl_lahir');
            $table->string ('tempat_lahir');
            $table->string ('jns_kelamin');
            $table->string ('nama_ayah');
            $table->string ('nama_ibu');
            $table->string ('alamat');
            $table->string ('rt');
            $table->string ('rw');
            $table->datetime ('tgl_buat');
            $table->string ('buktikel_file');
            $table->string ('kk_file');
            $table->string ('ktp_file');
            $table->string ('bukunikah_file');
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
        Schema::dropIfExists('tblkelahiran');
    }
};

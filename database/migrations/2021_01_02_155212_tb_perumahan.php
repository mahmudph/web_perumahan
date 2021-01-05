<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbPerumahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_perumahan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('marketing_id');
            $table->integer('tipe_id');
            $table->string('nama_perumahan');
            $table->double('harga');
            $table->string('code')->nullable();
            $table->integer('sertifikasi_id');
            $table->text('deskripsi');
            $table->text('alamat');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_perumahan');
    }
}

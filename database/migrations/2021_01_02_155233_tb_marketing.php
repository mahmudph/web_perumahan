<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbMarketing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_marketing', function(Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('jenis_kelamin_id');
            $table->date('tgl_lahir');
            $table->string('no_hp_marketing')->nullable();
            $table->string('nama_company')->nullable();
            $table->string('no_hp_company')->nullable();
            $table->string('foto')->nullable();
            $table->text('alamat')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_marketing');
    }
}

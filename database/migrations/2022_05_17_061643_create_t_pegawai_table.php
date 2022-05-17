<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama');
            $table->char('tempat_lahir');
            $table->date('tgl_lahir');
            $table->char('jenis_kelamin');
            $table->char('agama');
            $table->text('alamat');
            $table->integer('provinsi_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
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
        Schema::dropIfExists('t_pegawai');
    }
}

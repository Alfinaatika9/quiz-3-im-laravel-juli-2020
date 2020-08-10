<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_proyek', function (Blueprint $table) {
             $table->bigIncrements('id');
         $table->string('nama_proyek');
            $table->longText('deskripsi_proyek');
            $table->timestamps();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->foreign('profile_id')->references('id')->on('profile');
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->foreign('jabatan_id')->references('id')->on('jabatan');
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_proyek');
    }
}

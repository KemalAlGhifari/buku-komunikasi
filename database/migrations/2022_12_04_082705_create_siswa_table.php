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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nisn');
            $table->bigInteger('kelas_id')->unsigned();
            $table->string('jurusan');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->bigInteger('no_telepon');
            $table->string('email');
            $table->string('password'); 
            $table->timestamps();

            
            // $table->bigInteger('guru_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};

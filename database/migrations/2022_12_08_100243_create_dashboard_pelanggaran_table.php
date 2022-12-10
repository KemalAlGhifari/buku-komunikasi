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
        Schema::create('dashboard_pelanggaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelanggaran_id')->unsigned();
            $table->bigInteger('dashboard_id')->unsigned();

            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran');
            $table->foreign('dashboard_id')->references('id')->on('dashboard');
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
        Schema::dropIfExists('dashboard_pelanggaran');
    }
};

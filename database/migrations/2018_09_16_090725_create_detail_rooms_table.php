<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->text('fasilitas_kamar');
            $table->smallInteger('luas_kamar');
            $table->text('kamar_mandi');
            $table->text('fasilitas_umum');
            $table->text('fasilitas_parkir');
            $table->text('description');
            $table->unsignedInteger('room_id');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_rooms');
    }
}

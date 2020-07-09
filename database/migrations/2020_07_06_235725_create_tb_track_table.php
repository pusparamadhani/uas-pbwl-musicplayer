<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_track', function (Blueprint $table) {
            $table->id('track_id');
            $table->string('track_name')->unique();
            $table->unsignedBigInteger('track_id_album');
            $table->string('track_time');
            $table->string('track_file');
            $table->timestamps();
            $table->foreign('track_id_album')->references('album_id')->on('tb_album')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_track');
    }
}

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
        Schema::create('icon_title', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('icon_id');
            $table->unsignedBigInteger('title_id');

            $table->foreign('icon_id')->references('id')->on('icons')->onDelete("cascade");
            $table->foreign('title_id')->references('id')->on('titles')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_title');
    }
};

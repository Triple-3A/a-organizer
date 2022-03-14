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
        Schema::create('task_title', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('title_id');

            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('title_id')->references('id')->on('titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_title');
    }
};

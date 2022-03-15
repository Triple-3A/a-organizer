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
        Schema::create('description_task', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('description_id');
            $table->unsignedBigInteger('task_id');

            $table->foreign('description_id')->references('id')->on('descriptions')->cascadeOnDelete();
            $table->foreign('task_id')->references('id')->on('tasks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('description_task');
    }
};

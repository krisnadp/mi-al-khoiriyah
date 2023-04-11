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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->foreignId('classroom_id')
                ->nullable()
                ->constrained('classrooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('mon', 255)->nullable();
            $table->string('tue', 255)->nullable();
            $table->string('wed', 255)->nullable();
            $table->string('thu', 255)->nullable();
            $table->string('fri', 255)->nullable();
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
        Schema::dropIfExists('schedules');
    }
};

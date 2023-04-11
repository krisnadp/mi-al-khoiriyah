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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('code', 255);
            $table->string('name', 255);
            $table->boolean('homeroom', 255)->default(false);
            $table->integer('start_year')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};

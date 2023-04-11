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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('classroom_id')
                ->nullable()
                ->constrained('classrooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('birthplace', 255);
            $table->date('birthdate');
            $table->string('gender', 255);
            $table->string('status', 255);
            $table->string('child_no', 255);
            $table->string('siblings', 255);
            $table->string('kk', 255);
            $table->string('kk_photo', 255)->nullable();
            $table->string('nisn', 255);
            $table->string('nis', 255)->nullable();
            $table->string('address', 255);
            $table->string('address_no', 255);
            $table->string('address_rt', 255)->nullable();
            $table->string('address_rw', 255)->nullable();
            $table->string('kelurahan', 255);
            $table->string('kecamatan', 255);
            $table->string('city', 255);
            $table->string('pos_code', 255);
            $table->string('from_school', 255);
            $table->string('from_school_address', 255);
            $table->string('from_school_level', 255);
            $table->string('uniform_size', 255);
            $table->string('phone_number', 255);
            $table->string('photo', 255)->nullable();
            $table->string('kip_photo', 255)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('father_nik', 255)->nullable();
            $table->string('father_birthplace', 255)->nullable();
            $table->string('father_birthdate')->nullable();
            $table->string('father_education', 255)->nullable();
            $table->string('father_job', 255)->nullable();
            $table->string('father_income', 255)->nullable();
            $table->string('father_ktp', 255)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->string('mother_nik', 255)->nullable();
            $table->string('mother_birthplace', 255)->nullable();
            $table->string('mother_birthdate')->nullable();
            $table->string('mother_education', 255)->nullable();
            $table->string('mother_job', 255)->nullable();
            $table->string('mother_income', 255)->nullable();
            $table->string('mother_ktp', 255)->nullable();
            $table->string('wali_name', 255)->nullable();
            $table->string('wali_nik', 255)->nullable();
            $table->string('wali_birthplace', 255)->nullable();
            $table->string('wali_birthdate')->nullable();
            $table->string('wali_education', 255)->nullable();
            $table->string('wali_job', 255)->nullable();
            $table->string('wali_income', 255)->nullable();
            $table->string('wali_ktp', 255)->nullable();
            $table->string('wali_phone', 255)->nullable();
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
        Schema::dropIfExists('students');
    }
};

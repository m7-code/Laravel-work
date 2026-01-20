<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            //$table->id();
            $table->integer('student_id');
            $table->string('name');
            $table->string('Email')->unique();
            $table->string('city')->default('Multan');
            $table->integer('age')->unsigned();
            $table->primary('student_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};

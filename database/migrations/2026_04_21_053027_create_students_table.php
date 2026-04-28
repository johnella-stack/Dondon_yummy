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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Pangalan ng estudyante
            $table->string('course'); // Kurso
            $table->string('year_level'); // Year level (e.g. 1st Year, 2nd Year)
            $table->integer('age'); // Edad
            $table->timestamps(); // created_at at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

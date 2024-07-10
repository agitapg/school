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
            $table->string('nisn', 20);
            $table->string('name', 100);
            $table->longText('address');
            $table->string('gender', 15);
            $table->string('date_of_brith', 10);
            $table->primary(['nisn', 'name'], 'pk__student');
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

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('surname_ru')->nullable();
            $table->string('surname_en')->nullable();
            $table->string('patronimic')->nullable();
            $table->string('avatar')->nullable();
            $table->string('vcard')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('position_ru')->nullable();
            $table->string('position_en')->nullable();
            $table->string('degree_ru')->nullable();
            $table->string('degree_en')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

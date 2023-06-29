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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
			$table->string('title_ru');
			$table->string('title_en');
			$table->string('author_ru')->nullable();
			$table->string('author_en')->nullable();
			$table->text('description_ru')->nullable();
			$table->text('description_en')->nullable();
			$table->date('date')->nullable();
			$table->string('title_link')->nullable();
			$table->string('button_link')->nullable();
			$table->unsignedInteger('position')->default(10000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};

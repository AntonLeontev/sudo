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
        Schema::table('home_page_slides', function (Blueprint $table) {
            $table->boolean('has_request_button')->default(1);
            $table->string('button_text_ru')->nullable();
            $table->string('button_text_en')->nullable();
            $table->string('button_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_page_slides', function (Blueprint $table) {
            $table->dropColumn([
                'has_request_button',
                'button_text_ru',
                'button_text_en',
                'button_link',
            ]);
        });
    }
};

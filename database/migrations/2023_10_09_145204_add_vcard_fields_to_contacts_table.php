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
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('website');
            $table->dropColumn('location');
            $table->dropColumn('company_name');
            $table->dropColumn('company_phone');
        });
    }
};

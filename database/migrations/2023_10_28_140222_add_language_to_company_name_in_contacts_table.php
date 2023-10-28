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
            $table->renameColumn('company_name', 'company_name_ru');
            $table->string('company_name_en')->nullable()->before('company_name_ru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn('company_name_ru', 'company_name');
            $table->removeColumn('company_name_en');
        });
    }
};

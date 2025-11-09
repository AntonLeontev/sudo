<?php

use App\Models\Publication;
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
        Schema::table('publications', function (Blueprint $table) {
            $table->string('journal_en')->nullable()->after('journal');
            $table->string('journal_ru')->nullable()->after('journal');
        });

        Publication::all()->each(function (Publication $publication) {
            $publication->journal_en = $publication->journal;
            $publication->journal_ru = $publication->journal;
            $publication->save();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('journal_en');
            $table->dropColumn('journal_ru');
        });
    }
};

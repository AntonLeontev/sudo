<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
        'author_ru',
        'author_en',
        'description_ru',
        'description_en',
        'date',
        'journal',
        'title_link',
        'button_link',
        'position',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    protected static function booted(): void
    {
        static::created(function (Publication $publication) {
            if (Publication::where('position', $publication->position)->exists()) {
                Publication::where('position', '>=', $publication->position)
                    ->whereNot('id', $publication->id)
                    ->get(['position', 'id'])
                    ->reduce(function (int $position, Publication $pub) {
                        $pub->position = $position + 1;
                        $pub->saveQuietly();

                        return $pub->position;
                    }, $publication->position);
            }
        });

        static::updated(function (Publication $publication) {
            if (Publication::where('position', $publication->position)->exists()) {
                Publication::where('position', '>=', $publication->position)
                    ->whereNot('id', $publication->id)
                    ->get(['position', 'id'])
                    ->reduce(function (int $position, Publication $pub) {
                        $pub->position = $position + 1;
                        $pub->saveQuietly();

                        return $pub->position;
                    }, $publication->position);
            }
        });
    }
}

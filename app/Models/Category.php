<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
    ];

    public function instruments(): HasMany
    {
        return $this->hasMany(Instrument::class);
    }

    public function enabledInstruments(): HasMany
    {
        return $this->hasMany(Instrument::class)->where('enabled', 1)->orderBy('position');
    }
}

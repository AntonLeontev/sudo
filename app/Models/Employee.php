<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name_ru',
        'name_en',
        'surname_ru',
        'surname_en',
        'avatar',
        'phone',
        'email',
        'position_ru',
        'position_en',
    ];

    protected $with = [
        'socials',
    ];

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }
}

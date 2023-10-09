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
        'name',
        'avatar',
        'phone',
        'email',
        'position',
    ];

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }
}

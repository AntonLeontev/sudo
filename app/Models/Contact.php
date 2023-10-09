<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'inn',
        'address_ru',
        'address_en',
        'feedback_email',
        'resume_email',
        'tools_email',
        'location',
        'website',
        'company_name',
    ];
}

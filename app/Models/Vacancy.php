<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

	protected $fillable = [
		'title_ru',
		'title_en',
		'description_ru',
		'description_en',
		'salary',
		'enabled',
	];
}

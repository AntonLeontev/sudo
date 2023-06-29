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
		'title_link',
		'button_link',
		'position'
	];

	protected $casts = [
		'date' => 'date',
	];
}

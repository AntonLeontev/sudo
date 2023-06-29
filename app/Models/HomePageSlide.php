<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageSlide extends Model
{
    use HasFactory;

	protected $fillable = [
		'image',
		'text_ru',
		'text_en',
		'enabled',
		'text_color',
	];
}

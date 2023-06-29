<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Instrument extends Model
{
    use HasFactory;

	protected $fillable = [
		'title_ru',
		'title_en',
		'subtitle_ru',
		'subtitle_en',
		'description_ru',
		'description_en',
		'link',
		'category_id',
		'enabled',
	];

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
}

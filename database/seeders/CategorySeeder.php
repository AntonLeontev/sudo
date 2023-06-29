<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
			'title_ru' => 'Научное ПО',
			'title_en' => 'Scientific software',
		]);
        Category::create([
			'title_ru' => 'ПО для разработчиков',
			'title_en' => 'Software for developers',
		]);
        Category::create([
			'title_ru' => 'Прочее',
			'title_en' => 'Miscellaneous',
		]);
    }
}

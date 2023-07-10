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
			'position' => 1,
			'title_ru' => 'Научное ПО',
			'title_en' => 'Scientific software',
		]);
        Category::create([
			'position' => 2,
			'title_ru' => 'ПО для разработчиков',
			'title_en' => 'Software for developers',
		]);
        Category::create([
			'position' => 3,
			'title_ru' => 'Прочее',
			'title_en' => 'Miscellaneous',
		]);
    }
}

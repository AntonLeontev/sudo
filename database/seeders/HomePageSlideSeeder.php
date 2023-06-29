<?php

namespace Database\Seeders;

use App\Models\HomePageSlide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		HomePageSlide::create([
			'position' => 1,
			'text_color' => '#ffffff',
			'text_ru' => 'Обучаемые системы автоматического анализа, расчёта и построения оптимальных технологических маршрутов с учётом большого числа входных оперативных параметров. Перенос вычисление на GPGPU. Оптимизация существующих решений.',
			'text_en' => 'en text',
			'enabled' => 1,
			'image' => 'homePageSlides/mSVqJDTdiGBgHNNkcr6aSAHIno8WW9XtX4sCGNeu.jpg',
		]);

		HomePageSlide::create([
			'position' => 2,
			'text_color' => '#000000',
			'text_ru' => 'Онлайн сервис построения диаграмм кривых перемагничивания первого порядка FORC. Поддержка различного оборудования, расширенный набор пред-процессинговых и аналитических функций, высокая скорость обработки данных.',
			'text_en' => 'en text2',
			'enabled' => 1,
			'image' => 'homePageSlides/z1mDj6xIf6BV1Km6mNpBGEUdGmSsQIA5U7Sbs3GU.jpg',
		]);
		
		HomePageSlide::create([
			'position' => 3,
			'text_color' => '#ffffff',
			'text_ru' => 'Сервисы для обработки и анализа изображений со сканирующих электронных микроскопов (SEM). Высокая точность и скорость обработки с использованием технологий машинного обучения',
			'text_en' => 'en text3',
			'enabled' => 1,
			'image' => 'homePageSlides/wer3sNtgtJR2aRmX70r5DhNLcCtz3slMUAjxM2CT.jpg',
		]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instrument::create([
			'title_ru' => 'Uncorr',
			'title_en' => 'Uncorr',
			'subtitle_ru' => 'Spatial analysis and correlation',
			'subtitle_en' => 'Spatial analysis and correlation',
			'description_ru' => 'Универсальный программный пакет для корреляционного анализа пространственных данных с дополнительным набором инструментов для выполнения преобразования географических координат, интерполяции данных, картографирования, пространственной корреляции, визуализации данных и другими вспомогательными функциями.',
			'description_en' => '',
			'link' => 'https://uncorr.com/',
			'enabled' => 1,
			'category_id' => 1,
			'position' => 1,
		]);
        Instrument::create([
			'title_ru' => 'FORCtool',
			'title_en' => 'FORCtool',
			'subtitle_ru' => 'FORC processing and analysis',
			'subtitle_en' => 'FORC processing and analysis',
			'description_ru' => 'Сервис для обработки, препроцессинга и анализа частных петель гистерезиса первого порядка FORC, а также для построения диаграмм распределения FORC. Сервис использует алгоритмы, предложенные авторами VARIFORC и FORCsensei',
			'description_en' => '',
			'link' => 'https://forctool.com/',
			'enabled' => 1,
			'category_id' => 1,
			'position' => 2,
		]);
        Instrument::create([
			'title_ru' => 'Hysteresis',
			'title_en' => 'Hysteresis',
			'subtitle_ru' => 'plotting hysteresis loops, IRM and backfield curves',
			'subtitle_en' => 'plotting hysteresis loops, IRM and backfield curves',
			'description_ru' => 'Сервис для обработки и визуализации измерений петель гистерезиса, кривых обратного перемагничивания и кривых намагничивания IRM. Поддержка файлов Princeton MicroMag 2900/3900 и LakeShore 7400 Series.',
			'description_en' => '',
			'link' => 'https://hysteresis.online/',
			'enabled' => 1,
			'category_id' => 1,
			'position' => 3,
		]);
        Instrument::create([
			'title_ru' => 'SEMalyzer',
			'title_en' => 'SEMalyzer',
			'subtitle_ru' => 'processing and analyzing SEM images (by request)',
			'subtitle_en' => 'processing and analyzing SEM images (by request)',
			'description_ru' => 'Сервис для обработки и анализа изображений со сканирующих электронных микроскопов (SEM). Высокая точность и скорость обработки с использованием технологий машинного обучения',
			'description_en' => '',
			'link' => '',
			'enabled' => 1,
			'category_id' => 1,
			'position' => 4,
		]);
    }
}

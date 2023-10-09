<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publication::create([
            'position' => 1,
            'title_ru' => 'Введение в GPGPU для программистов на Python',
            'title_en' => 'Introduction to GPGPU for Python Programmers',
            'date' => '29.07.2022',
            'author_ru' => 'Михаил Лукин, Егор Макаренко',
            'author_en' => 'Mikhail Lukin, Egor Makarenko',
            'button_link' => 'https://piterpy.com/schedule/video/?v=MTAwMTM3wooyMDAwMDU5McKKMA',
            'title_link' => null,
            'description_ru' => null,
            'description_en' => null,
        ]);
        Publication::create([
            'position' => 2,
            'title_ru' => 'Доклад про декомпилятор GPGPU',
            'title_en' => 'Report about the GPGPU decompiler',
            'date' => '28.10.2022',
            'author_ru' => 'Кристина Михайленко, Михаил Лукин',
            'author_en' => 'Kristina Mikhailenko, Mikhail Lukin',
            'button_link' => 'https://www.youtube.com/watch?v=SZx930kAKCg',
            'title_link' => null,
            'description_ru' => null,
            'description_en' => null,
        ]);
        Publication::create([
            'position' => 3,
            'title_ru' => 'Универсальное программное обеспечение для статистического анализа данных и пространственной корреляции',
            'title_en' => 'A Versatile Software for Statistical Data Analysis and Spatial Correlation',
            'date' => '26.01.2022',
            'author_ru' => 'Дмитрий Кривопальцев, Леонид Суровицкий, Михаил Лукин',
            'author_en' => 'Dmitry Krivopaltsev, Leonid Surovitskii, Mikhail Lukin',
            'button_link' => 'https://link.springer.com/chapter/10.1007/978-3-030-91467-7_8',
            'title_link' => null,
            'description_ru' => 'Ключевые слова: Correlation, Interpolation, Data analysis, Comparison, Software, UNCORR',
            'description_en' => 'Keywords: Correlation, Interpolation, Data analysis, Comparison, Software, UNCORR',
        ]);
        Publication::create([
            'position' => 4,
            'title_ru' => 'Программируем видеокарты: введение в основные виды GPGPU-оптимизаций',
            'title_en' => 'Programming video cards: an introduction to the main types of GPGPU optimizations',
            'date' => '24.05.2021',
            'author_ru' => 'Лукин М. А., Михайленко К.И.',
            'author_en' => 'Lukin M. A., Mikhailenko K.I.',
            'button_link' => 'http://i-us.ru/index.php/ius/article/view/14599',
            'title_link' => null,
            'description_ru' => null,
            'description_en' => null,
        ]);
        Publication::create([
            'position' => 5,
            'title_ru' => 'Способ декомпиляции ядер AMD GCN в OpenCL',
            'title_en' => 'A method for decompilation of AMD GCN kernels to OpenCL',
            'date' => '26.04.2021',
            'author_ru' => 'Михайленко К.И., Лукин М. А., Станкевич А. С.',
            'author_en' => 'Mikhailenko K.I., Lukin M. A., Stankevich A. S.',
            'button_link' => 'http://i-us.ru/index.php/ius/article/view/14599',
            'title_link' => null,
            'description_ru' => 'Ключевые слова: декомпилятор, дизассемблер, OpenCL, AMD GCN, GPGPU, граф потока управления, обратная разработка',
            'description_en' => 'Keywords: decompiler, disassembler, OpenCL, AMD GCN, GPGPU, control flow graph, reverse engineering',
        ]);
    }
}

<?php

namespace App\MoonShine\Resources;

use App\Models\HomePageSlide;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Color;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;

class HomePageSlideResource extends Resource
{
	public static string $model = HomePageSlide::class;

	public static string $title = 'Слайды на главной';

	public static string $orderField = 'position'; // Поле сортировки по умолчанию 
 
    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию 

	protected bool $editInModal = true;

	public function fields(): array
	{
		return [
		    ID::make()->sortable()->hideOnIndex(),
			Grid::make([
				Column::make([
					Block::make([
						Number::make('Позиция', 'position')
							->default(HomePageSlide::orderByDesc('position')->first('position')->position + 1)
							->required()
							->sortable(),
						Color::make('Цвет текста', 'text_color')
							->default('#000000')
							->hideOnIndex(),
						Image::make('Фон', 'image')
							->hint('Ширина изображение должна быть более или равна 1900px, высота более или равна 800px')
							->dir('homePageSlides'),
						SwitchBoolean::make('Опубликован', 'enabled')
							->autoUpdate(true)
							->default(true)
							->sortable(),
					]),
				])->columnSpan(4),
				Column::make([
					Block::make([
						Textarea::make('Русский текст', 'text_ru')
							->required(),
						Textarea::make('English text', 'text_en')
							->required()
							->hideOnIndex(),
					]),
				])->columnSpan(8),
			]),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
			'text_color' => [],
			'position' => ['integer', 'max:999', 'min:-999'],
			'text_ru' => ['required', 'string', 'max:400'],
			'text_en' => ['required', 'string', 'max:400'],
			'enabled' => ['boolean'],
			'image' => ['image', 'dimensions:min_width=1900,min_height=800']
		];
    }

    public function search(): array
    {
        return [];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

	protected function afterUpdated(Model $item)
	{
		Cache::delete('slides');
	}

	protected function afterCreated(Model $item)
	{
		Cache::delete('slides');
	}
}

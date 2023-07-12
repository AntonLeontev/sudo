<?php

namespace App\MoonShine\Resources;

use App\Models\Instrument;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Heading;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Url;
use MoonShine\Filters\BelongsToFilter;
use MoonShine\Resources\Resource;

class InstrumentResource extends Resource
{
	public static string $model = Instrument::class;

	public static string $title = 'Инструменты';

	public static string $orderType = 'ASC';

	protected bool $editInModal = false;

	public function fields(): array
	{
		return [
			Number::make('Позиция в категории', 'position')
				->sortable()
				->hideOnForm(),
			Grid::make([
				Column::make([

					Block::make([
						Heading::make('Русский'),
						Text::make('Название', 'title_ru')
							->sortable()
							->required(),
						Text::make('Подзаголовок', 'subtitle_ru'),
						TinyMce::make('Описание', 'description_ru')
							->plugins('link lists fullscreen wordcount table preview')
							->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
							->hideOnIndex(),
					]),
						
				])->columnSpan(5),
					
				Column::make([
					Block::make([
						Heading::make('English'),
						Text::make('Title', 'title_en')
							->hideOnIndex()
							->required(),
						Text::make('Subtitle', 'subtitle_en')
							->hideOnIndex(),
						TinyMce::make('Description', 'description_en')
							->plugins('link lists fullscreen wordcount table preview')
							->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
							->hideOnIndex(),
					]),
				])->columnSpan(5),

				Column::make([
					Block::make([
						Number::make('Позиция в категории', 'position')
							->hideOnIndex()
							->default(Instrument::max('position') + 1)
							->required(),
						Url::make('Ссылка', 'link')
							->copy()
							->hideOnIndex(),
						BelongsTo::make('Категория', 'category_id', 'title_ru')
							->sortable(),
						SwitchBoolean::make('Активен', 'enabled')
							->default(1),

					]),
				])->columnSpan(2),
			]),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
			'title_ru' => ['required', 'string', 'max:255'],
			'title_en' => ['required', 'string', 'max:255'],
			'subtitle_ru' => ['nullable', 'string', 'max:255'],
			'subtitle_en' => ['nullable', 'string', 'max:255'],
			'description_ru' => ['nullable', 'string', 'max:2000'],
			'description_en' => ['nullable', 'string', 'max:2000'],
			'link' => ['nullable', 'string', 'max:255', 'url'],
			'enabled' => ['nullable', 'boolean'],
			'position' => ['required', 'integer'],
		];
    }

    public function search(): array
    {
        return [];
    }

    public function filters(): array
    {
        return [
			BelongsToFilter::make('Категория','category_id', 'title_ru'),
		];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

	protected function afterUpdated(Model $item)
	{
		Cache::delete('instruments');
	}

	protected function afterCreated(Model $item)
	{
		Cache::delete('instruments');
	}

	protected function afterDeleted(Model $item)
	{
		Cache::delete('instruments');
	}
}

<?php

namespace App\MoonShine\Resources;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;

class PublicationResource extends Resource
{
	public static string $model = Publication::class;

	public static string $title = 'Публикации';

	public static string $orderField = 'position'; // Поле сортировки по умолчанию 
 
    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию 

	protected bool $editInModal = false;

	protected bool $createInModal = false;

	public function fields(): array
	{
		return [
			Grid::make([
				Column::make([

					Block::make([

						Grid::make([
							Column::make([
								Number::make('Позиция', 'position')
									->default(Publication::orderByDesc('position')->first('position')?->position + 1)
									->sortable(),
							])->columnSpan(6),
							Column::make([
								Date::make('Дата публикации', 'date')
									->format('j.m.Y'),
							])->columnSpan(6)
						]),

						Text::make('Журнал или конференция', 'journal'),

						Url::make('Ссылка кнопки', 'button_link')
							->expansion('url')
							->copy()
							->hideOnIndex(),

						Url::make('Ссылка заголовка', 'title_link')
							->expansion('url')
							->copy()
							->hideOnIndex()
							->hint('Если не заполнено, то будет подставлена ссылка кнопки'),
					]),
						
				])->columnSpan(6),
					
				Column::make([
					Block::make([
						Tabs::make([
							Tab::make('Русский', [
								Text::make('Заголовок', 'title_ru'),
								Text::make('Автор', 'author_ru'),
								TinyMce::make('Описание', 'description_ru')
									->plugins('link lists fullscreen wordcount table preview')
									->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
									->hideOnIndex(),
							]),
							Tab::make('English', [
								Text::make('Заголовок на английском', 'title_en')->hideOnIndex(),
								Text::make('Автор на английском', 'author_en')->hideOnIndex(),
								TinyMce::make('Описание на английском', 'description_en')
									->plugins('link lists fullscreen wordcount table preview')
									->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
									->hideOnIndex(),
							]),
						])
					]),
				])->columnSpan(6),
			])
		];
	}

	public function rules(Model $item): array
	{
	    return [
			'position' => ['integer', 'min:1', 'max:10000'],
			'title_ru' => ['required', 'string', 'max:255'],
			'title_en' => ['required', 'string', 'max:255'],
			'author_ru' => ['nullable', 'string', 'max:255'],
			'author_en' => ['nullable', 'string', 'max:255'],
			'description_ru' => ['nullable', 'string', 'max:1000'],
			'description_en' => ['nullable', 'string', 'max:1000'],
			'journal' => ['nullable', 'string', 'max:255'],
			'button_link' => ['nullable', 'string', 'max:255'],
			'title_link' => ['nullable', 'string', 'max:255'],
			'date' => ['nullable', 'date'],
		];
    }

    public function search(): array
    {
        return ['title', 'author'];
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
		Cache::delete('publications');
	}

	protected function afterCreated(Model $item)
	{
		Cache::delete('publications');
	}

	protected function afterDeleted(Model $item)
	{
		Cache::delete('publications');
	}

	protected function afterMassDeleted(Model $item)
	{
		Cache::delete('publications');
	}
}

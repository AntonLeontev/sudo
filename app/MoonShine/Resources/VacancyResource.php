<?php

namespace App\MoonShine\Resources;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Heading;
use MoonShine\Fields\ID;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;

class VacancyResource extends Resource
{
    public static string $model = Vacancy::class;

    public static string $title = 'Вакансии';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Grid::make([
                Column::make([
                    Block::make([
                        Heading::make('Русский'),
                        Text::make('Название', 'title_ru')
                            ->required(),
                        TinyMce::make('Описание', 'description_ru')
                            ->plugins('link lists fullscreen wordcount table preview')
                            ->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
                            ->hideOnIndex(),
                        Text::make('Зарплата', 'salary_ru'),
                    ]),
                ])->columnSpan(6),
                Column::make([
                    Block::make([
                        Heading::make('English'),
                        Text::make('Title', 'title_en')
                            ->hideOnIndex()
                            ->required(),
                        TinyMce::make('Description', 'description_en')
                            ->plugins('link lists fullscreen wordcount table preview')
                            ->toolbar('undo redo | blocks fontsize | alignleft aligncenter alignright | bold italic underline | link | bullist numlist')
                            ->hideOnIndex(),
                        Text::make('Salary', 'salary_en')
                            ->hideOnIndex(),
                    ]),
                ])->columnSpan(6),
                SwitchBoolean::make('Активна', 'enabled')->default(1)->hideOnCreate(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title_ru' => ['string', 'max:255'],
            'title_en' => ['string', 'max:255'],
            'salary_ru' => ['string', 'max:255', 'nullable'],
            'salary_en' => ['string', 'max:255', 'nullable'],
            'description_ru' => ['string', 'max:10000', 'nullable'],
            'description_en' => ['string', 'max:10000', 'nullable'],
            'enabled' => ['boolean'],
        ];
    }

    public function search(): array
    {
        return ['title_ru', 'title_en', 'description_ru', 'description_en'];
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

    protected function afterCreated(Model $item)
    {
        Cache::delete('vacancies');
    }

    protected function afterUpdated(Model $item)
    {
        Cache::delete('vacancies');
    }

    protected function afterDeleted(Model $item)
    {
        Cache::delete('vacancies');
    }

    protected function afterMassDeleted(Model $item)
    {
        Cache::delete('vacancies');
    }
}

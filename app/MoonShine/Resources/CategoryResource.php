<?php

namespace App\MoonShine\Resources;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class CategoryResource extends Resource
{
    public static string $model = Category::class;

    public static string $title = 'Категории';

    public static string $orderType = 'ASC';

    public static string $orderBy = 'position';

    protected bool $editInModal = false;

    public static array $with = ['instruments'];

    public function fields(): array
    {
        return [
            Flex::make([
                Number::make('Позиция', 'position')
                    ->default(Category::query()->max('position') + 1)
                    ->required(),

                Text::make('Название', 'title_ru')
                    ->required(),

                Text::make('Название на английском', 'title_en')
                    ->hideOnIndex()
                    ->required(),
            ]),

            HasMany::make('Инструменты', 'instruments', new InstrumentResource())
                ->resourceMode(),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'position' => ['required', 'integer'],
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

    protected function afterMassDeleted(Model $item)
    {
        Cache::delete('instruments');
    }
}

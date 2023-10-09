<?php

namespace App\MoonShine\Resources;

use App\Models\Social;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class SocialResource extends Resource
{
    public static string $model = Social::class;

    public static string $title = 'Соцсети';

    public function fields(): array
    {
        return [

            Text::make('Ссылка', 'link'),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
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
}

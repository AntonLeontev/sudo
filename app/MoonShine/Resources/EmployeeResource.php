<?php

namespace App\MoonShine\Resources;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Email;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;

class EmployeeResource extends Resource
{
    public static string $model = Employee::class;

    public static string $title = 'Контакты сотрудников';

    protected bool $precognition = true;

    public function fields(): array
    {
        return [
            Text::make('Slug')
                ->required()
                ->hint('Формирует ссылку на карточку пользователя: '.config('app.url').'/vcard/slug')
                ->sortable(),
            Image::make('Фото', 'avatar')
                ->dir('employees')
                ->hint('Изображение должно быть более 120х120 px и с соотношением сторон 1:1'),
            Flex::make([
                Text::make('Имя', 'name_ru')
                    ->required()
                    ->sortable(),
                Text::make('Имя на английском', 'name_en')
                    ->required()
                    ->hideOnIndex(),
            ]),
            Flex::make([
                Text::make('Фамилия', 'surname_ru')
                    ->sortable(),
                Text::make('Фамилия на английском', 'surname_en')
                    ->hideOnIndex(),
            ]),
            Flex::make([
                Text::make('Телефон', 'phone')
                    ->mask('7 999 999-99-99'),
                Email::make('Email', 'email'),
            ]),
            Flex::make([
                Text::make('Должность', 'position_ru'),
                Text::make('Должность на английском', 'position_en')
                    ->hideOnIndex(),
            ]),
            HasMany::make('Соцсети', 'socials')
                ->fields([
                    Url::make('Ссылка', 'link')
                        ->required(),
                ])
                ->removable()
                ->hideOnIndex(),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'slug' => ['required', 'string', 'min:3', 'max:100', Rule::unique('employees')->ignore($this->item?->id), 'lowercase'],
            'name_ru' => ['required', 'string', 'min:3', 'max:100'],
            'name_en' => ['required', 'string', 'min:3', 'max:100'],
            'avatar' => ['nullable', 'image', Rule::dimensions()->minWidth(120)->minHeight(120)->ratio(1 / 1)],
            'email' => ['nullable', 'email', 'max:100'],
            'phone' => ['nullable', 'string', 'size:15'],
            'position_ru' => ['nullable', 'string'],
            'position_en' => ['nullable', 'string'],
        ];
    }

    public function search(): array
    {
        return ['id', 'name_ru', 'name_en', 'surname_ru', 'surname_en', 'slug', 'email', 'phone'];
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

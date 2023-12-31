<?php

namespace App\MoonShine\Resources;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Email;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;

class ContactResource extends Resource
{
    public static string $model = Contact::class;

    public static string $title = 'Контакты';

    public static array $activeActions = ['show', 'edit'];

    protected bool $editInModal = false;

    public function fields(): array
    {
        return [
            Block::make('Страница контактов', [
                Flex::make([
                    Email::make('email')
                        ->hint('Почта на странице контактов'),
                    Text::make('ИНН', 'inn')
                        ->hint('ИНН'),
                ]),
                Flex::make([
                    Text::make('Адрес', 'address_ru'),
                    Text::make('Адрес на английском', 'address_en')
                        ->hideOnIndex(),
                ]),
                Flex::make([
                    Email::make('Сотрудничество', 'feedback_email')
                        ->hint('Почта на которую приходят заявки на сотрудничество'),
                    Email::make('Почта для резюме', 'resume_email')
                        ->hint('Почта на которую приходят заявки со страницы карьеры'),
                    Email::make('Почта инструменты', 'tools_email')
                        ->hint('Почта, которая указана внизу страницы Инструменты'),
                ]),
            ]),

            Block::make('Общие поля у контактов сотрудников', [
                Flex::make([
                    Text::make('Сайт', 'website')
                        ->hideOnIndex(),
                    Url::make('Ссылка на карту с адресом', 'location')
                        ->hideOnIndex(),
                    Text::make('Название компании', 'company_name_ru')
                        ->hideOnIndex(),
                    Text::make('Company name', 'company_name_en')
                        ->hideOnIndex(),
                    Phone::make('Телефон', 'company_phone')
                        ->mask('7 999 999-99-99')
                        ->hideOnIndex(),
                ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'email' => ['nullable', 'email', 'max:255'],
            'inn' => ['nullable', 'string', 'max:255'],
            'address_ru' => ['nullable', 'string', 'max:255'],
            'address_en' => ['nullable', 'string', 'max:255'],
            'feedback_email' => ['nullable', 'email', 'max:255'],
            'resume_email' => ['nullable', 'email', 'max:255'],
            'tools_email' => ['nullable', 'email', 'max:255'],
            'company_phone' => ['nullable', 'string', 'max:255'],
            'company_name_ru' => ['nullable', 'string', 'max:255'],
            'company_name_en' => ['nullable', 'string', 'max:255'],
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
        Cache::delete('contacts');
    }

    protected function afterCreated(Model $item)
    {
        Cache::delete('contacts');
    }
}

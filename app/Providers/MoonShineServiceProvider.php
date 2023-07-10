<?php

namespace App\Providers;

use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\HomePageSlideResource;
use App\MoonShine\Resources\InstrumentResource;
use App\MoonShine\Resources\PublicationResource;
use App\MoonShine\Resources\VacancyResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Menu\MenuDivider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
			MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
				->translatable()
				->icon('users'),

			MenuDivider::make(), 
			
            MenuItem::make('Слайды на главной', HomePageSlideResource::class)
                ->icon('heroicons.rectangle-stack'),
			
			MenuItem::make('Публикации', PublicationResource::class)
                ->icon('heroicons.book-open'),

			MenuItem::make('Категории', CategoryResource::class)
                ->icon('app'),

			MenuItem::make('Инструменты', InstrumentResource::class)
                ->icon('heroicons.rocket-launch'),

			MenuItem::make('Вакансии', VacancyResource::class)
                ->icon('heroicons.user-plus'),

			MenuItem::make('Контакты', ContactResource::class)
                ->icon('heroicons.at-symbol'),
			
			MenuDivider::make(), 

			MenuItem::make('На сайт', '/')
				->icon('heroicons.home'),
        ]);
    }
}

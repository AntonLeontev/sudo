<header class="header">
    <div class="header__wrap">

        <button class="menu-btn header__menu-btn">
            <span></span>
            <span></span>
        </button>


        <a class="logo header__logo" href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/svg/logo.svg') }}" alt="лого">
        </a>

        <nav class="menu header__menu">
            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__link menu__link-list" href="#">{{ __('header.company') }}<i class="icon-arrow-bootom"></i></a>
                    <ul class="menu__list-2">
                        <li>
                            <a class="menu__link" href="{{ route('about') }}">{{ __('header.about') }}</a>
                        </li>
                        <li>
                            <a class="menu__link" href="{{ route('publications') }}">{{ __('header.publications') }}</a>
                        </li>
                        <li>
                            <a class="menu__link" href="{{ route('reviews') }}">{{ __('header.reviews') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="menu__item"><a class="menu__link" href="{{ route('services') }}">{{ __('header.services') }}</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('projects') }}">{{ __('header.projects') }}</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('calculations') }}">{{ __('header.instruments') }}</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('career') }}">{{ __('header.career') }}</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('contacts') }}">{{ __('header.contacts') }}</a></li>
            </ul>
            <ul class="menu__contact">
                <li><a href="mailto:{{ contacts()->email }}">{{ contacts()->email }}</a></li>
            </ul>
        </nav>

        <button class="header__search-btn search-btn">
            <i class="icon-search"></i>
        </button>
        <div class="header__lang lang">
            {{-- <button class="lang__btn">{{ strtoupper(app()->getLocale()) }}<i class="icon-arrow-bootom"></i></button> --}}
			@php
				if (app()->getLocale() === 'en') {
					$lang = 'ru';
				} else {
					$lang = 'en';
				}
			@endphp
			<a href="{{ route('language', $lang) }}">
				{{ strtoupper($lang) }}
			</a>
            {{-- <ul class="lang__list">
                <li>
					
				</li>
            </ul> --}}
        </div>

        <div class="header__search search">
            <button class="search__close">
                <i class="icon-close"></i>
            </button>
            <p class="search__text">{{ __('header.search') }}</p>
            <label class="search__label">
                <input class="search__input" type="text" placeholder="{{ __('header.search-placeholder') }}">
                <button class="search__btn">
                    <i class="icon-enter"></i>
                </button>
            </label>
        </div>
    </div>
</header>

@extends('layouts.app')

@section('title', __('services.title'))

@section('content')
	<main class="pt-50">

        <section class="services">
            <div class="container mb-25 mb-dest-140">
                <div class="block-3-7 services__block">
                    <div class="title-default-p">
                        <h2 class="title-h2 mb-28">{{ __('services.h1') }}</h2>
                        <p class="services__text text-justify ">{{ __('services.text') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mb-120-dest">
            <h3 class="title-h3 mb-37">{{ __('services.what-do.title') }}</h3>

            <ul class="services__list">
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-1.jpg') }}" alt="#">
                    <h3 class="projects-card__title">{{ __('services.what-do.1.title') }}</h3>
                    <div class="services__info">
                        <h4>{{ __('services.what-do.1.title') }}</h4>
                        <p class="text-justify">{{ __('services.what-do.1.text') }}</p>
                    </div>
                </li>
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-2.jpg') }}" alt="#">
                    <h3 class="projects-card__title">{{ __('services.what-do.2.title') }}</h3>
                    <div class="services__info">
                        <h4>{{ __('services.what-do.2.title') }}</h4> 
                        <p class="text-justify">{{ __('services.what-do.2.text') }}</p>
                    </div>
                </li>
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-3.jpg') }}" alt="#">
                    <h3 class="projects-card__title">{{ __('services.what-do.3.title') }}</h3>
                    <div class="services__info">
                        <h4>{{ __('services.what-do.3.title') }}</h4>
                        <p class="text-justify">{{ __('services.what-do.3.text') }}</p>
                    </div>
                </li>
            </ul>

        </section>

        <section class="container">
            <div class="block-3-7 jc-star mb-28 flex-direction-column-table flex-direction-row-dest">
                <div class="">
                    <h3 class="title-h3 mb-28">{{ __('services.stack.title') }}</h3>
                </div>
                <div>
                    <p class="services__text-2 mb-25">{{ __('services.stack.1') }} 
                    </p>
                    <p class="services__text-2 mb-37">
                        {{ __('services.stack.2') }}
                    </p>

                    <div class="flex-mob justify-content-center-mob justify-content-start-dest">
                        <picture>
                            <source srcset="{{ Vite::asset('resources/images/png/logo-dest.png') }}" media="(min-width: 900px)">
                            <img class="services__img-2" src="{{ Vite::asset('resources/images/png/logo-mob.png') }}" alt="фото">
                        </picture>
                    </div>
                </div>
            </div>
        </section>


        <section class="contacts__block-form mb-140">
            <x-cooperation />
        </section>
    </main>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

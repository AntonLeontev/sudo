@extends('layouts.app')

@section('title', __('reviews.title'))

@section('content')
	<main class="pt-50">
        
        <section class="reviews m-auto">
            <div class="container mb-dest-140 ">
                <div class="block-3-7 career__block">
                    <div class="h-337 title-default-m">
                        <h2 class="title-h2 mb-28">{{ __('reviews.h1') }}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="block-3-7 jc-star mb-28 flex-direction-column-table flex-direction-row-dest align-items-center-mob align-items-start-dest">
                <div>
                    <h3 class="title-h3 mb-28">{{ __('reviews.1') }}</h3>
                </div>
                <div>
                    <div class="flex-mob justify-content-end-dest">
                        <picture>
                            <source srcset="{{ Vite::asset('resources/images/jpg/reviews.png') }}" media="(min-width: 900px)">
                            <img src="{{ Vite::asset('resources/images/jpg/reviews.png') }}" alt="фото">
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

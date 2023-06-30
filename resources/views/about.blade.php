@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
	<main class="pt-50">

        <section class="about m-auto">
            <div class="container">
                <div class="block-3-7 career__block">
                    <div class="about__block-23 title-default-p">
                        <h2 class="title-h2 mb-28">{{ __('about.h1') }}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="about__work-compain bg--grey">
            <div class="container block-3-7">
                <div>
                    <h3 class="title-h3 mb-13">{{ __('about.work.title') }}</h3>
                </div>
                <div class=" mb-63">
                    <p class="about__work-compain--text mb-37 text-justify ">
                        {{ __('about.work.1') }}
                        <br>
                        {{ __('about.work.2') }} <a href="{{ route('projects') }}">{{ __('about.work.link') }}</a>. {{ __('about.work.3') }}
                        <ul class="re-list">
                            <li class="about__work-compain--text text-justify ">{{ __('about.work.list.1') }}</li>
                            <li class="about__work-compain--text text-justify ">{{ __('about.work.list.2') }}</li>
                            <li class="about__work-compain--text text-justify ">{{ __('about.work.list.3') }}</li>
                        </ul>
                    </p>
                    
                </div>
            </div>
        </section>

        <section class="about__experts">
            <div class="container block-3-7">
                <div>
                    <h3 class="title-h3 mb-13">{{ __('about.spec.title') }}</h3>
                </div>
                <div class="about__experts--block">
                    <p class="about__experts--text text-justify ">
                        {{ __('about.spec.text') }}
                    </p>
                    <ul class="about__experts--list">
                        <li class="about__experts--item">{{ __('about.spec.list.1') }}</li>
                        <li class="about__experts--item">{{ __('about.spec.list.2') }}</li>
                        <li class="about__experts--item">{{ __('about.spec.list.3') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="card-box index-mission mt-40 ps-40">
            <div class="container index-mission__block ret-1">
                <div class="index-mission__flex">
                    <div class="index-mission__text-animate">
                        <img class="index-mission__text-animate--1 anime-9" src="{{ Vite::asset('resources/images/svg/text.svg') }}" alt="">
                        <a class="index-mission__text-animate--2" href="{{ route('career') }}">
                            <img src="{{ Vite::asset('resources/images/png/play.png') }}" alt="">
                        </a>
                    </div>
                    <p class="index-mission__text index-mission__text-2 wow fadeInUp mt-40 text-justify ">
                        {{ __('about.team.text') }}
                    </p>
                </div>
                <!-- <div >
                    <div class="d-none-f d-none-996">
                        <img src="images/jpg/bg_main-6.jpg" alt="">
                    </div>
                </div> -->


            </div>
        </section>
    </main>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

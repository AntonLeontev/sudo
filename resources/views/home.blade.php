@extends('layouts.app')

@section('title', __('home.title'))

@section('body-class', 'main-blue')

@section('content')
    <main>

        <section class="hero card-box card-box--active">
            <div class="hero__wrap ps-40">

                <h1 class="mob">{{ __('home.h1.mob') }}</h1>

                <h1 class="tab dest">
                    <span class="hero__title">{{ __('home.h1.1') }}</span>
                    <span class="hero__title">{{ __('home.h1.2') }}</span>
                    <span class="hero__title">{{ __('home.h1.3') }}</span>
                </h1>

                <span class="hero__elem mob">{{ __('home.down') }}</span>
                <div class="hero__el dest-f ps-40">
                    <span class="hero__el--arrow"></span>
                    <span class="hero__el--text">{{ __('home.down') }}</span>
                </div>
            </div>
            <div class="hero__img d-none-f">
                <img class="img-js" src="{{ Vite::asset('resources/images/png/mask-sudo-tilda.png') }}" alt="">
                <!-- <img class="img-js" src="images/svg/sudo.svg" alt=""> -->
            </div>
        </section>

        <section class="card-box index-about ps-40">
            <div class="index-about__wrap">
                <div class="index-about__block-one">
                    <h2>{{ __('home.subtitle') }}</h2>
                </div>
                <div class="index-about__block-two">
                    <p>
                        {{ __('home.text') }}
                    </p>
                    <a class="btn btn--white elem-a1 wow fadeInUp" href="{{ route('about') }}">
                        <span>{{ __('home.more') }}</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>
        </section>

		@if (slides()->isNotEmpty())
			<div class="ps-100 container">
				<x-home-page-slider>
					@foreach (slides() as $slide)
						<x-home-page-slider.slide :$slide :position="$loop->iteration" :total="$loop->count" />
					@endforeach
				</x-home-page-slider>
			</div>
		@endif

        <section class="card-box index-benefits ps-40">
            <div class="index-benefits__block container">
                <div class="index-benefits__block-1">
                    <h3 class="index-benefits__title">{{ __('home.advantages.title') }}</h3>
                </div>
                <div class="index-benefits__block-2">
                    <div class="wave-block dest">
                        <ul class="wave-block__list">
                            <li class="wave-block__item">
                                <img src="{{ Vite::asset('resources/images/jpg/wave-left.jpg') }}" alt="#">
                            </li>
                            <li class="wave-block__item elem-a8">
                                <img src="{{ Vite::asset('resources/images/jpg/wave-center-1.jpg') }}" alt="#">
                            </li>
                            <li class="wave-block__item elem-a9">
                                <img src="{{ Vite::asset('resources/images/jpg/wave-center-2.jpg') }}" alt="#">
                            </li>
                            <li class="wave-block__item elem-a10">
                                <img src="{{ Vite::asset('resources/images/jpg/wave-center-3.jpg') }}" alt="#">
                            </li>
                            <li class="wave-block__item">
                                <img src="{{ Vite::asset('resources/images/jpg/wave-right.jpg') }}" alt="#">
                            </li>
                        </ul>
                    </div>
                    <ul class="index-benefits__list">
                        <li class="index-benefits__item wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".5s">{{ __('home.advantages.1') }}</li>
                        <li class="index-benefits__item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">{{ __('home.advantages.2') }}</li>
                        <li class="index-benefits__item wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1.5s">{{ __('home.advantages.3') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="card-box index-services ps-40">
            <div class="index-services__block container">
                <div class="index-services__block-1">
                    <h3 class="color--white mb-28">{{ __('home.services.title') }}</h3>
                    <a class="btn btn--white border-color wow fadeInUp" href="{{ route('services') }}">
                        <span class="color--white">{{ __('home.more') }}</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
                <div class="services-block index-services__block-2">

                    <div class="services-block__nav color--white">
                        <button class="services-block__nav-btn-l color--white border-color" disabled>
                            <i class="icon-arrow color--white"></i>
                        </button>
                        <button class="services-block__nav-btn-r color--white border-color">
                            <i class="icon-arrow color--white"></i>
                        </button>
                    </div>

                    <div class="services-block__progess bg--2931">
                        <span class="services-block__progess--elem bg--white"></span>
                    </div>

                    <ul class="services-block__list">
                        <li class="services-block__item services-block__item--active color--white">
                            <h4 class="color--white wow fadeInUp">{{ __('home.services.1.title') }}</h4>
                            <p class="color--white wow fadeInUp">{{ __('home.services.1.text') }}</p>
                        </li>
                        <li class="services-block__item color--white">
                            <h4 class="color--white wow fadeInUp">{{ __('home.services.2.title') }}</h4>
                            <p class="color--white wow fadeInUp">{{ __('home.services.2.text') }}</p>
                        </li>
                        <li class="services-block__item color--white">
                            <h4 class="color--white wow fadeInUp">{{ __('home.services.3.title') }}</h4>
                            <p class="color--white wow fadeInUp">{{ __('home.services.3.text') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="card-box index-mission ps-40 mt-40">
            <div class="index-mission__block ret-1 container">
                <div>
                    <div class="index-mission__text-animate">
						@php
							$lang = app()->getLocale();
						@endphp
                        <img class="index-mission__text-animate--1 anime-9" 
							src="{{ Vite::asset("resources/images/svg/text_{$lang}.svg") }}" alt=""
						/>
                        <a class="index-mission__text-animate--2" href="{{ route('career') }}">
                            <img src="{{ Vite::asset('resources/images/png/play.png') }}" alt="">
                        </a>
                    </div>
                    <p class="index-mission__text wow fadeInUp">
                        {{ __('home.career.text') }}
                    </p>
                </div>
                <div>
                    <div class="d-none-f d-none-996">
                        <img src="{{ Vite::asset('resources/images/jpg/bg_main-6.jpg') }}" alt="">
                    </div>
                </div>


            </div>
        </section>
    </main>

    <section class="modal-feedback">
        <button class="modal-feedback__close">
            <i class="icon-close"></i>
        </button>
        <h3 class="modal-feedback__title">Хотите предложить сотрудничество или заказать услугу?</h3>
        <p class="modal-feedback__text">Заполните форму и наши специалисты свяжутся с вами для обсуждения деталей</p>

        <form class="form">
            <input class="form__input" name="Контактное лицо" type="text" placeholder="Контактное лицо">
            <input class="form__input" name="Телефон" type="tel" placeholder="Телефон">
            <input class="form__input" name="Email" type="email" placeholder="Email">
            <textarea class="form__textarea" name="Описание проекта" placeholder="Описание проекта"></textarea>
            <label class="form__checkbox">
                <input class="form__input--none" type="checkbox">
                <span class="form__checkbox-elem"></span>
                <span class="form__checkbox-text text-justify">
                    Нажимая кнопку Отправить, я даю согласие на обработку моих персональных данных и соглашаюсь с <a
                        href="{{ route('policy') }}">Политикой конфиденциальности</a>
                </span>
            </label>
            <button class="form__btn btn" data-bs-toggle="modal" data-bs-target="#thankYouModal" type="submit">
                <span>Отправить</span>
                <i class="icon-enter"></i>
            </button>
        </form>
    </section>

    <!-- Модальное окно Благодарности -->
    <section class="modal fade thank-modal" id="thankYouModal" aria-labelledby="thankYouModalLabel" aria-hidden="true"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button class="thank-modal__btn-close btn-close" data-bs-dismiss="modal" type="button"
                        aria-label="Закрыть"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div class="thank-modal__content">
                        <p class="thank-modal__text w-75 h2 m-auto px-4 pb-3 text-center">
                            Спасибо, Ваша заявка принята!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="libs/bezier.js"></script>
    <script src="libs/swiped-events.min.js"></script>
    <script src="libs/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script src="js/animate.js"></script> -->
    <script src="js/a4.js"></script>
    <script src="js/app.js"></script>
    <script>
        new WOW().init();

        $(window).enllax();



        const indexBlockBbtn = document.querySelectorAll('.index-block__btn')
        const modalFeedback = document.querySelector('.modal-feedback')



        indexBlockBbtn.forEach(function (event) {
            event.addEventListener('click', function (event) {
                modalFeedback.classList.add('modal-feedback--active')

                modalFeedback.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
            })
        })


        const modalFeedbackClose = document.querySelector('.modal-feedback__close')

        modalFeedbackClose.addEventListener('click', () => {
            modalFeedback.classList.remove('modal-feedback--active')
        })

        const servicesBlockNavBtnLeft = document.querySelector('.services-block__nav-btn-l')
        const servicesBlockNavBtnRight = document.querySelector('.services-block__nav-btn-r')
        const servicesBlockItem = document.querySelectorAll('.services-block__item')
        const servicesBlockProgess = document.querySelector('.services-block__progess--elem')
        let count = 0
        let positionElement = 0

        let i = 100 / servicesBlockItem.length
        servicesBlockProgess.style.width = i + '%'

        servicesBlockNavBtnRight.addEventListener('click', () => {
            count++
            positionElement += i
            servicesBlockNavBtnLeft.removeAttribute('disabled');
            if (count == servicesBlockItem.length - 1) {
                servicesBlockNavBtnRight.setAttribute('disabled', false);
            }
            servicesBlockProgess.style.left = positionElement + "%"
            servicesBlockItem.forEach(el => el.classList.remove('services-block__item--active'))
            servicesBlockItem[count].classList.add('services-block__item--active')
        })

        servicesBlockNavBtnLeft.addEventListener('click', () => {
            count--
            positionElement -= i
            servicesBlockNavBtnRight.removeAttribute('disabled');
            if (count == 0) {
                servicesBlockNavBtnLeft.setAttribute('disabled', true);
            }
            servicesBlockProgess.style.left = positionElement + "%"
            servicesBlockItem.forEach(el => el.classList.remove('services-block__item--active'))
            servicesBlockItem[count].classList.add('services-block__item--active')
        })


        const swiper = new Swiper('.swiper-box', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection

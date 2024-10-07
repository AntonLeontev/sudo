<!DOCTYPE html>
<html lang="ru" class="">

<head>
    <title>{{ __('horizon.title') }}</title>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="/horizon-dir/css/style.min.css?_v=20240205004246" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	@vite(['resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <a href="/" class="header__logo logo">
                    <picture>
                        <source srcset="/horizon-dir/img/logo.webp" type="image/webp" />
                        <img src="/horizon-dir/img/logo.png" alt="Logo" />
                    </picture>
                </a>
				<div class="header__lang lang">
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
				</div>
                <div class="header__menu menu">
                    <button type="button" class="menu__icon icon-menu">
                        <span></span>
                    </button>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header
                                    data-goto=".functions">{{ __('horizon.menu.1') }}</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header
                                    data-goto=".benefits">{{ __('horizon.menu.2') }}</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".about">
									{{ __('horizon.menu.3') }}
								</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".variants">
									{{ __('horizon.menu.4') }}
								</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".footer">{{ __('horizon.menu.5') }}</a>
                            </li>
                        </ul>
                        <div class="menu__buttons">
                            <a href="" class="button _icon-arrow" data-goto-header data-goto=".footer">
								{{ __('horizon.menu.6') }}
							</a>
                            <a href="" class="button button_outline _icon-arrow">{{ __('horizon.menu.7') }}</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <main class="page">
            <section class="hero">
                <picture class="hero__picture">
                    <source media="(min-width: 767.98px)" srcset="/horizon-dir/img/hero-bg.jpg" />
                    <img class="hero__bg" src="/horizon-dir/img/hero-bg_m.jpg" alt="Image" />
                </picture>
                <div class="hero__container">
                    <div class="hero__content wow animate__zoomIn">
                        <h1 class="hero__title title title_h1">{{ __('horizon.1.h1') }}</h1>
                        <div class="hero__text text-accent">
                            {{ __('horizon.1.subtitle') }}
                        </div>
                        <button class="hero__btn button _icon-arrow" data-goto-header data-goto=".footer"
                            type="button">
                            {{ __('horizon.1.btn') }}
                        </button>
                    </div>
                </div>
            </section>
            <section class="functions section-bottom">
                <div class="functions__container">
                    <h2 class="functions__title title title_line wow animate__fadeInUp" data-watch-once
                        data-watch-threshold="1" data-watch>
                        {{ __('horizon.2.title') }}
                    </h2>
                    <ol class="functions__list">
                        <li class="functions__item wow animate__fadeInRight">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/01.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    {{ __('horizon.2.1') }}
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".3s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/02.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    {{ __('horizon.2.2') }}
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".6s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/03.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    {{ __('horizon.2.3') }}
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".9s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/04.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    {{ __('horizon.2.4') }}
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay="1.2s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/05.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    {{ __('horizon.2.5') }}
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </section>
            <section class="benefits section-bottom">
                <div class="benefits__container">
                    <h2 class="benefits__title title title_line wow animate__fadeInUp" data-watch-once
                        data-watch-threshold="1" data-watch>
                        {{ __('horizon.3.title') }}
                    </h2>
                    <div class="benefits__items wow animate__fadeIn">
                        <ul class="benefits__list">
                            <li class="text">{{ __('horizon.3.1') }}</li>
                            <li class="text">
                                {{ __('horizon.3.2') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.3') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.4') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.5') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.6') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.7') }}
                            </li>
                            <li class="text">
                                {{ __('horizon.3.8') }}
                            </li>
                            <li class="text">{{ __('horizon.3.9') }}</li>
                        </ul>
                        <div class="benefits__img">
                            <picture>
                                <source srcset="/horizon-dir/img/benefits-img.webp" type="image/webp" />
                                <img src="/horizon-dir/img/benefits-img.jpg" alt="Image" />
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about section-bottom">
                <div class="about__container">
                    <h2 class="about__title title title_line wow animate__fadeInUp" data-watch-threshold="1"
                        data-watch-once data-watch>
                        {{ __('horizon.4.title') }}
                    </h2>
                    <div class="about__inner wow animate__fadeIn">
                        <div class="about__video">
                            <div class="video-block">
                                <div class="video-block__value">
                                    <div class="video-block__inner">
                                        <div class="video-block__img -ibg">
                                            <picture>
                                                <source srcset="/horizon-dir/img/video.webp" type="image/webp" />
                                                <img src="/horizon-dir/img/video.jpg" alt="Image" />
                                            </picture>
                                        </div>
                                        <button class="video-btn" type="button" data-video-id="cSxKuhEY0ro">
                                            <svg width="100%" height="100%" viewBox="0 0 150 153" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M118.75 72C118.753 73.0611 118.481 74.1047 117.96 75.0295C117.44 75.9542 116.689 76.7286 115.781 77.2774L59.5 111.707C58.5511 112.288 57.4643 112.605 56.3519 112.626C55.2394 112.646 54.1416 112.37 53.1719 111.824C52.2114 111.287 51.4112 110.504 50.8538 109.555C50.2963 108.606 50.0016 107.526 50 106.426V37.5742C50.0016 36.4738 50.2963 35.3936 50.8538 34.4448C51.4112 33.496 52.2114 32.7128 53.1719 32.1758C54.1416 31.6303 55.2394 31.3535 56.3519 31.3741C57.4643 31.3947 58.5511 31.7119 59.5 32.293L115.781 66.7227C116.689 67.2714 117.44 68.0458 117.96 68.9706C118.481 69.8953 118.753 70.939 118.75 72Z"
                                                    fill="white" />
                                                <path
                                                    d="M149 76.6281C149 117.964 115.859 151.455 75 151.455C34.1412 151.455 1 117.964 1 76.6281C1 35.2922 34.1412 1.80167 75 1.80167C115.859 1.80167 149 35.2922 149 76.6281Z"
                                                    stroke="white" stroke-width="2" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__content content-about">
                            <h3 class="content-about__title title title_h3">
                                {{ __('horizon.4.1') }}
                            </h3>
                            <div class="content-about__items">
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        {{ __('horizon.4.2') }}
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        {{ __('horizon.4.3') }}
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        {{ __('horizon.4.4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="variants section-bottom">
                <div class="variants__container">
                    <div class="variants__title title title_line wow animate__fadeInUp" data-watch-threshold="1"
                        data-watch-once data-watch>
                        {{ __('horizon.5.title') }}
                    </div>
                    <div class="variants__items wow animate__fadeIn">
                        <div class="variant">
                            <div class="variant__title title title_h3">
                                {{ __('horizon.5.1') }}
                            </div>
                            <div class="variant__text text">
                                {{ __('horizon.5.2') }}
                            </div>
                            <div class="variant__icon">
                                <img src="/horizon-dir/img/icons/variants/01.svg" alt="Image" />
                            </div>
                        </div>
                        <div class="variant">
                            <div class="variant__title title title_h3">
                                {{ __('horizon.5.3') }}
                            </div>
                            <div class="variant__text text">
                                {{ __('horizon.5.4') }}
                            </div>
                            <div class="variant__icon">
                                <img src="/horizon-dir/img/icons/variants/02.svg" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer wow animate__fadeIn">
            <div class="footer__form footer-form">
                <div class="footer-form__container">
                    <div class="footer-form__col">
                        <div class="footer__title title title_h2">
                            {{ __('horizon.footer.1') }}
                        </div>
                        <div class="footer__text">
                            {{ __('horizon.footer.2') }}
                        </div>
                        <a href="mailto:horizon@sudo.team" class="footer__mail title title_h3">
                            horizon@sudo.team
                        </a>
                        <a href="" class="footer__btn button button_outline _icon-arrow">
                            {{ __('horizon.footer.3') }}
                        </a>
                    </div>
                    <div class="footer-form__col">
                        <form id="form" class="form">
							@csrf
                            <div class="form__line">
                                <input class="form__input input" autocomplete="off" type="text" name="name"
                                    placeholder="{{ __('horizon.footer.name') }}*" required />
                            </div>
                            <div class="form__line">
                                <input class="form__input input" autocomplete="off" type="text" name="phone"
                                    placeholder="{{ __('horizon.footer.phone') }}*" required />
                            </div>
                            <div class="form__line">
                                <button class="form__button button _icon-arrow" id="form__button" type="submit">
                                    {{ __('horizon.footer.4') }}
                                </button>
                                <div class="form__agree">
                                    {{ __('horizon.footer.5') }}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__container">
                    <ul class="footer-menu">
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".functions">{{ __('horizon.footer.6') }}</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".benefits">{{ __('horizon.footer.7') }}</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".about">{{ __('horizon.footer.8') }}</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".variants">{{ __('horizon.footer.9') }}</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".footer">{{ __('horizon.footer.10') }}</a>
                        </li>
                    </ul>
                    <div class="footer-info">
                        <a href="" class="footer-info__item footer-link">{{ __('horizon.footer.11') }}</a>
                        <div class="footer-info__item footer-info__text">
                            {{ __('horizon.footer.12') }}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="popup" aria-hidden="true" class="popup">
        <div class="popup__wrapper">
            <div class="popup__content">
                <button data-close type="button" class="popup__close _icon-close"></button>
                <div class="popup__text">
                    <div class="success-popup">
                        <div class="success-popup__info">
                            <div class="success-popup__title title title_line">
                                {{ __('horizon.popup.1') }}
                            </div>
                            <div class="success-popup__text text">
                                {{ __('horizon.popup.2') }}
                            </div>
                        </div>
                        <div class="success-popup__img -ibg">
                            <picture>
                                <source srcset="/horizon-dir/img/popup-img.webp" type="image/webp" />
                                <img src="/horizon-dir/img/popup-img.jpg" alt="Image" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script>
		let button = document.querySelector('#form__button');

		form.addEventListener('submit', async (event) => {
			event.preventDefault();
			
			button.disabled = true

			let data = new FormData(event.target);

			axios
				.post('horizon', data)
				.then(resp => {
					console.log(resp.data);
				
					popup.classList.add('popup_show');
					document.documentElement.classList.add('popup-show');
					// document.documentElement.classList.add('lock');
					button.disabled = false
				})
				.catch(err => {
					alert('Ошибка отправки')
				})
		})
	</script>

    <script src="/horizon-dir/js/app.min.js?_v=20240205004246"></script>
</body>

</html>

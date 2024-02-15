<!DOCTYPE html>
<html lang="ru" class="">

<head>
    <title>Главная</title>
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
                <div class="header__menu menu">
                    <button type="button" class="menu__icon icon-menu">
                        <span></span>
                    </button>
                    <nav class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header
                                    data-goto=".functions">Функционал</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header
                                    data-goto=".benefits">Преимущества</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".about">Алгоритм
                                    работы</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".variants">Варианты
                                    внедрения</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link" data-goto-header data-goto=".footer">Контакты</a>
                            </li>
                        </ul>
                        <div class="menu__buttons">
                            <a href="" class="button _icon-arrow" data-goto-header data-goto=".footer">Оставить
                                заявку</a>
                            <a href="" class="button button_outline _icon-arrow">Скачать презентацию</a>
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
                        <h1 class="hero__title title title_h1">Горизонт</h1>
                        <div class="hero__text text-accent">
                            Програмный комплекс для&nbsp;глубокой автоматизации
                            проектирования газо-&nbsp;и&nbsp;электросетей
                        </div>
                        <button class="hero__btn button _icon-arrow" data-goto-header data-goto=".footer"
                            type="button">
                            Оставить заявку
                        </button>
                    </div>
                </div>
            </section>
            <section class="functions section-bottom">
                <div class="functions__container">
                    <h2 class="functions__title title title_line wow animate__fadeInUp" data-watch-once
                        data-watch-threshold="1" data-watch>
                        Функционал
                    </h2>
                    <ol class="functions__list">
                        <li class="functions__item wow animate__fadeInRight">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/01.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    Создает карту путей прокладки трасс в заданной локации
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".3s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/02.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    Определяет уровень сложности прохождения каждого участка
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".6s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/03.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    Предлагает набор оптимальных маршрутов по разным критериям
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay=".9s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/04.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    Предоставляет оценку выбранного решения
                                </div>
                            </div>
                        </li>
                        <li class="functions__item wow animate__fadeInRight" data-wow-delay="1.2s">
                            <div class="functions-item">
                                <div class="functions-item__icon">
                                    <img src="/horizon-dir/img/icons/functions/05.svg" alt="Image" />
                                </div>
                                <div class="functions-item__text">
                                    Формирует ключевые документы для получения разрешения на
                                    строительство
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
                        Преимущества
                    </h2>
                    <div class="benefits__items wow animate__fadeIn">
                        <ul class="benefits__list">
                            <li class="text">Проектирование в автоматическом режиме</li>
                            <li class="text">
                                Соответствие требованиям ГОСТ и СНиП, локальным нормативным
                                документам
                            </li>
                            <li class="text">
                                Высокая скорость построения нового маршрута
                            </li>
                            <li class="text">
                                Учёт всех объектов и коммуникации на пути возможной прокладки
                                трассы
                            </li>
                            <li class="text">
                                Создание оптимальных маршрутов для выбранных параметров
                            </li>
                            <li class="text">
                                Минимизация возможности возникновения ошибок проектирования,
                                связанных с человеческим фактором
                            </li>
                            <li class="text">
                                Автоматический расчёт стоимости строительства
                            </li>
                            <li class="text">
                                Возможность проверки плана, созданного инженером в ручном
                                режиме
                            </li>
                            <li class="text">Возможность масштабирования системы</li>
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
                        Подробнее о нашем комплексе
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
                                В результате работы системы вы&nbsp;получаете:
                            </h3>
                            <div class="content-about__items">
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        Создание предварительного маршрута, который содержит
                                        предварительную оценку и&nbsp;план проходки геодезистов
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        Детальный маршрут с планом и&nbsp;схемой прокладки трассы
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item__text text">
                                        Формирование ключевых документов для разрешения
                                        на&nbsp;строительство
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
                        Варианты внедрения
                    </div>
                    <div class="variants__items wow animate__fadeIn">
                        <div class="variant">
                            <div class="variant__title title title_h3">
                                Как интеграция в&nbsp;существующую систему
                            </div>
                            <div class="variant__text text">
                                При интеграции ГОРИЗОНТа в ГИС заказчика, обмен данными
                                происходит по API. Передаваемые в ГОРИЗОНТ данные содержат
                                карты и параметры заявок на проектирование новых сетей.
                            </div>
                            <div class="variant__icon">
                                <img src="/horizon-dir/img/icons/variants/01.svg" alt="Image" />
                            </div>
                        </div>
                        <div class="variant">
                            <div class="variant__title title title_h3">
                                Как автономное решение
                            </div>
                            <div class="variant__text text">
                                При поставке автономного решения, мы предлагаем независимую
                                систему с собственным интерфейсом пользователя и инструментами
                                импорта-экспорта данных.
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
                            Заинтересовал наш Комплекс?
                        </div>
                        <div class="footer__text">
                            Оставьте заявку и&nbsp;наши менеджеры проконсультируют вас по
                            любому вопросу или&nbsp;напишите на&nbsp;почту
                        </div>
                        <a href="mailto:contact@gorizont.ru" class="footer__mail title title_h3">
                            contact@gorizont.ru
                        </a>
                        <a href="" class="footer__btn button button_outline _icon-arrow">
                            Скачать презентацию
                        </a>
                    </div>
                    <div class="footer-form__col">
                        <form id="form" class="form">
							@csrf
                            <div class="form__line">
                                <input class="form__input input" autocomplete="off" type="text" name="name"
                                    placeholder="Имя*" required />
                            </div>
                            <div class="form__line">
                                <input class="form__input input" autocomplete="off" type="text" name="phone"
                                    placeholder="Телефон*" required />
                            </div>
                            <div class="form__line">
                                <button class="form__button button _icon-arrow" id="form__button" type="submit">
                                    Оставить заявку
                                </button>
                                <div class="form__agree">
                                    Нажимая кнопку “Оставить заявку” вы соглашаетесь на
                                    обработку персональных данных
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
                                data-goto=".functions">Функционал</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".benefits">Преимущества</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".about">Подробнее</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".variants">Варианты внедрения</a>
                        </li>
                        <li class="footer-menu__item">
                            <a href="" class="footer-menu__link" data-goto-header
                                data-goto=".footer">Контакты</a>
                        </li>
                    </ul>
                    <div class="footer-info">
                        <a href="" class="footer-info__item footer-link">Политика конфиденциальности</a>
                        <div class="footer-info__item footer-info__text">
                            2024 © ГОРИЗОНТ
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
                                Спасибо за вашу заявку
                            </div>
                            <div class="success-popup__text text">
                                Наш менеджер свяжется с вами в&nbsp;ближайшее время
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

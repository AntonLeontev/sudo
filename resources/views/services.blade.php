@extends('layouts.app')

@section('title', __('services.title'))

@section('content')
	<main class="pt-50">

        <section class="services">
            <div class="container mb-25 mb-dest-140">
                <div class="block-3-7 services__block">
                    <div class="title-default-p">
                        <h2 class="title-h2 mb-28">Услуги</h2>
                        <p class="services__text text-justify ">Компания Судо готова реализовать ваш проект, используя преимущественно проверенные высокотехнологичные решения, передовые методики и методологии в разработке и управлении проектами. Мы предлагаем оптимальные решения для получения максимальной производительности и эффективности в решении сложных задач</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mb-120-dest">
            <h3 class="title-h3 mb-37">Что мы делаем</h3>

            <ul class="services__list">
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-1.jpg') }}" alt="#">
                    <h3 class="projects-card__title">Проектирование</h3>
                    <div class="services__info">
                        <h4>Проектирование</h4>
                        <p class="text-justify">Создание любого продукта начинается с идеи. Наша опытная команда поможет Вам на каждом этапе создания продукта. Основываясь на Ваших пожеланиях, мы поможем сформулировать идею, предложим интересные решения, вместе сформируем техническое задание и предоставим Вам готовый проект</p>
                    </div>
                </li>
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-2.jpg') }}" alt="#">
                    <h3 class="projects-card__title">Разработка</h3>
                    <div class="services__info">
                        <h4>Разработка</h4> 
                        <p class="text-justify">Мы – современная команда, использующая гибкие методологии разработки продукта. Созданный проект остаётся живым в процессе реализации. Для достижения лучшего результата мы работаем над продуктом, оставаясь с Вами на связи. Наши разработчики создадут оптимальные решения, используя передовые технологии для реализации Ваших идей, а Ваши корректировки в процессе разработки помогут создать актуальный продукт, полностью удовлетворяющий Вашим запросам</p>
                    </div>
                </li>
                <li class="services__item">
                    <img class="services__img" src="{{ Vite::asset('resources/images/jpg/sphera-3.jpg') }}" alt="#">
                    <h3 class="projects-card__title">Исследования</h3>
                    <div class="services__info">
                        <h4>Исследования</h4>
                        <p class="text-justify">Исследовательская деятельность – это наше тайное оружие. Постоянное участие компании в научных и инженерных исследованиях помогает нам сохранять первенство в использовании наукоёмких технологий на практике. Среди наших штатных разработчиков есть действующие сотрудники топовых российских и зарубежных ВУЗов. Кроме того, мы активно работаем со студентами, поддерживаем их и помогаем им развиваться, а самым перспективным предлагаем влиться в нашу дружную команду</p>
                    </div>
                </li>
            </ul>

        </section>

        <section class="container">
            <div class="block-3-7 jc-star mb-28 flex-direction-column-table flex-direction-row-dest">
                <div class="">
                    <h3 class="title-h3 mb-28">Стек технологий</h3>
                </div>
                <div>
                    <p class="services__text-2 mb-25">Мы приверженцы взвешенного подхода при выборе используемых в разработке технологий. При создании новых продуктов мы комплексно оцениваем задачу с целью определения оптимального набора используемых инструментов, языков, технологий. 
                    </p>
                    <p class="services__text-2 mb-37">
                        У нас есть опыт в разработке fintech и blockchain проектов, в программировании GPU с помощью технологий CUDA и OpenCL, в разработке для FPGA Xilinx и низкоуровневом системном программировании под Linux
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
            <div class="container block">
                <div class="mb-63">
                    <h3 class="title-h3 mb-28">Хотите предложить сотрудничество или заказать услугу?</h3>
                    <p class="contacts__text">Заполните форму и наши специалисты свяжутся с вами для обсуждения деталей</p>
                </div>
                <div>
                    <form class="form">
                        <input class="form__input" name="Контактное лицо" type="text" placeholder="Контактное лицо">
                        <input class="form__input" name="Телефон" type="tel" placeholder="Телефон">
                        <input class="form__input" name="Email" type="email" placeholder="Email">
                        <textarea class="form__textarea" name="Описание проекта" placeholder="Описание проекта"></textarea>
                        <label class="form__checkbox">
                            <input class="form__input--none" type="checkbox">
                            <span class="form__checkbox-elem"></span>
                            <span class="form__checkbox-text text-justify ">
                                Нажимая кнопку Отправить, я даю согласие на обработку моих персональных данных и соглашаюсь с <a href="{{ route('policy') }}">Политикой конфиденциальности</a>
                            </span>
                        </label>
                        <button type="submit" class="form__btn btn" data-bs-toggle="modal" data-bs-target="#thankYouModal">
                            <span>Отправить</span>
                            <i class="icon-enter"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Модальное окно Благодарности -->
    <section class="modal fade thank-modal" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="thank-modal__btn-close btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div class="thank-modal__content">
                        <p class="thank-modal__text w-75 m-auto h2 pb-3 px-4 text-center">
                            Спасибо, Ваша заявка принята!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

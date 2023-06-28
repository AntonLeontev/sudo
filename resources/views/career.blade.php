@extends('layouts.app')

@section('title', __('career.title'))

@section('content')
	<main class="career m-auto pt-50">

        <section class="container mb-dest-140 ">
            <div class="block-3-7 career__block">
                <div class="title-default-p">
                    <h2 class="title-h2 mb-28">Карьера</h2>
                    <p class="career__text text-justify ">Основной состав команды – энергичные, заряженные и горящие любимым делом специалисты. Мы в поиске таких же, как и мы. Хочешь стать частью нашей команды – отправляй резюме.</p>
                </div>
            </div>
        </section>

        <!-- <section class="container">
            <div class="block-3-7 jc-star mb-28 mb-table-70">
                <div class="">
                    <h3 class="title-h3 ">Программист GPU</h3>
                </div>
                <div>
                    <p class="career__text mb-25">Развивать систему платежей и переводов в Банке: отрисовывать дизайн платёжных интерфейсов, разрабатывать макеты сопутствующих материалов (онбординг, продвижение и прочие).</p>
                    <div class="career__box">
                        <ul>
                            <li class="title-h4 mb-13">Стек</li>
                            <li>Figma, Photoshop, Cinema, After Effects</li>
                        </ul>
                        <ul>
                            <li class="title-h4 mb-13">Зарплата</li>
                            <li>150000 – 200000 руб</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block-3-7 jc-star">
                <div class="">
                    <h3 class="title-h3 ">Программист GPU</h3>
                </div>
                <div>
                    <p class="career__text mb-25">Развивать систему платежей и переводов в Банке: отрисовывать дизайн платёжных интерфейсов, разрабатывать макеты сопутствующих материалов (онбординг, продвижение и прочие).</p>
                    <div class="career__box">
                        <ul>
                            <li class="title-h4 mb-13">Стек</li>
                            <li>Figma, Photoshop, Cinema, After Effects</li>
                        </ul>
                        <ul>
                            <li class="title-h4 mb-13">Зарплата</li>
                            <li>150000 – 200000 руб</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="contacts__block-form mb-140">
            <div class="container block">
                <div class="mb-63">
                    <h3 class="title-h3 mb-28">Готовы прислать свое резюме?</h3>
                    <p class="contacts__text text-justify ">Заполните форму и наши специалисты рассмотрят Ваше резюме. В случае положительно ответа, мы с Вами свяжемся</p>
                    <p class="contacts__text-1 text-justify ">К сожалению, в настоящий момент у нас нет открытых вакансий. Однако, если Вы очень хотите с нами работать, пришлите нам своё резюме.</p>
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
	<script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

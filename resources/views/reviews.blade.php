@extends('layouts.app')

@section('title', __('reviews.title'))

@section('content')
	<main class="pt-50">
        
        <section class="reviews m-auto">
            <div class="container mb-dest-140 ">
                <div class="block-3-7 career__block">
                    <div class="h-337 title-default-m">
                        <h2 class="title-h2 mb-28">Отзывы</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="block-3-7 jc-star mb-28 flex-direction-column-table flex-direction-row-dest align-items-center-mob align-items-start-dest">
                <div>
                    <h3 class="title-h3 mb-28">ФГУП ВНИИ им. Д.И. Менделеева</h3>
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

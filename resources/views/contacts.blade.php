@extends('layouts.app')

@section('title', __('contacts.title'))

@section('content')
	<main class="pt-50">

        <section class="container mb-140 ">
            <h2 class="title-h2 mb-25 mt-dest-110">Контакты</h2>
            <div class="block">
                <div>
                    <ul class="contacts__adress">
                        <li><a href="mailto:info@sudo.team">info@sudo.team</a></li>
                        <li>г. Санкт-Петербург, ул. Нахимова, 20</li>
                        <li>ИНН: 7801646991</li>
                    </ul>
                </div>
                <div>
                    <iframe class="contacts__map" src="https://yandex.ru/map-widget/v1/-/CCUViVvT0C"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                </div>
            </div>
        </section>

        <section class="contacts__block-form mb-140">
            <div class="container block">
                <div class="mb-63">
                    <h3 class="title-h3 mb-28">Остались вопросы?</h3>
                    <p class="contacts__text">Заполните форму и наши специалисты свяжутся с вами для для ответа на вопросы</p>
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

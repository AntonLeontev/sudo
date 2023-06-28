@extends('layouts.app')

@section('title', __('policy.title'))

@section('content')
	<main class="container mb-350 pt-50">
        <h2 class="title-h2 mb-25 mt-dest-110">Инструменты и расчетные программы</h2>
        <p class="calulations__text mb-37 text-justify ">
            Одним из направлений деятельности компании «СУДО» является создание научного ПО различной направленности. Мы разработали для Вас несколько удобных и эффективных инструментов доступных на нашем сайте, и мы будем рады, если наши продукты помогут Вам расширить горизонты познания и совершить научные открытия. Будем признательны за обратную связь.
        </p>
        <div class="container-grid">
            <div class="block block-g">
                <div class="block-g__title">
                    <a  target="_blank" href="http://uncorr.com/"  class="title-h3 color--blue mb-13">Uncorr <span class="hidden">- Spatial analysis and correlation</span></a>
                    <p class="hidden-mob mt-15">  Spatial analysis and correlation</p>
                </div>
                <div class="flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest border-t h100 pt-25 mb-63">
                    <p class="text mw-350 mb-37 text-justify ">Универсальный программный пакет для корреляционного анализа пространственных данных с дополнительным набором инструментов для выполнения преобразования географических координат, интерполяции данных, картографирования, пространственной корреляции, визуализации данных и другими вспомогательными функциями.</p>
                        <a  target="_blank" href="http://uncorr.com/" class="btn">
                        <span>Перейти</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>
            <div class="block block-g">
                <div class="block-g__title">
                    <a  target="_blank" href="https://forctool.com/" class="title-h3 color--blue mb-13">FORCtool <span class="hidden"> - FORC processing and analysis</span></a>
                    <p class="hidden-mob mt-15">FORC processing and analysis</p>
                </div>
                <div class="flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest border-t h100 pt-25 mb-63">
                    <p class="text mw-350 mb-37  text-justify ">Сервис для обработки, препроцессинга и анализа частных петель гистерезиса первого порядка FORC, а также для построения диаграмм распределения FORC. Сервис использует алгоритмы, предложенные авторами VARIFORC и FORCsensei</p>
                    <a  target="_blank" href="https://forctool.com/" class="btn">
                        <span>Перейти</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>
            <div class="block block-g">
                <div class="block-g__title">
                    <a  target="_blank" href="https://hysteresis.online/" class="title-h3 color--blue mb-13">Hysteresis <span class="hidden">- plotting hysteresis loops, IRM and backfield curves</span></a>
                    <p class="hidden-mob mt-15">plotting hysteresis loops, IRM and backfield curves</p>
                </div>
                <div class="flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest border-t h100 pt-25 mb-63">
                    <p class="text mw-350 mb-37  text-justify ">Сервис для обработки и визуализации измерений петель гистерезиса, кривых обратного перемагничивания и кривых намагничивания IRM. Поддержка файлов Princeton MicroMag 2900/3900 и LakeShore 7400 Series.</p>
                    <a  target="_blank" href="https://hysteresis.online/" class="btn">
                        <span>Перейти</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>
            <div class="block block-g">
                <div class="block-g__title">
                    <h3 class="title-h3 color--blue">SEMalyzer <span class="hidden"> - processing and analyzing SEM images (by request)</span></h3>
                    <p class="hidden-mob mt-15">processing and analyzing SEM images (by request)</p>
                </div>
                <div class="flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest border-t h100 pt-25 mb-63">
                    <p class="text mw-350 mb-37  text-justify ">Сервис для обработки и анализа изображений со сканирующих электронных микроскопов (SEM). Высокая точность и скорость обработки с использованием технологий машинного обучения </p>
                    <button type="submit" class="btn btn-modal">
                        <span>Перейти</span>
                        <i class="icon-enter"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="mw-650 mt-85">
            Вопросы и пожелания относительно функционала и использования представленных инструментов можно направить по адресу <a href="mailto:l.surovitskii@sudo.team">l.surovitskii@sudo.team</a> 
        </div>
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
                <span class="form__checkbox-text text-justify ">
                    Нажимая кнопку Отправить, я даю согласие на обработку моих персональных данных и соглашаюсь с <a href="{{ route('policy') }}">Политикой конфиденциальности</a>
                </span>
            </label>
            <button type="submit" class="form__btn btn" data-bs-toggle="modal" data-bs-target="#thankYouModal">
                <span>Отправить</span>
                <i class="icon-enter"></i>
            </button>
        </form>
    </section>

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
    <script>
        document.querySelector('.btn-modal').addEventListener('click', function() {
            document.querySelector('.modal-feedback').classList.add('modal-feedback--active')
        })
        document.querySelector('.modal-feedback__close').addEventListener('click', function() {
            document.querySelector('.modal-feedback').classList.remove  ('modal-feedback--active')
        })

    </script>
@endsection

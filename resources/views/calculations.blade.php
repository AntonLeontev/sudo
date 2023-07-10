@extends('layouts.app')

@section('title', __('calculations.title'))

@section('content')
    <main class="mb-350 pt-50 container">
        <h2 class="title-h2 mb-25 mt-dest-110">{{ __('calculations.h1') }}</h2>
        <p class="calulations__text mb-37 text-justify">
            {{ __('calculations.text') }}
        </p>
        <div class="container-grid">
            @php
                $title = 'title_' . app()->getLocale();
            @endphp

			<div id="accordionFlushExample" class="accordion accordion-flush">
				@foreach (instruments() as $category)
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed calculations__category-title" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapse{{ $loop->index }}" aria-expanded="false" aria-controls="flush-collapseOne">
								{{ $category->{$title} }}
							</button>
						</h2>
						<div id="flush-collapse{{ $loop->index }}" class="accordion-collapse collapse">
							<div class="accordion-body">
								@foreach ($category->enabledInstruments as $tool)
									<x-tool :$tool />
								@endforeach
							</div>
						</div>
					</div>
				@endforeach
				
            </div>



        </div>
        @if (!empty(contacts()->tools_email))
            <div class="mw-650 mt-85">
                {{ __('calculations.email.text') }} <a
                    href="mailto:{{ contacts()->tools_email }}">{{ contacts()->tools_email }}</a>
            </div>
        @endif
    </main>

    {{-- <section class="modal-feedback">
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
    </section> --}}
@endsection

@section('body_scripts')
    <script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
    {{-- <script>
        document.querySelector('.btn-modal').addEventListener('click', function() {
            document.querySelector('.modal-feedback').classList.add('modal-feedback--active')
        })
        document.querySelector('.modal-feedback__close').addEventListener('click', function() {
            document.querySelector('.modal-feedback').classList.remove  ('modal-feedback--active')
        })

    </script> --}}
@endsection

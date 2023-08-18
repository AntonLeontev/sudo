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

    <section class="modal-feedback">
        <button class="modal-feedback__close">
            <i class="icon-close"></i>
        </button>
        <h3 class="modal-feedback__title">{{ __('request-form.title') }}</h3>
        <p class="modal-feedback__text">{{ __('request-form.subtitle') }}</p>
        <form class="form">
			@csrf
			<input type="hidden" name="to" value="{{ contacts()->email }}">
			<input type="hidden" name="subject" value="Заявка с сайта">
            <input class="form__input" name="name" type="text" placeholder="{{ __('request-form.person') }}">
            <input class="form__input" name="phone" type="tel" placeholder="{{ __('request-form.phone') }}">
            <input class="form__input" name="email" type="email" placeholder="Email" required>
            <textarea class="form__textarea" name="description" placeholder="{{ __('request-form.description') }}"></textarea>
            <label class="form__checkbox">
                <input class="form__input--none" type="checkbox" required>
                <span class="form__checkbox-elem"></span>
                <span class="form__checkbox-text text-justify ">
                    {{ __('request-form.check') }} <a href="{{ route('policy') }}">{{ __('request-form.policy') }}</a>
                </span>
            </label>
            <button type="submit" class="form__btn btn">
                <span>{{ __('request-form.btn') }}</span>
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
                            {{ __('request-form.tnx') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('body_scripts')
    <script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
    <script>
		const indexBlockBbtn = document.querySelectorAll('.btn-modal')
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

    </script>
@endsection

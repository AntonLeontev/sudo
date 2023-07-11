@extends('layouts.app')

@section('title', __('career.title'))

@section('content')
	<main class="career m-auto pt-50">

        <section class="container mb-dest-140 ">
            <div class="block-3-7 career__block">
                <div class="title-default-p">
                    <h2 class="title-h2 mb-28">{{ __('career.h1') }}</h2>
                    <p class="career__text text-justify ">{{ __('career.description') }}</p>
                </div>
            </div>
        </section>

		@if (vacancies()->isNotEmpty())
			<section class="container">
				@foreach (vacancies() as $vacancy)
					<x-vacancy :$vacancy />
				@endforeach
			</section>
		@endif

        <section class="contacts__block-form mb-140">
            <div class="container block">
                <div class="mb-63">
                    <h3 class="title-h3 mb-28">{{ __('career.form.title') }}</h3>
                    <p class="contacts__text text-justify ">{{ __('career.form.subtitle') }}</p>
					@if (vacancies()->isEmpty())
						<p class="contacts__text-1 text-justify ">
							{{ __('career.form.no-vacancies') }}
						</p>
					@endif
                </div>
                <div>
                    <form class="form">
						@csrf
						<input type="hidden" name="to" value="{{ contacts()->resume_email }}">
						<input type="hidden" name="subject" value="Резюме">
                        <input class="form__input" name="name" type="text" placeholder="{{ __('career.form.contact') }}" required>
                        <input class="form__input" name="phone" type="tel" placeholder="{{ __('career.form.phone') }}" required>
                        <input class="form__input" name="email" type="email" placeholder="Email" required>
                        <textarea class="form__textarea" name="description" placeholder="{{ __('career.form.text') }}" required></textarea>
                        <label class="form__checkbox">
                            <input class="form__input--none" type="checkbox">
                            <span class="form__checkbox-elem"></span>
                            <span class="form__checkbox-text text-justify ">
                                {{ __('career.form.check.text') }} <a href="{{ route('policy') }}">{{ __('career.form.check.link') }}</a>
                            </span>
                        </label>
                        <button type="submit" class="form__btn btn">
                            <span>{{ __('career.form.button') }}</span>
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
                            {{ __('career.form.thanks') }}
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

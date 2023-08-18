@extends('layouts.app')

@section('title', __('contacts.title'))

@section('content')
	<main class="pt-50">

        <section class="container mb-140 ">
            <h2 class="title-h2 mb-25 mt-dest-110">{{ __('contacts.h1') }}</h2>
            <div class="block">
                <div>
                    <ul class="contacts__adress">
						@unless (empty(contacts()->email))
                        	<li><a href="mailto:info@sudo.team">{{ contacts()->email }}</a></li>
						@endunless

						@php
							$address = 'address_' . app()->getLocale();
						@endphp

						@unless (empty(contacts()->{$address}))
							<li>{{ contacts()->{$address} }}</li>
						@endunless

						@unless (empty(contacts()->inn))
                        	<li>{{ __('contacts.inn') }}: {{ contacts()->inn }}</li>
						@endunless

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
                    <h3 class="title-h3 mb-28">{{ __('contacts.form.questions') }}</h3>
                    <p class="contacts__text">{{ __('contacts.form.subtitle') }}</p>
                </div>
                <div>
                    <form class="form">
                        @csrf
						<input type="hidden" name="to" value="{{ contacts()->feedback_email }}">
						<input type="hidden" name="subject" value="Сотрудничество">
						<input class="form__input" name="name" type="text" placeholder="{{ __('contacts.form.contact') }}">
						<input class="form__input" name="phone" type="tel" placeholder="{{ __('contacts.form.phone') }}" required>
						<input class="form__input" name="email" type="email" placeholder="{{ __('contacts.form.email') }}" required>
						<textarea class="form__textarea" name="description" placeholder="{{ __('contacts.form.description') }}"></textarea>
						<label class="form__checkbox">
							<input class="form__input--none" type="checkbox" checked>
							<span class="form__checkbox-elem"></span>
							<span class="form__checkbox-text text-justify">
								{{ __('contacts.form.check.text') }} <a
									href="{{ route('policy') }}">{{ __('contacts.form.check.link') }}</a>
							</span>
						</label>
						<button type="submit" class="form__btn btn">
							<span>{{ __('contacts.form.button') }}</span>
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
                            {{ __('contacts.thanks') }}
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

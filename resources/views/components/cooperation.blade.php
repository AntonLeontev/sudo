<div class="container block">
	<div class="mb-63">
		<h3 class="title-h3 mb-28">{{ __('cooperation.title') }}</h3>
		<p class="contacts__text">{{ __('cooperation.subtitle') }}</p>
	</div>
	<div>
		<form class="form">
			@csrf
			<input type="hidden" name="to" value="{{ contacts()->feedback_email }}">
			<input type="hidden" name="subject" value="Сотрудничество">
			<input class="form__input" name="name" type="text" placeholder="{{ __('cooperation.form.contact') }}">
			<input class="form__input" name="phone" type="tel" placeholder="{{ __('cooperation.form.phone') }}">
			<input class="form__input" name="email" type="email" placeholder="{{ __('cooperation.form.email') }}">
			<textarea class="form__textarea" name="description" placeholder="{{ __('cooperation.form.description') }}"></textarea>
			<label class="form__checkbox">
				<input class="form__input--none" type="checkbox" checked>
				<span class="form__checkbox-elem"></span>
				<span class="form__checkbox-text text-justify">
					{{ __('cooperation.form.check.text') }} <a
						href="{{ route('policy') }}">{{ __('cooperation.form.check.link') }}</a>
				</span>
			</label>
			<button type="submit" class="form__btn btn" data-bs-toggle="modal" data-bs-target="#thankYouModal">
				<span>{{ __('cooperation.form.button') }}</span>
				<i class="icon-enter"></i>
			</button>
		</form>
	</div>
</div>

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
                            {{ __('cooperation.thanks') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

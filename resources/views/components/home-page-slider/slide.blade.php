@props([
	'slide',
	'position',
	'total',
])

@php
	$text = 'text_' . app()->getLocale();
	$button = 'button_text_' . app()->getLocale();
@endphp

<div class="swiper-slide">
    <div class="index-block" style="background-image: url('/storage/{{ $slide->image }}')">
        <div class="index-block__wrap">
            <span class="elem-a2 wow fadeInUp swiper-slide__number" data-wow-duration=".2s" style="color: {{ $slide->text_color }}">
				{{ str($position)->padLeft(2, '0')  }} - {{ str($total)->padLeft(2, '0') }}
			</span>
            <div class="wow fadeInUp swiper-slide__text" data-wow-duration=".5s" style="color: {{ $slide->text_color }}">
				{!! $slide->{$text} !!}
			</div>

			@if ($slide->has_request_button)
				<div class="index-block__btn-box elem-a3 wow zoomIn">
					<button class="index-block__btn request-button">{{ __('home.slide-button') }}</button>
				</div>
			@else
				<div class="index-block__btn-box elem-a3 wow zoomIn">
					<a href="{{ $slide->button_link }}" class="index-block__btn home-page-slide__link" target="_blank">{{ $slide->{$button} }}</a>
				</div>
			@endif
        </div>
    </div>
</div>

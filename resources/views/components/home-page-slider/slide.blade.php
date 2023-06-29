@props([
	'slide',
	'position',
	'total',
])

@php
	$text = 'text_' . app()->getLocale();
@endphp

<div class="swiper-slide">
    <div class="index-block" style="background-image: url('/storage/{{ $slide->image }}')">
        <div class="index-block__wrap">
            <span class="elem-a2 wow fadeInUp" data-wow-duration=".2s" style="color: {{ $slide->text_color }}">
				{{ str($position)->padLeft(2, '0')  }} - {{ str($total)->padLeft(2, '0') }}
			</span>
            <p class="wow fadeInUp" data-wow-duration=".5s" style="color: {{ $slide->text_color }}">
				{{ $slide->{$text} }}
			</p>
            <div class="index-block__btn-box elem-a3 wow zoomIn">
                <button class="index-block__btn">Оставить заявку</button>
            </div>
        </div>
    </div>
</div>

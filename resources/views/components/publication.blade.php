@props(['publication'])

@php
	$title = 'title_' . app()->getLocale();
	$author = 'author_' . app()->getLocale();
	$description = 'description_' . app()->getLocale();
@endphp

<div class="publications__block">
    <div class="publications__block-1">
		@if (empty($publication->title_link) && empty($publication->button_link))
			<div class="publications__link">
				{{ $publication->{$title} }}
			</div>
		@else
			<a target="_blank" href="{{ $publication->title_link ?? $publication->button_link }}" class="publications__link">
				{{ $publication->{$title} }}
			</a>
		@endif
    </div>
    <div class="publications__block-2">
        <div>
            <div class="publications__data">{{ $publication->date->format('j.m.Y') }}</div>
            <div class="publications__name">{{ $publication->{$author} }}</div>
            <p class="publications__list">
				{!! $publication->{$description} !!}
			</p>
        </div>
		@if (! empty($publication->button_link))
			<a target="_blank" href="{{ $publication->button_link }}" class="btn">
				<span>{{ __('publications.publication.button') }}</span>
				<i class="icon-enter"></i>
			</a>
		@endif
    </div>
</div>

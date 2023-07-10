@props(['tool'])

@php
    $title = 'title_' . app()->getLocale();
    $subtitle = 'subtitle_' . app()->getLocale();
    $description = 'description_' . app()->getLocale();
@endphp

<div class="calculation">
    <div class="calculation__title">
		@if (empty($tool->link))
			<div class="title-h3 color--blue">{{ $tool->{$title} }}
				<span class="hidden">- {{ $tool->{$subtitle} }}</span>
			</div>
		@else
			<div class="title-h3 color--blue">
				<a target="_blank" href="{{ $tool->link }}" class="color--blue">{{ $tool->{$title} }}
					<span class="hidden">- {{ $tool->{$subtitle} }}</span>
				</a>
			</div>
		@endif
        <p class="hidden-mob mt-15"> {{ $tool->{$subtitle} }}</p>
    </div>
    <div
        class="calculation__text flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest h100 pt-25 mb-63 border-t">
        <div class="text mb-37 text-justify">
			{!! $tool->{$description} !!}
		</div>

		@unless (empty($tool->link))
			<a target="_blank" href="{{ $tool->link }}" class="btn" rel="nofollow">
				<span>{{ __('calculations.tool.button') }}</span>
				<i class="icon-enter"></i>
			</a>
		@endunless
    </div>
</div>

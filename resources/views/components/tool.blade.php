@props(['tool'])

@php
    $title = 'title_' . app()->getLocale();
    $subtitle = 'subtitle_' . app()->getLocale();
    $description = 'description_' . app()->getLocale();
@endphp

<div class="block-g block">
    <div class="block-g__title">
		@if (empty($tool->link))
			<span target="_blank" href="{{ $tool->link }}" class="title-h3 color--blue mb-13">{{ $tool->{$title} }}
				<span class="hidden">- {{ $tool->{$subtitle} }}</span>
			</span>
		@else
			<a target="_blank" href="{{ $tool->link }}" class="title-h3 color--blue mb-13">{{ $tool->{$title} }}
				<span class="hidden">- {{ $tool->{$subtitle} }}</span>
			</a>
		@endif
        <p class="hidden-mob mt-15"> {{ $tool->{$subtitle} }}</p>
    </div>
    <div
        class="flex-direction-column-table flex-dest align-items-start-dest justify-content-space-between-dest h100 pt-25 mb-63 border-t">
        <p class="text mw-350 mb-37 text-justify">
			{{ $tool->{$description} }}
		</p>

		@unless (empty($tool->link))
			<a target="_blank" href="{{ $tool->link }}" class="btn">
				<span>{{ __('calculations.tool.button') }}</span>
				<i class="icon-enter"></i>
			</a>
		@endunless
    </div>
</div>

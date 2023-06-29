@props(['vacancy'])

@php
    $title = 'title_' . app()->getLocale();
    $description = 'description_' . app()->getLocale();
    $salary = 'salary_' . app()->getLocale();
@endphp

<div class="block-3-7 jc-star mb-table-70 mb-28">
    <div class="">
        <h3 class="title-h3">{{ $vacancy->{$title} }}</h3>
    </div>
    <div>
        <p class="career__text mb-25">
			{!! $vacancy->{$description} !!}
		</p>
        <div class="career__box">
            <ul>
                <li class="title-h4 mb-13">{{ __('career.salary') }}</li>
                <li>{{ $vacancy->{$salary} }}</li>
            </ul>
        </div>
    </div>
</div>

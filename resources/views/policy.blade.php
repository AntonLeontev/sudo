@extends('layouts.app')

@section('title', __('policy.title'))

@section('content')
	<main class="pt-50">
		
		<section class="container mt-40 mb-140 ">
			<h1 class="mb-5">{{ __('policy.h1') }}</h1>
            <p>{{ __('policy.date') }}</p>
            <p>{{ __('policy.1') }}</p>
			<p>{{ __('policy.2') }}</p>
			<p><b>{{ __('policy.3') }}</b></p>
			<p>{{ __('policy.4') }}</p>
			<p><b>{{ __('policy.5') }}</b></p>
			<p>{{ __('policy.6') }}</p>
			<p>{{ __('policy.7') }}</p>
			<p><b>{{ __('policy.8') }}</b></p>
			<p>{{ __('policy.9') }}</p>
			<p><b>{{ __('policy.10') }}</b></p>
			<p>{{ __('policy.11') }}</p>
			<p>{{ __('policy.12') }}</p>
			<p>{{ __('policy.13') }}</p>
			<p>{{ __('policy.14') }}</p>
			<p><b>{{ __('policy.15') }}</b></p>
			<p>{{ __('policy.16') }}</p>
			<p>{{ __('policy.17') }}</p>
			<p><b>{{ __('policy.18') }}</b></p>
			<p>{{ __('policy.19') }}</p>
			<p>{{ __('policy.20') }}</p>
			<p>{{ __('policy.21') }}</p>
			<p>{{ __('policy.22') }}</p>
			<p><b>{{ __('policy.23') }}</b></p>
			<p>{{ __('policy.24') }}</p>
			<p>{{ __('policy.25') }}</p>
			<p>{{ __('policy.26') }}</p>
			<p>{{ __('policy.27') }}</p>
			<p><b>{{ __('policy.28') }}</b></p>
			<p>{{ __('policy.29') }}</p>
			<p>{{ __('policy.30') }}</p>
			<p><b>{{ __('policy.31') }}</b></p>
			<p>{{ __('policy.32') }}</p>
			<p>{{ __('policy.33') }}</p>
			<p>{{ __('policy.34') }}</p>
			<p>{{ __('policy.35') }}</p>
			<p>{{ __('policy.36') }}</p>
			<p>{{ __('policy.37') }}</p>
			<p>{{ __('policy.38') }}</p>
			<p><b>{{ __('policy.39') }}</b></p>
			<p>{{ __('policy.40') }}</p>
			<p><b>{{ __('policy.41') }}</b></p>
			<p>{{ __('policy.42') }}</p>
			<p>{{ __('policy.43') }}</p>
			<p><b>{{ __('policy.44') }}</b></p>
			<p>{{ __('policy.45') }}</p>
			<p>{{ __('policy.46') }}</p>
			<p><b>{{ __('policy.47') }}</b></p>
			<p>{{ __('policy.48') }}</p>
			<p>{{ __('policy.49') }}</p>
			<p>{{ __('policy.50') }}</p>
			<p>{{ __('policy.51') }}</p>
			<p>{{ __('policy.52') }}</p>
			<p>{{ __('policy.53') }}</p>
			<p>{{ __('policy.54') }}</p>
			<p>{{ __('policy.55') }}</p>
			<p>{{ __('policy.56') }}</p>
			<p>{{ __('policy.57') }}</p>
			<p>{{ __('policy.58') }}</p>
			<p>{{ __('policy.59') }}</p>
			<p>{{ __('policy.60') }}</p>
			<p><b>{{ __('policy.61') }}</b></p>
			<p>{{ __('policy.62') }}</p>
			<p><b>{{ __('policy.63') }}</b></p>
			<p>{{ __('policy.64') }}</p>
			<p>{{ __('policy.65') }}</p>
			<p><b>{{ __('policy.66') }}</b></p>
			@php
				$address = 'address_' . app()->getLocale();
			@endphp
			<p>{{ __('policy.67', ['address' => contacts()->{$address}, 'email' => contacts()->email]) }}</p>
        </section>
    </main>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

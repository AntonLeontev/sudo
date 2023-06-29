@extends('layouts.app')

@section('title', __('publications.title'))

@section('content')
	<main class="pt-50">
        <section class="publications m-auto">
            <div class="container">
                <div class="block-3-7 career__block ">
                    <div class="h-337 title-default-m">
                        <h2 class="title-h2 mb-28">{{  __('publications.h1') }}</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mb-140">

			@foreach (publications() as $publication)
				<x-publication :$publication />
			@endforeach
            
        </section>

    </main>
@endsection

@section('body_scripts')
	 <script src="libs/jquery-3.6.3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

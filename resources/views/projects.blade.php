@extends('layouts.app')

@section('title', __('projects.title'))

@section('content')
	<main class="projects pt-50">

        <section class="projects__block-1">
            <div class="container">
                <h2 class="projects__block-1--title mt-dest-110">{{ __('projects.h1') }}</h2>
                <p class="projects__block-1--text-1">{{ __('projects.subtitle') }}</p>
                <p class="projects__block-1--text-2">{{ __('projects.text') }}</p>
            </div>
        </section>

        <section class="projects__block-2">
            <div class="container">
                <ul class="projects__sort">
                    <li class="projects__sort-item"><button class="projects__sort-btn projects__sort-btn--active" id="btn-one" type="button">{{ __('projects.list.1') }}</button></li>
                    <li class="projects__sort-item"><button class="projects__sort-btn" type="button" id="btn-two">{{ __('projects.list.2') }}</button></li>
                    <li class="projects__sort-item"><button class="projects__sort-btn" type="button" id="btn-three">{{ __('projects.list.3') }}</button></li>
                </ul>
            </div>
            <div class="projects__container container">
                <div class="projects-card block-1 projects-card--eng">
                    <h3 class="projects-card__title">{{ __('projects.projects.1.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.1.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-2 projects-card--sci">
                    <h3 class="projects-card__title">{{ __('projects.projects.2.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.2.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-3 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">{{ __('projects.projects.3.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.3.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-4 projects-card--sci">
                    <h3 class="projects-card__title">{{ __('projects.projects.4.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.4.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-5 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">{{ __('projects.projects.5.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.5.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-6 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">{{ __('projects.projects.6.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.6.text') }}</p>
                    </div>
                </div>
                <div class="projects-card block-7 projects-card--eng">
                    <h3 class="projects-card__title">{{ __('projects.projects.7.title') }}</h3>
                    <div class="projects-card__info">
                        <p>{{ __('projects.projects.7.text') }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects__block-3">
            <div class="projects__block-3--block container">
                <div class="projects__block-3--block-1">
                    <h3>{{ __('projects.steps.title') }}</h3>
                </div>
                <div class="projects__block-3--block-2">
                    {{-- <p class="projects__block-3--text text-justify ">
                        {{ __('projects.steps.text') }}
                    </p> --}}
                    <ul class="projects__block-3--list">
                        <li class="projects__block-3--item">
                            <div>01/08</div>
                            <p>{{ __('projects.steps.1') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>02/08</div>
                            <p>{{ __('projects.steps.2') }}
                            </p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>03/08</div>
                            <p>{{ __('projects.steps.3') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>04/08</div>
                            <p>{{ __('projects.steps.4') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>05/08</div>
                            <p>{{ __('projects.steps.5') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>06/08</div>
                            <p>{{ __('projects.steps.6') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>07/08</div>
                            <p>{{ __('projects.steps.7') }}</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>08/08</div>
                            <p>{{ __('projects.steps.8') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="projects__block-4">
			<x-cooperation />
		</section>
    </main>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script>


    const ProjectsSortBtn = document.querySelectorAll('.projects__sort-btn')
    const projectsCard = document.querySelectorAll('.projects-card')
    const projectsCardEng = document.querySelectorAll('.projects-card--eng')
    const projectsCardSci = document.querySelectorAll('.projects-card--sci')
    const projectsContainer = document.querySelector('.projects__container')
    const btnOne = document.querySelector('#btn-one')
    const btnTwo = document.querySelector('#btn-two')
    const btnThree = document.querySelector('#btn-three')

  

    btnOne.addEventListener('click', () => {
        ProjectsSortBtn.forEach(el => el.classList.remove('projects__sort-btn--active'))
        btnOne.classList.add('projects__sort-btn--active')
        projectsCard.forEach(el => el.style.display="block")
        projectsContainer.classList.add('projects__container')
        projectsContainer.classList.remove('projects__container--test')
    })

    btnTwo.addEventListener('click', () => {
        ProjectsSortBtn.forEach(el => el.classList.remove('projects__sort-btn--active'))
        btnTwo.classList.add('projects__sort-btn--active')
        projectsCard.forEach(el => el.style.display="none")
        projectsCardEng.forEach(el => el.style.display="block")
        projectsContainer.classList.remove('projects__container')
        projectsContainer.classList.add('projects__container--test')
        
    })  

    btnThree.addEventListener('click', () => {
        ProjectsSortBtn.forEach(el => el.classList.remove('projects__sort-btn--active'))
        btnThree.classList.add('projects__sort-btn--active')
        projectsCard.forEach(el => el.style.display="none")
        projectsCardSci.forEach(el => el.style.display="block")
        projectsContainer.classList.remove('projects__container')
        projectsContainer.classList.add('projects__container--test')
    })
    </script>
@endsection

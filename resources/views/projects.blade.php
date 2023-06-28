@extends('layouts.app')

@section('title', __('projects.title'))

@section('content')
	<main class="projects pt-50">

        <section class="projects__block-1">
            <div class="container">
                <h2 class="projects__block-1--title mt-dest-110">Реализованные проекты</h2>
                <p class="projects__block-1--text-1">Среди наших проектов – большое количество разработок сложных вычислительных программных решений в различных областях деятельности.</p>
                <p class="projects__block-1--text-2">*Как правило, проекты были подкреплены NDA, поэтому мы можем предоставить только общее описание реализованных проектов.</p>
            </div>
        </section>

        <section class="projects__block-2">
            <div class="container">
                <ul class="projects__sort">
                    <li class="projects__sort-item"><button class="projects__sort-btn projects__sort-btn--active" id="btn-one" type="button">Все</button></li>
                    <li class="projects__sort-item"><button class="projects__sort-btn" type="button" id="btn-two">Инженерные</button></li>
                    <li class="projects__sort-item"><button class="projects__sort-btn" type="button" id="btn-three">Научные</button></li>
                </ul>
            </div>
            <div class="projects__container container">
                <div class="projects-card block-1 projects-card--eng">
                    <h3 class="projects-card__title">Системы автоматического построения маршрутов и трасс</h3>
                    <div class="projects-card__info">
                        <p>Создание любого продукта начинается с идеи. Наша опытная команда поможет Вам на каждом этапе создания продукта. Основываясь на Ваших пожеланиях, мы поможем сформулировать идею, предложим интересные решения, вместе сформируем техническое задание и предоставим Вам готовый проект</p>
                    </div>
                </div>
                <div class="projects-card block-2 projects-card--sci">
                    <h3 class="projects-card__title">Системы математических и физических расчётов, как на CPU, так и на GPU</h3>
                    <div class="projects-card__info">
                        <p>Разработка программных решений для нужд учёных. Онлайн сервисы анализа и обработки данных магнитных свойств ферримагнитных материалов. Онлайн и оффлайн сервисы расчёта сложных математических алгоритмов. Поддержка различных форматов данных, расширенный набор пред-процессинговых и аналитических функций, высокая скорость обработки данных.</p>
                    </div>
                </div>
                <div class="projects-card block-3 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">Системы автоматизации измерительного оборудования</h3>
                    <div class="projects-card__info">
                        <p>Разработка ПО для управления и контроля высокоточным измерительным оборудованием. Разработка интерфейсов коммуникации, создание протоколов передачи данных и обработки сигналов с высокими требованиями к надёжности и стабильности системы.</p>
                    </div>
                </div>
                <div class="projects-card block-4 projects-card--sci">
                    <h3 class="projects-card__title">Системы обработки изображений с использованием технологий компьютерного зрения и машинного обучения</h3>
                    <div class="projects-card__info">
                        <p>Разработка систем обработки и анализа изображений со сканирующих электронных микроскопов (SEM). Высокая точность и скорость обработки с использованием технологий компьютерного зрения и машинного обучения. Широкий набор функций предварительной обработки данных, система верификации данных, инструменты для анализа результатов, формирование детальных отчётов.</p>
                    </div>
                </div>
                <div class="projects-card block-5 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">Разработка алгоритмов для высокопроизводительных вычислительных систем</h3>
                    <div class="projects-card__info">
                        <p>Создание серверных и кластерных решений для распределённых вычислений. Решение задач, требующих расчёта большого количества данных в короткий промежуток времени</p>
                    </div>
                </div>
                <div class="projects-card block-6 projects-card--eng projects-card--sci">
                    <h3 class="projects-card__title">Перенос вычислений на GPU</h3>
                    <div class="projects-card__info">
                        <p>Разработка и оптимизация алгоритмов для решения задач любой степени сложности. Ускорение процессов вычислений путём переноса расчётов на GPU до 400 раз.</p>
                    </div>
                </div>
                <div class="projects-card block-7 projects-card--eng">
                    <h3 class="projects-card__title">Разработка сайтов и приложений разного уровня сложности</h3>
                    <div class="projects-card__info">
                        <p>Создание и размещение сайтов и приложений для основных мобильных платформ различной степени сложности с использованием передовых решений, от интернет магазинов до 3D игр.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects__block-3">
            <div class="projects__block-3--block container">
                <div class="projects__block-3--block-1">
                    <h3>Этапы внедрения программного продукта</h3>
                </div>
                <div class="projects__block-3--block-2">
                    <p class="projects__block-3--text text-justify ">
                        Передача заказчику готового продукта происходит в удобном для вас формате. Мы можем передать вам сервис, уже готовый к использованию (при этом сервис размещается на нашем сервере), и оказывать техническую поддержку, либо отправить вам код в виде установочного файла - вам нужно будет только установить программу и запустить её на своём устройстве. Мы приобрели лицензию Microsoft, поэтому наши разработки безупречно устанавливаются на Windows и не воспринимаются как вредоносное ПО.
                    </p>
                    <ul class="projects__block-3--list">
                        <li class="projects__block-3--item">
                            <div>01/08</div>
                            <p>Поступает предложение о работе</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>02/08</div>
                            <p>Составляется обобщённое описание проекта, на основе которого мы рассчитываем трудозатраты, необходимые для реализации проекта
                            </p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>03/08</div>
                            <p>Создаётся предварительное ТЗ и рассчитывается и согласовывается ориентировочная стоимость.</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>04/08</div>
                            <p>Работа, как правило, состоит из нескольких этапов.</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>05/08</div>
                            <p>По окончании этапа разработки мы переходим к тестированию.</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>06/08</div>
                            <p>По запросу заказчика пишется пишется техническое описание, техническая документация</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>07/08</div>
                            <p>Сдача проекта</p>
                        </li>
                        <li class="projects__block-3--item">
                            <div>08/08</div>
                            <p>При необходимости заключается договор на техническое обслуживание</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="projects__block-4">
            <div class="container block">
                <div class="mb-63">
                    <h3 class="title-h3 mb-28">Хотите предложить сотрудничество или заказать услугу?</h3>
                    <p class="contacts__text">Заполните форму и наши специалисты свяжутся с вами для обсуждения деталей</p>
                </div>
                <div>
                    <form class="form">
                        <input class="form__input" name="Контактное лицо" type="text" placeholder="Контактное лицо">
                        <input class="form__input" name="Телефон" type="tel" placeholder="Телефон">
                        <input class="form__input" name="Email" type="email" placeholder="Email">
                        <textarea class="form__textarea" name="Описание проекта" placeholder="Описание проекта"></textarea>
                        <label class="form__checkbox">
                            <input class="form__input--none" type="checkbox">
                            <span class="form__checkbox-elem"></span>
                            <span class="form__checkbox-text text-justify ">
                                Нажимая кнопку Отправить, я даю согласие на обработку моих персональных данных и соглашаюсь с <a href="{{ route('policy') }}">Политикой конфиденциальности</a>
                            </span>
                        </label>
                        <button type="submit" class="form__btn btn " data-bs-toggle="modal" data-bs-target="#thankYouModal">
                            <span>Отправить</span>
                            <i class="icon-enter"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>
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
                            Спасибо, Ваша заявка принята!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

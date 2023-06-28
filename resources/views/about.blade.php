@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
	<main class="pt-50">

        <section class="about m-auto">
            <div class="container">
                <div class="block-3-7 career__block">
                    <div class="about__block-23 title-default-p">
                        <h2 class="title-h2 mb-28">О нас</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="about__work-compain bg--grey">
            <div class="container block-3-7">
                <div>
                    <h3 class="title-h3 mb-13">Работа компании</h3>
                </div>
                <div class=" mb-63">
                    <p class="about__work-compain--text mb-37 text-justify ">
                        ООО «Судо» – коммерческая IT-компания, основным видом деятельности которой является разработка высокопроизводительного программного обеспечения. Мы специализируемся на решении высокотехнологичных задач, а также на ускорении сложных математических алгоритмов путём оптимизации программных решений и переноса вычислений на более эффективные аппаратные ускорители.
                        <br>
                        Компания занимается разработкой с 2018 года. Мы сотрудничали с различными производственными и научно-производственными компаниями, реализовали несколько крупных проектов в различных областях деятельности, а также занимались разработкой менее глобальных проектов и программных продуктов. О реализованных проектах вы можете узнать на странице <a href="{{ route('projects') }}">Проекты</a>. Команда проекта состоит из высококвалифицированных разработчиков, имеющих большой перечень научных и прикладных достижений. Среди наших сотрудников кандидаты наук и магистры ИТМО, сотрудники СПбГУ, и PhD получившие образование за рубежом. Основной состав команды сохраняется с момента запуска компании. 
                        Наши ключевые особенности:
                        <ul class="re-list">
                            <li class="about__work-compain--text text-justify ">Мы осознанно подходим к выбору стека технологий и построению архитектуры, что позволяет нам использовать передовой опыт и оптимизировать будущие расходы на поддержку и развитие наших продуктов. Наши приоритеты в работе: чистый код и качественный продукт.</li>
                            <li class="about__work-compain--text text-justify ">При создании новых продуктов мы стараемся делать их максимально простыми и удобными как для пользователей, так и для разработчиков. Мы верим, что самые простые решения являются самыми надёжными и эффективными. </li>
                            <li class="about__work-compain--text text-justify "> Перед началом разработки мы тщательно изучаем предметную область. Это даёт нам глубокое понимание нашей задачи и позволяет выполнять работу безукоризненно. </li>
                        </ul>
                    </p>
                    
                </div>
            </div>
        </section>

        <section class="about__experts">
            <div class="container block-3-7">
                <div>
                    <h3 class="title-h3 mb-13">Наши специалисты</h3>
                </div>
                <div class="about__experts--block">
                    <p class="about__experts--text text-justify ">
                        Команда компании Судо состоит их высококвалифицированных специалистов в области разработки, проектирования и анализа, многие из которых являются научными сотрудниками в ТОПовых ВУЗах страны и имеют учёные степени как в России, так и за рубежом. Мы регулярно участвуем в научных и инженерных исследованиях и в научных мероприятиях, что позволяет поддерживать высокий уровень профессионализма в выполнении работ
                    </p>
                    <ul class="about__experts--list">
                        <li class="about__experts--item">Около 25 сотрудников трудится в нашей компании</li>
                        <li class="about__experts--item">Среди наших специалистов кандидаты наук и выпускники лучших IT-ВУЗов России</li>
                        <li class="about__experts--item">Сплочённый, дружный коллектив и рабочее пространство ALL INCLUSIVE</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="card-box index-mission mt-40 ps-40">
            <div class="container index-mission__block ret-1">
                <div class="index-mission__flex">
                    <div class="index-mission__text-animate">
                        <img class="index-mission__text-animate--1 anime-9" src="{{ Vite::asset('/resources/images/svg/text.svg') }}" alt="">
                        <a class="index-mission__text-animate--2" href="career.html">
                            <img src="{{ Vite::asset('/resources/images/png/play.png') }}" alt="">
                        </a>
                    </div>
                    <p class="index-mission__text index-mission__text-2 wow fadeInUp mt-40 text-justify ">
                        Наша команда – наша ценность, поэтому мы делаем лучшие условия для работы каждого сотрудника.
                        Присоединяйтесь к нашей команде, чтобы заниматься решением сложных, но интересных задач и
                        развиваться вместе.
                    </p>
                </div>
                <!-- <div >
                    <div class="d-none-f d-none-996">
                        <img src="images/jpg/bg_main-6.jpg" alt="">
                    </div>
                </div> -->


            </div>
        </section>
    </main>
@endsection

@section('body_scripts')
	<script src="libs/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

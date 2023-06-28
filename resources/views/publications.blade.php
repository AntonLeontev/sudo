@extends('layouts.app')

@section('title', __('publications.title'))

@section('content')
	<main class="pt-50">
        <section class="publications m-auto">
            <div class="container">
                <div class="block-3-7 career__block ">
                    <div class="h-337 title-default-m">
                        <h2 class="title-h2 mb-28">Публикации</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mb-140">

            <div class="publications__block">
                <div class="publications__block-1">
                    <a target="_blank" href="https://piterpy.com/schedule/video/?v=MTAwMTM3wooyMDAwMDU5McKKMA" class="publications__link">Введение в GPGPU для программистов на Python</a>
                </div>
                <div class="publications__block-2">
                    <div>
                        <div class="publications__data">28.10.2022</div>
                        <div class="publications__name">Михаил Лукин, Егор Макаренко</div>
                        <!-- <div class="publications__key">Ключевые слова:</div>
                        <p class="publications__list">декомпилятор, дизассемблер, OpenCL, AMD GCN, GPGPU, граф потока управления, обратная разработка</p> -->
                    </div>
                    <a target="_blank" href="https://piterpy.com/schedule/video/?v=MTAwMTM3wooyMDAwMDU5McKKMA" class="btn">
                        <span>Узнать больше</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>

            <div class="publications__block">
                <div class="publications__block-1">
                    <a target="_blank" href="https://www.youtube.com/watch?v=SZx930kAKCg&ab_channel=C%2B%2BUserGroup" class="publications__link">Доклад про декомпилятор GPGPU</a>
                </div>
                <div class="publications__block-2">
                    <div>
                        <div class="publications__data">29.07.2022</div>
                        <div class="publications__name">Кристина Михайленко, Михаил Лукин</div>
                    </div>
                    <a target="_blank" href="https://www.youtube.com/watch?v=SZx930kAKCg&ab_channel=C%2B%2BUserGroup" class="btn">
                        <span>Узнать больше</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>

            <div class="publications__block">
                <div class="publications__block-1">
                    <a target="_blank" href="https://link.springer.com/chapter/10.1007/978-3-030-91467-7_8" class="publications__link">A Versatile Software for Statistical Data Analysis and Spatial Correlation</a>
                </div>
                <div class="publications__block-2">
                    <div>
                        <div class="publications__data">26.01.2022</div>
                        <div class="publications__name">Dmitry Krivopaltsev, Leonid Surovitskii, Mikhail Lukin</div>
                        <div class="publications__key">Ключевые слова:</div>
                        <p class="publications__list">Correlation, Interpolation, Data analysis, Comparison, Software, UNCORR</p>
                    </div>
                    <a target="_blank" href="https://link.springer.com/chapter/10.1007/978-3-030-91467-7_8" class="btn">
                        <span>Узнать больше</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>

            <div class="publications__block">
                <div class="publications__block-1">
                    <a target="_blank" href="https://2021.cppconf.ru/talks/programming-graphics-cards-intruduction-into-essential-practices-of-gpgpu/" class="publications__link">Программируем видеокарты: введение в основные виды GPGPU-оптимизаций</a>
                </div>
                <div class="publications__block-2">
                    <div>
                        <div class="publications__data">24.05.2021</div>
                        <div class="publications__name">Лукин М. А., Михайленко К.И.</div>
                        <div class="publications__key"></div>
                        <a href="https://youtu.be/qs_VnaInh-s" class="publications__list blue">Видео Доклада</a>
                    </div>
                    <a target="_blank" href="http://i-us.ru/index.php/ius/article/view/14599" class="btn">
                        <span>Узнать больше</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>

            <div class="publications__block">
                <div class="publications__block-1">
                    <a target="_blank" href="http://i-us.ru/index.php/ius/article/view/14599" class="publications__link">A method for decompilation of AMD GCN kernels to OpenCL</a>
                </div>
                <div class="publications__block-2">
                    <div>
                        <div class="publications__data">26.04.2021</div>
                        <div class="publications__name">Михайленко К.И., Лукин М. А., Станкевич А. С.</div>
                        <div class="publications__key">Ключевые слова:</div>
                        <p class="publications__list">декомпилятор, дизассемблер, OpenCL, AMD GCN, GPGPU, граф потока управления, обратная разработка</p>
                    </div>
                    <a target="_blank" href="http://i-us.ru/index.php/ius/article/view/14599" class="btn">
                        <span>Узнать больше</span>
                        <i class="icon-enter"></i>
                    </a>
                </div>
            </div>

            
        </section>

    </main>
@endsection

@section('body_scripts')
	 <script src="libs/jquery-3.6.3.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
@endsection

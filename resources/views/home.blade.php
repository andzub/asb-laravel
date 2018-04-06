<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head')
    <title>@lang('home.title-head')</title>
</head>

<body>
    <header id="header">
        <div class="headerWrapper">
            <div class="headerContainer">
                <div class="headerTop">
                    <ul class="headerTop__list">
                        <li class="headerTop__list-item"><i class="fa fa-envelope"></i>asb.konstantin@gmail.com</li>
                        <li class="headerTop__list-item"><i class="fa fa-mobile fa-lg"></i>+38 098-751-13-01</li>
                        <li class="headerTop__list-item"><i class="fa fa-mobile fa-lg"></i>+38 098-751-13-01</li>
                        <li class="headerTop__list-item">
                            <a class="lang en" href="<?= route('setlocale', ['lang' => 'en']) ?>">EN</a>
                            <a class="lang ru lang-active" href="<?= route('setlocale', ['lang' => 'ru']) ?>">RU</a>
                        </li>
                    </ul>        
                </div>
                <div class="headerMiddle">
                    <div class="headerMiddle__logoName">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/') }}">
                            <img src="{{ asset('img/logooo.png') }}" alt="Logotype">
                        </a>
                    </div>
                    <nav class="headerMiddle__nav">
                        <ul class="headerMiddle__nav-list">
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/') }}">@lang('home.main')</a>
                            </li>
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/about') }}">@lang('home.about')</a>
                            </li>
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/services') }}">@lang('home.service')</a>
                            </li>
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/ourwork') }}">@lang('home.our work')</a>
                            </li>
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/partner') }}">@lang('home.partner')</a>
                            </li>
                            <li class="headerMiddle__list-item">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/contacts') }}">@lang('home.contacts')</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="headerBottom">
                    <h1 class="headerBottom__title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.8s">
                        @lang('home.architect')
                    </h1>
                    <p class="headerBottom__description wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1.8s">
                        @lang('home.exlusive')
                    </p>
                    {{-- <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/about') }}" class="headerBottom__link wow fadeInUp" data-wow-delay="1.3s">о нас</a> --}}
                    <i class="fa fa-angle-double-down fa-2x wow fadeInDown" aria-hidden="true" data-wow-delay="2.5s" data-wow-iteration="100" data-wow-duration="2s"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- main content -->
    <main id="content">
        <div class="contentContainer">
            <!-- our activity -->
            <div class="ourActivity">
                <h2 class="content__title">@lang('home.what we do')</h2>
                <hr class="content__line">
                <p class="content__description ourActivity__description">@lang('home.main directions')</p>
                <div class="ourActivity__box">
                    <section class="ourActivity__item project wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/3d-house-design.jpg') }}" alt="Чертеж">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#pro">@lang('home.architect and bulding')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                    {{-- <section class="ourActivity__item technic wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/to.jpg') }}" alt="Техобслуживание">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#tec">Техническое обследование зданий и сооружений<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section> --}}
                    <section class="ourActivity__item stall wow zoomIn" data-wow-offset="150" data-wow-delay=".5s" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/stoilo.jpg') }}" alt="Стойло">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#sta">@lang('home.develop and create')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                    <section class="ourActivity__item metal wow zoomIn" data-wow-offset="150" data-wow-delay=".8s" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/metall.jpg') }}" alt="Металлоконструкция">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#met">@lang('home.designing manufacturing')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                    {{-- <section class="ourActivity__item job wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/bulldozer.jpg" alt="Общестроительные работы">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#jo">Общестроительные работы<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section> --}}
                    {{-- <section class="ourActivity__item fences wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/ograzhdeniya.jpg" alt="Перила">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#fen">Изготовление перил, ограждений, пандусов, колесоотбойников<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section> --}}
                    <section class="ourActivity__item facade wow zoomIn" data-wow-offset="150" data-wow-delay=".5s" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/fasad_doma.jpg') }}" alt="Фасад">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#fac">@lang('home.warming and decorative')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                    <section class="ourActivity__item architecture wow zoomIn" data-wow-offset="150" data-wow-delay=".8s" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/lepnina.jpg') }}" alt="Лепнина">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#arc">@lang('home.manufacturing and installation')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                    <section class="ourActivity__item interior3d wow zoomIn" data-wow-offset="150" data-wow-delay="1.1s" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="{{ asset('img/construct3d.jpg') }}" alt="3D отделка">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title">
                                <a href="service.html#int">@lang('home.3d interior')<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                    </section>
                </div>
            </div>

            <!-- why choose us -->
            <!--<div class="whyChooseUs">
                <div class="whyChooseUs__box">
                    <h5 class="whyChooseUs__title">Почему выбирают нас ?</h5>
                    <h4 class="whyChooseUs__description team wow fadeInLeft" data-wow-offset="150" data-wow-duration="3s">Мы - сильная команда,</h4>
                    <h4 class="whyChooseUs__description skills wow fadeInRight" data-wow-offset="150" data-wow-duration="3s">за нами 14 лет опыта</h4>
                </div>
            </div>-->

            <!-- our work -->
            <div class="ourWork">
                <div class="title-wrap">
                    <h2 class="content__title ourWork__title">@lang('home.section our works')</h2>
                    <hr class="content__line">
                    <p class="content__description ourWork__description">@lang('home.more')</p>
                </div>
                <div class="ourWork__box">
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.2s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.4s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.6s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.8s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.2s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.4s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.6s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.8s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="{{ asset('img/house.jpg') }}" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                </div>
            </div>

            <!-- our partner -->
            <div class="ourPartner">
                <div class="title-wrap">
                    <h2 class="content__title ourPartner__title">@lang('home.our partner')</h2>
                    <hr class="content__line">
                    <p class="content__description">@lang('home.coopiration')</p>
                </div>
                <div class="ourPartner__box">
                    <ul class="ourPartner__content">
                        <li>ceresit</li>
                        <li>kema</li>
                        <li>optima</li>
                        <li>caparol</li>
                        <li>knauf</li>
                        <li>Isover</li>
                        <li>Rigips</li>
                        <li>Rock wool</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    @include('inc.footer')

    <div class="hidden"></div>
    <!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
    <!-- end mandatory -->

    @include('inc.script')

    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter -->
    <!-- /Google Analytics counter -->
</body>

</html>

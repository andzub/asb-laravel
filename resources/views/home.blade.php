<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<html lang="{{ app()->getLocale() }}">

<head>
    @include('inc.head');
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
                    </ul>
                </div>
                <div class="headerMiddle">
                    <div class="headerMiddle__logoName">
                        <img src="img/logooo.png" alt="Лого">
                        <!-- <h1 class="headerMiddle__name"><a href="index.html">асб</a></h1> -->
                    </div>
                    <nav class="headerMiddle__nav">
                        <ul class="headerMiddle__nav-list">
                            <li class="headerMiddle__list-item"><a href="index.html">Главная</a></li>
                            <li class="headerMiddle__list-item"><a href="about.html">О нас</a></li>
                            <li class="headerMiddle__list-item"><a href="service.html">Услуги</a></li>
                            <li class="headerMiddle__list-item"><a href="ourwork.html">Наши работы</a></li>
                            <li class="headerMiddle__list-item"><a href="partner.html">Партнерам</a></li>
                            <li class="headerMiddle__list-item"><a href="contucts.html">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="headerBottom">
                    <h1 class="headerBottom__title wow fadeInUp" data-wow-delay="0.4s"><span>А</span>рхитектурно <span>с</span>троительное <span>б</span>юро</h1>
                    <p class="headerBottom__description wow fadeInUp" data-wow-delay="0.8s">Эксклюзив &nbsp; Качество &nbsp; Гарантия</p>
                    <a href="about.html" class="headerBottom__link wow fadeInUp" data-wow-delay="1.3s">о нас</a>
                    <i class="fa fa-angle-double-down fa-2x wow fadeInUp" aria-hidden="true" data-wow-delay="1.7s" data-wow-iteration="10" data-wow-duration="2.5s"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- main content -->
    <main id="content">
        <div class="contentContainer">
            <!-- our activity -->
            <div class="ourActivity">
                <h2 class="content__title">Что мы делаем ?</h2>
                <hr class="content__line">
                <p class="content__description ourActivity__description">Основные направления деятельности компании</p>
                <div class="ourActivity__box">
                    <section class="ourActivity__item project wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/3d-house-design.jpg" alt="Чертеж">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#pro">Архитектурное и строительное проектирование<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item technic wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/to.jpg" alt="Техобслуживание">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#tec">Техническое обследование зданий и сооружений<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item stall wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/stoilo.jpg" alt="Стойло">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#sta">Изготовление стойлового оборудования<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item metal wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/metall.jpg" alt="Металлоконструкция">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#met">Проектирование, изготовление и монтаж металлоконструкций<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item job wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/bulldozer.jpg" alt="Общестроительные работы">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#jo">Общестроительные работы<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item fences wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/ograzhdeniya.jpg" alt="Перила">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#fen">Изготовление перил, ограждений, пандусов, колесоотбойников<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item facade wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/fasad_doma.jpg" alt="Фасад">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#fac">Утепление и декоративная отделка фасадов<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item architecture wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/lepnina.jpg" alt="Лепнина">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#arc">Изготовление и монтаж архитектурных элементов из пенополистирола<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                    <section class="ourActivity__item interior3d wow zoomIn" data-wow-offset="150" data-wow-duration="1.5s">
                        <div class="ourActivity__img-wrapper">
                            <img src="img/construct3d.jpg" alt="3D отделка">
                        </div>
                        <div class="ourActivity__item-wrapper">
                            <h3 class="ourActivity__item-title"><a href="service.html#int">3D отделка интеръеров<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h3>
                        </div>
                    </section>
                </div>
            </div>
            <!-- why choose us -->
            <div class="whyChooseUs">
                <div class="whyChooseUs__box">
                    <h5 class="whyChooseUs__title">Почему выбирают нас ?</h5>
                    <h4 class="whyChooseUs__description team wow fadeInLeft" data-wow-offset="150" data-wow-duration="3s">Мы - сильная команда,</h4>
                    <h4 class="whyChooseUs__description skills wow fadeInRight" data-wow-offset="150" data-wow-duration="3s">за нами 14 лет опыта</h4>
                </div>
            </div>
            <!-- our work -->
            <div class="ourWork">
                <h2 class="content__title ourWork__title">Наши работы</h2>
                <hr class="content__line">
                <p class="content__description ourWork__description">Более 100 успешно выполненых проектов</p>
                <div class="ourWork__box">
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.2s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="img/house.jpg" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.4s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="img/house.jpg" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.6s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="img/house.jpg" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                    <section class="ourWork__item wow flipInX" data-wow-delay="0.8s" data-wow-offset="150" data-wow-duration="1.3s">
                        <img src="img/house.jpg" alt="alt">
                        <div class="ourWork__item-hidden"><a href="ourwork.html">название обьекта<i class="fa fa-long-arrow-right ourWork__arrow-right" aria-hidden="true"></i></a></div>
                    </section>
                </div>
            </div>
            <!-- our partner -->
            <div class="ourPartner">
                <h2 class="content__title ourPartner__title">Наши партнеры</h2>
                <hr class="content__line">
                <p class="content__description">Сотрудничество с ведущими компаниями</p>
                <div class="ourPartner__box">
                    <ul class="ourPartner__content">
                        <li>ceresit</li>
                        <li>kema</li>
                        <li>optima</li>
                        <li>ceresit</li>
                        <li>ceresit</li>
                        <li>ceresit</li>
                        <li>ceresit</li>
                        <li>kema</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    @include('inc.footer');

    <div class="hidden"></div>
    <!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
    <!-- end mandatory -->

    @include('inc.script');

    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter -->
    <!-- /Google Analytics counter -->
</body>

</html>

<header id="headerPage">
    <div class="headerPage__container">
        <div class="headerPageTop">
            <ul class="headerPageTop__list">
                <li class="headerPageTop__list-item"><i class="fa fa-envelope"></i>asb.konstantin@gmail.com</li>
                <li class="headerPageTop__list-item"><i class="fa fa-mobile fa-lg"></i>+38 067 631 777 01</li>
                <li class="headerPageTop__list-item"><i class="fa fa-mobile fa-lg"></i>+38 098-751-13-01</li>
                <li class="headerPageTop__list-item">
                    <a class="lang en" href="<?= route('setlocale', ['lang' => 'en']) ?>">EN</a>
                    <a class="lang ru lang-active" href="<?= route('setlocale', ['lang' => 'ru']) ?>">RU</a>
                </li>
            </ul>
        </div>
        <div class="headerPageMiddle">
            <div class="headerPageMiddle__logoName">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/') }}">
                    <img src="{{ asset('img/logooo.png') }}" alt="Лого">
                </a>
                <!-- <h1 class="headerPageMiddle__name"><a href="index.html">асб</a></h1> -->
            </div>
            <nav class="headerPageMiddle__nav">
                <ul class="headerPageMiddle__nav-list">
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/') }}">@lang('home.main')</a>
                    </li>
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/about') }}">@lang('home.about')</a>
                    </li>
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/services') }}">@lang('home.service')</a>
                    </li>
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/ourwork') }}">@lang('home.our work')</a>
                    </li>
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/partner') }}">@lang('home.partner')</a>
                    </li>
                    <li class="headerPageMiddle__list-item">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() .'/contacts') }}">@lang('home.contacts')</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
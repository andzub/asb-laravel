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
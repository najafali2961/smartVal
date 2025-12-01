<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>
                                    {{ __('app.phone') }}</a>
                                <a href="#"><span class="fa fa-paper-plane mr-1"></span> {{ __('app.email') }}</a>
                            </p>
                        </div>

                        <div class="col-md-6 d-flex justify-content-md-end align-items-center">


                            <div class="language-switcher">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="ml-2"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        @if ($localeCode == 'en')
                                            🇬🇧 EN
                                        @elseif($localeCode == 'sv')
                                            🇸🇪 SV
                                        @else
                                            {{ strtoupper($localeCode) }}
                                        @endif
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ LaravelLocalization::localizeURL(route('home')) }}">{{ __('app.brand') }}</a>
        <form action="#" class="searchform order-sm-start order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="{{ __('app.search_placeholder') }}">
                <button type="submit" class="form-control search"><span class="fa fa-search"></span></button>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="{{ __('app.menu') }}">
            <span class="fa fa-bars"></span> {{ __('app.menu') }}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">

                <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">{{ __('app.home') }}</a>
                </li>

                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav-link">{{ __('app.about') }}</a>
                </li>

                <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
                    <a href="{{ route('services') }}" class="nav-link">{{ __('app.services') }}</a>
                </li>

                <li class="nav-item {{ Route::is('cases') ? 'active' : '' }}">
                    <a href="{{ route('cases') }}" class="nav-link">{{ __('app.case_study') }}</a>
                </li>

                <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}">
                    <a href="{{ route('blog') }}" class="nav-link">{{ __('app.blog') }}</a>
                </li>

                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">{{ __('app.contact') }}</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

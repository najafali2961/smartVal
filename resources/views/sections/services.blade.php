@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2">
                            <a href="{{ url('/') }}">{{ __('app.home') }} <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>{{ __('app.services') }} <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">{{ __('app.services') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-accounting-1"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('app.service_accounting_title') }}</h3>
                            <p>{{ __('app.service_accounting_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-tax"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('app.service_tax_title') }}</h3>
                            <p>{{ __('app.service_tax_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-loan"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('app.service_finance_title') }}</h3>
                            <p>{{ __('app.service_finance_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-budget"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">{{ __('app.service_growth_title') }}</h3>
                            <p>{{ __('app.service_growth_text') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('sections.faq')
    @include('sections.pricing')
@endsection

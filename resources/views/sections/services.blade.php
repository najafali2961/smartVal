@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>Services <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Services</h1>
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
                            <h3 class="heading">Accounting</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-tax"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Tax, Compliance &amp; Payroll</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-loan"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Financial Services</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block">
                        <div class="icon d-flex mr-2">
                            <span class="flaticon-budget"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Growth &amp; Funding Access</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sections.faq')

    @include('sections.pricing')
@endsection

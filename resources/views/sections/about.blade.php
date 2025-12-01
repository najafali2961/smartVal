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
                        <span>About us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    @include('sections.info')
    @include('sections.cta')
    @include('sections.testimonies')
    @include('sections.faq')
@endsection

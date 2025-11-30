@extends('layout.app')

@section('content')
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_1.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Business Grow</h2>
                                <h1 class="mb-4">We Help You Businesses Innovate and Grow</h1>
                                <p><a href="#" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Support Business</h2>
                                <h1 class="mb-4">The Best Business Support</h1>
                                <p><a href="#" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url('{{ asset('assets/images/bg_3.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>We Give Advice</h2>
                                <h1 class="mb-4">Expert Financial Advice</h1>
                                <p><a href="#" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image: url('{{ asset('assets/images/about.jpg') }}');">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Accounting</span>
                        <h2 class="mb-4">We Are the Best Accounting Agency</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Market Analysis</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4>Accounting Advisor</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>General Consultancy</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accounting"></span></div>
                        <div class="text pl-4">
                            <h4>Structured Assestment</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('sections.acounting')


    @include('sections.cta')
    @include('sections.testimonies')

    @include('sections.faq')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');"></a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_2.jpg') }}');"></a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20 rounded"
                            style="background-image: url('{{ asset('assets/images/image_3.jpg') }}');"></a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">March 31, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    @include('sections.pricing')
@endsection

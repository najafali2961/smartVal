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

    @include('sections.info')

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

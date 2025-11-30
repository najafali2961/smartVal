@extends('layout.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/bg_2.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="{{ url('/') }}">{{ __('app.home') }} <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <span>{{ __('app.contact_us') }} <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                    <h1 class="mb-0 bread">{{ __('app.contact_us') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">{{ __('app.get_in_touch') }}</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">{{ __('app.message_sent') }}</div>
                                    <form method="POST" action="{{ url('/contact') }}" class="contactForm">
                                        @csrf

                                        <!-- Success Message -->
                                        @if (session('success'))
                                            <div class="alert alert-success mb-4">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">{{ __('app.full_name') }}</label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        value="{{ old('name') }}"
                                                        placeholder="{{ __('app.full_name') }}" required>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label"
                                                        for="email">{{ __('app.email_address') }}</label>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}"
                                                        placeholder="{{ __('app.email_address') }}" required>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">{{ __('app.subject') }}</label>
                                                    <input type="text" name="subject"
                                                        class="form-control @error('subject') is-invalid @enderror"
                                                        value="{{ old('subject') }}" placeholder="{{ __('app.subject') }}"
                                                        required>
                                                    @error('subject')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="message">{{ __('app.message') }}</label>
                                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
                                                        placeholder="{{ __('app.message') }}" required>{{ old('message') }}</textarea>
                                                    @error('message')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('app.send_message') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>{{ __('app.lets_get_in_touch') }}</h3>
                                    <p class="mb-4">{{ __('app.contact_intro') }}</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>{{ __('app.address') }}</span> 198 West 21th Street, Suite 721 New
                                                York NY 10016</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>{{ __('app.phone') }}</span> <a href="tel://1234567920"></a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>{{ __('app.email') }}</span> <a
                                                    href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>{{ __('app.website') }}</span> <a href="#">yoursite.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="map" class="map"></div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7 d-flex align-items-center">
                    <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">{{ __('app.signup_consultation') }}
                    </h2>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="{{ __('app.enter_email') }}">
                            <input type="submit" value="{{ __('app.subscribe') }}" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

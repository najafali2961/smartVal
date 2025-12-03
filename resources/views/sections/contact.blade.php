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

                                    {{-- ADDRESS --}}
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span></span>
                                                <a href="https://www.google.com/maps/search/?api=1&query=Nylyckegatan+7D+53141+Lidköping"
                                                    target="_blank">
                                                    Nylyckegatan 7D, 53141, Lidköping
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    {{-- PHONE --}}
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span></span>
                                                <a href="tel:+46731414786">+46 73 141 47 86</a>
                                            </p>
                                        </div>
                                    </div>

                                    {{-- WHATSAPP --}}
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-whatsapp"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span></span>
                                                <a href="https://wa.me/46731414786" target="_blank">
                                                    +46 73 141 47 86
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span></span>
                                                <a href="mailto:info@smart-val.se">info@smart-val.se</a>
                                            </p>
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
@endsection

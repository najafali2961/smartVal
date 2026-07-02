@extends('layout.app')

@section('title', __('app.meta_home_title'))
@section('meta_description', __('app.meta_home_desc'))

@section('content')
    @include('sections.hero')

    @include('sections.intro')

    {{-- Services preview --}}
    <section class="bg-ink-50/60 py-16 sm:py-24">
        <div class="container-x">
            <div class="reveal mx-auto max-w-2xl text-center">
                <span class="kicker justify-center">{{ __('app.services_kicker') }}</span>
                <h2 class="section-title">{{ __('app.services_title') }}</h2>
                <p class="mt-4 text-lg leading-relaxed text-ink-600">{{ __('app.services_intro') }}</p>
            </div>

            <div class="mt-12">
                @include('sections.services-grid')
            </div>

            <div class="reveal mt-11 text-center">
                <a href="{{ route('services') }}" class="btn-dark btn-lg">
                    {{ __('app.services_all_btn') }}
                    <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14" />
                        <path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @include('sections.why')

    @include('sections.process')

    @include('sections.industries')

    @include('sections.testimonials')

    @include('sections.faq')

    @include('sections.cta')
@endsection

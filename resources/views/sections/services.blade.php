@extends('layout.app')

@section('title', __('app.meta_services_title'))
@section('meta_description', __('app.meta_services_desc'))

@section('content')

    @include('sections.page-hero', [
        'title' => __('app.services_hero_title'),
        'subtitle' => __('app.services_hero_text'),
    ])

    {{-- Intro --}}
    <section class="pt-16 sm:pt-20">
        <div class="container-x">
            <div class="reveal mx-auto max-w-3xl text-center">
                <p class="text-lg leading-relaxed text-ink-600">{{ __('app.services_page_intro') }}</p>
            </div>
        </div>
    </section>

    {{-- All 12 services, detailed cards with bullets + anchor ids --}}
    @include('sections.services-grid', ['detailed' => true])

    @include('sections.process')

    @include('sections.faq')

    @include('sections.cta')

@endsection

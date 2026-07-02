@extends('layout.app')

@section('title', __('app.meta_contact_title'))
@section('meta_description', __('app.meta_contact_desc'))

@section('content')

    @include('sections.page-hero', [
        'title' => __('app.contact_hero_title'),
        'subtitle' => __('app.contact_hero_text'),
    ])

    <section class="py-16 sm:py-24">
        <div class="container-x">
            <div class="grid gap-12 lg:grid-cols-5 lg:gap-16">

                {{-- Contact channels --}}
                <div class="reveal lg:col-span-2">
                    <span class="kicker">{{ __('app.contact_kicker') }}</span>
                    <h2 class="section-title">{{ __('app.contact_title') }}</h2>
                    <p class="mt-4 leading-relaxed">{{ __('app.contact_text') }}</p>

                    <div class="mt-8 space-y-4">
                        <a href="tel:{{ __('app.phone_href') }}"
                            class="group flex items-start gap-4 rounded-2xl border border-ink-100 p-4 transition hover:border-brand-300 hover:shadow-card">
                            <span class="card-icon group-hover:bg-brand-600 group-hover:text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block font-bold text-ink-950">{{ __('app.contact_phone_t') }}</span>
                                <span class="block text-sm text-ink-500">{{ __('app.contact_phone_d') }}</span>
                                <span class="mt-0.5 block font-semibold text-brand-700">{{ __('app.phone') }}</span>
                            </span>
                        </a>

                        <a href="mailto:{{ __('app.email') }}"
                            class="group flex items-start gap-4 rounded-2xl border border-ink-100 p-4 transition hover:border-brand-300 hover:shadow-card">
                            <span class="card-icon group-hover:bg-brand-600 group-hover:text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span>
                            <span>
                                <span class="block font-bold text-ink-950">{{ __('app.contact_email_t') }}</span>
                                <span class="block text-sm text-ink-500">{{ __('app.contact_email_d') }}</span>
                                <span class="mt-0.5 block font-semibold text-brand-700">{{ __('app.email') }}</span>
                            </span>
                        </a>

                        <a href="{{ __('app.map_url') }}" target="_blank" rel="noopener"
                            class="group flex items-start gap-4 rounded-2xl border border-ink-100 p-4 transition hover:border-brand-300 hover:shadow-card">
                            <span class="card-icon group-hover:bg-brand-600 group-hover:text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block font-bold text-ink-950">{{ __('app.contact_visit_t') }}</span>
                                <span class="block text-sm text-ink-500">{{ __('app.contact_visit_d') }}</span>
                                <span class="mt-0.5 block font-semibold text-brand-700">{{ __('app.address_full') }}</span>
                            </span>
                        </a>

                        <a href="{{ __('app.whatsapp_url') }}" target="_blank" rel="noopener"
                            class="group flex items-start gap-4 rounded-2xl border border-ink-100 p-4 transition hover:border-brand-300 hover:shadow-card">
                            <span class="card-icon group-hover:bg-brand-600 group-hover:text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.149-.174.198-.298.297-.497.1-.198.05-.371-.025-.52-.074-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block font-bold text-ink-950">{{ __('app.contact_wa_t') }}</span>
                                <span class="block text-sm text-ink-500">{{ __('app.contact_wa_d') }}</span>
                            </span>
                        </a>
                    </div>

                    {{-- Opening hours --}}
                    <div class="mt-8 rounded-2xl bg-ink-50 p-6">
                        <p class="flex items-center gap-2.5 font-bold text-ink-950">
                            <svg class="h-5 w-5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ __('app.hours_label') }}
                        </p>
                        <p class="mt-3 text-sm text-ink-600">{{ __('app.hours_weekdays') }}</p>
                        <p class="mt-1 text-sm text-ink-600">{{ __('app.hours_weekend') }}</p>
                    </div>
                </div>

                {{-- Form --}}
                <div class="reveal lg:col-span-3">
                    <div class="rounded-3xl border border-ink-100 bg-white p-6 shadow-soft sm:p-10">
                        <h3 class="text-2xl font-extrabold tracking-tight text-ink-950">{{ __('app.form_title') }}</h3>
                        <p class="mt-2 text-ink-500">{{ __('app.form_text') }}</p>

                        @if (session('success'))
                            <div data-flash
                                class="mt-6 flex items-start gap-3 rounded-2xl border border-brand-200 bg-brand-50 p-4 text-brand-800">
                                <svg class="mt-0.5 h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="font-medium">{{ session('success') }}</p>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mt-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-700" role="alert">
                                <ul class="list-disc space-y-1 pl-5 text-sm">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @php
                            $inputClasses =
                                'w-full rounded-xl border border-ink-200 bg-white px-4 py-3 text-ink-900 placeholder:text-ink-300 transition focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/15';
                            $labelClasses = 'mb-1.5 block text-sm font-bold text-ink-800';
                        @endphp

                        <form method="POST" action="{{ route('contact.send') }}" class="mt-8 grid gap-5 sm:grid-cols-2">
                            @csrf

                            {{-- Honeypot — hidden from humans, bots fill it and get silently dropped --}}
                            <input type="text" name="website" value="" tabindex="-1" autocomplete="off"
                                class="hidden" aria-hidden="true">

                            <div>
                                <label for="name" class="{{ $labelClasses }}">{{ __('app.full_name') }}</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="{{ __('app.form_name_ph') }}"
                                    class="{{ $inputClasses }} @error('name') border-red-300 @enderror">
                            </div>

                            <div>
                                <label for="email" class="{{ $labelClasses }}">{{ __('app.email_address') }}</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="{{ __('app.form_email_ph') }}"
                                    class="{{ $inputClasses }} @error('email') border-red-300 @enderror">
                            </div>

                            <div class="sm:col-span-2">
                                <label for="subject" class="{{ $labelClasses }}">{{ __('app.subject') }}</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                                    placeholder="{{ __('app.form_subject_ph') }}"
                                    class="{{ $inputClasses }} @error('subject') border-red-300 @enderror">
                            </div>

                            <div class="sm:col-span-2">
                                <label for="message" class="{{ $labelClasses }}">{{ __('app.message') }}</label>
                                <textarea id="message" name="message" rows="6" required minlength="10"
                                    placeholder="{{ __('app.form_message_ph') }}"
                                    class="{{ $inputClasses }} resize-y @error('message') border-red-300 @enderror">{{ old('message') }}</textarea>
                            </div>

                            <div class="sm:col-span-2">
                                <button type="submit" class="btn-primary btn-lg w-full sm:w-auto">
                                    {{ __('app.send_message') }}
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map --}}
    <section class="pb-16 sm:pb-24">
        <div class="container-x">
            <div class="reveal overflow-hidden rounded-3xl border border-ink-100 shadow-soft">
                <iframe title="{{ __('app.address_full') }}"
                    src="https://maps.google.com/maps?q=Nylyckegatan%207D%2C%20Lidk%C3%B6ping&output=embed"
                    class="h-80 w-full sm:h-96" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

@endsection

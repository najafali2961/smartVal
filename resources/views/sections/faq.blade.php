<section class="bg-ink-50/60 py-16 sm:py-24">
    <div class="container-x grid gap-12 lg:grid-cols-5 lg:gap-16">

        <div class="reveal lg:col-span-2">
            <span class="kicker">{{ __('app.faq_kicker') }}</span>
            <h2 class="section-title">{{ __('app.faq_title') }}</h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-600">{{ __('app.faq_text') }}</p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row lg:flex-col xl:flex-row">
                <a href="tel:{{ __('app.phone_href') }}" class="btn-primary btn-md">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                    {{ __('app.phone') }}
                </a>
                <a href="mailto:{{ __('app.email') }}" class="btn-outline btn-md bg-white">{{ __('app.email') }}</a>
            </div>
        </div>

        <div class="reveal lg:col-span-3" data-faq-group>
            <div class="space-y-3.5">
                @foreach ([1, 2, 3, 4, 5, 6] as $i)
                    <details class="faq-item group rounded-2xl border border-ink-100 bg-white shadow-card"
                        @if ($i === 1) open @endif>
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 p-5 text-left font-extrabold text-ink-950 sm:p-6 sm:text-lg">
                            {{ __('app.faq_q' . $i) }}
                            <span
                                class="faq-chevron flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-brand-50 text-brand-600 transition-transform duration-300">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                    aria-hidden="true">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </span>
                        </summary>
                        <p class="px-5 pb-5 -mt-1 text-[15px] leading-relaxed text-ink-600 sm:px-6 sm:pb-6">
                            {{ __('app.faq_a' . $i) }}
                        </p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>

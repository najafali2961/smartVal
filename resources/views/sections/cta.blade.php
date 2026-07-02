<section class="py-16 sm:py-20">
    <div class="container-x">
        <div class="reveal relative overflow-hidden rounded-3xl bg-ink-950 px-6 py-14 text-center sm:px-12 sm:py-16">
            <div class="pointer-events-none absolute inset-0" aria-hidden="true">
                <div class="absolute -top-24 left-1/4 h-64 w-64 rounded-full bg-brand-600/30 blur-3xl"></div>
                <div class="absolute -bottom-24 right-1/4 h-64 w-64 rounded-full bg-brand-500/20 blur-3xl"></div>
            </div>

            <div class="relative mx-auto max-w-2xl">
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                    {{ __('app.cta_title') }}</h2>
                <p class="mt-4 text-lg leading-relaxed text-ink-200">{{ __('app.cta_text') }}</p>

                <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn-primary btn-lg">
                        {{ __('app.cta_button') }}
                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                    <p class="text-sm font-semibold text-ink-300">
                        {{ __('app.cta_or_call') }}
                        <a href="tel:{{ __('app.phone_href') }}"
                            class="ml-1 font-extrabold text-brand-400 underline-offset-4 transition-colors hover:text-brand-300 hover:underline">{{ __('app.phone') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

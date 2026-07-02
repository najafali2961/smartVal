<section class="bg-ink-950 py-16 sm:py-24">
    <div class="container-x">
        <div class="reveal mx-auto max-w-2xl text-center">
            <span class="kicker justify-center !text-brand-400">{{ __('app.industries_kicker') }}</span>
            <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                {{ __('app.industries_title') }}</h2>
            <p class="mt-4 text-lg leading-relaxed text-ink-300">{{ __('app.industries_text') }}</p>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @php
                $industryIcons = [
                    1 => '<path d="M17 8h1a4 4 0 1 1 0 8h-1"/><path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/><path d="M6 2v2M10 2v2M14 2v2"/>',
                    2 => '<circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>',
                    3 => '<path d="M2 20h20"/><path d="M4 20V8l8-5 8 5v12"/><path d="M9 20v-6h6v6"/>',
                    4 => '<path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18h-5"/><path d="M20 18h2v-7l-3-5h-5v12h1"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/>',
                    5 => '<rect width="18" height="14" x="3" y="6" rx="2"/><path d="M3 10h18"/><path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"/>',
                    6 => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>',
                    7 => '<path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 9h1M9 13h1M14 9h1M14 13h1M9 17h1M14 17h1"/>',
                    8 => '<path d="M12 2 2 7l10 5 10-5-10-5Z"/><path d="m2 17 10 5 10-5"/><path d="m2 12 10 5 10-5"/>',
                ];
            @endphp

            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                <div class="reveal flex items-center gap-3.5 rounded-2xl border border-ink-800 bg-ink-900/60 p-5 transition-colors duration-300 hover:border-brand-500/60 hover:bg-ink-900"
                    style="transition-delay: {{ ($i - 1) * 50 }}ms">
                    <svg class="h-6 w-6 shrink-0 text-brand-400" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                        aria-hidden="true">
                        {!! $industryIcons[$i] !!}
                    </svg>
                    <span class="text-[15px] font-bold text-white">{{ __('app.industry_' . $i) }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

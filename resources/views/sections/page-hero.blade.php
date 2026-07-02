{{-- Shared inner-page header. Usage:
    @include('sections.page-hero', ['title' => ..., 'subtitle' => ...]) --}}
<section class="relative overflow-hidden bg-ink-950">
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute -top-24 right-[-10%] h-72 w-72 rounded-full bg-brand-600/25 blur-3xl"></div>
        <div class="absolute -bottom-32 left-[-5%] h-80 w-80 rounded-full bg-brand-500/15 blur-3xl"></div>
    </div>

    <div class="container-x relative py-16 sm:py-20 lg:py-24">
        <nav class="mb-4 flex items-center gap-2 text-[13px] font-bold text-ink-300" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="transition-colors hover:text-brand-300">
                {{ __('app.breadcrumb_home') }}
            </a>
            <svg class="h-3.5 w-3.5 text-ink-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <span class="text-brand-400">{{ $title }}</span>
        </nav>

        <h1 class="max-w-3xl text-4xl font-extrabold tracking-tight text-white sm:text-5xl">{{ $title }}</h1>
        @isset($subtitle)
            <p class="mt-4 max-w-2xl text-lg font-medium text-ink-200">{{ $subtitle }}</p>
        @endisset
    </div>
</section>

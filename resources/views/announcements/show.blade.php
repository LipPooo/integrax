@extends('layouts.integrax')

@section('title', $announcement['title'] . ' — Integrax Berhad')

@section('content')

{{-- Minimal fixed navbar --}}
<header class="fixed inset-x-0 top-0 z-50 border-b border-white/8 bg-integrax-blue/90 backdrop-blur-lg">
    <div class="mx-auto flex max-w-[90rem] items-center justify-between px-8 py-5 lg:px-14">
        <a href="/" class="flex items-center gap-4">
            <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad" class="h-10 w-11 rounded-xl object-contain">
            <div class="leading-none">
                <span class="block text-sm font-bold tracking-[0.12em] text-white">INTEGRAX</span>
                <span class="mt-0.5 block text-[9px] font-medium uppercase tracking-[0.28em] text-integrax-blue-light/70">Berhad</span>
            </div>
        </a>
        <a href="/" class="inline-flex items-center gap-2 text-sm font-semibold text-white/60 transition-colors hover:text-white">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M19 12H5M11 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Back to Home
        </a>
    </div>
</header>

{{-- Hero --}}
<section class="ann-hero section-tone-dark relative flex min-h-[65vh] items-end overflow-hidden">

    {{-- Background gradient --}}
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute inset-0 bg-linear-to-br from-integrax-blue via-integrax-blue-mid to-integrax-blue-deep"></div>
        <div class="absolute -left-32 top-1/4 h-[28rem] w-[28rem] rounded-full bg-integrax-red/15 blur-[120px]"></div>
        <div class="absolute right-0 top-1/3 h-80 w-80 rounded-full bg-integrax-blue-light/15 blur-[100px]"></div>
        <div class="grain-overlay opacity-40"></div>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-[90rem] px-8 pb-20 pt-40 lg:px-14 lg:pb-28 lg:pt-48">

        {{-- Eyebrow --}}
        <p class="mb-6 flex flex-wrap items-center gap-4">
            <span class="h-px w-10 bg-integrax-red"></span>
            <span class="text-[11px] font-bold uppercase tracking-[0.3em] text-integrax-red">{{ $announcement['label'] ?? 'Announcement' }}</span>
            <span class="rounded-full border border-integrax-blue-light/30 bg-integrax-blue-light/10 px-3 py-0.5 text-[11px] font-semibold uppercase tracking-[0.2em] text-integrax-blue-light">
                {{ $announcement['badge'] ?? 'Event' }}
            </span>
        </p>

        {{-- Title --}}
        <h1 class="max-w-4xl text-4xl font-extrabold leading-[1.05] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4rem]">
            {{ $announcement['title'] }}
        </h1>

        @if(!empty($announcement['subtitle']))
        <p class="mt-4 text-xl font-medium text-integrax-blue-light/80 sm:text-2xl">
            {{ $announcement['subtitle'] }}
        </p>
        @endif

        {{-- Meta --}}
        <div class="mt-8 flex flex-wrap items-center gap-6">
            @if(!empty($announcement['date_display']))
            <div class="flex items-center gap-2 text-sm text-white/60">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="3" stroke="currentColor" stroke-width="1.6"/>
                    <path d="M16 2v4M8 2v4M3 10h18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
                <span>{{ $announcement['date_display'] }}</span>
            </div>
            @endif
            @if(!empty($announcement['location']))
            <div class="flex items-center gap-2 text-sm text-white/60">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 21C12 21 5 13.5 5 8.5a7 7 0 0114 0C19 13.5 12 21 12 21z" stroke="currentColor" stroke-width="1.6"/>
                    <circle cx="12" cy="8.5" r="2.5" stroke="currentColor" stroke-width="1.6"/>
                </svg>
                <span>{{ $announcement['location'] }}</span>
            </div>
            @endif
        </div>
    </div>
</section>

{{-- Content --}}
<section class="section-tone-white py-20 lg:py-28">
    <div class="mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="mx-auto max-w-3xl">

            {{-- Divider --}}
            <div class="mb-12 h-px bg-linear-to-r from-integrax-red/60 via-integrax-blue-light/40 to-transparent"></div>

            {{-- Body copy --}}
            <div class="ann-content prose prose-lg max-w-none">
                <p class="text-lg leading-relaxed text-integrax-blue/80 md:text-xl">
                    {{ $announcement['full_content'] ?? $announcement['description'] }}
                </p>
            </div>

            {{-- Back link --}}
            <div class="mt-14">
                <a href="/" class="inline-flex items-center gap-2.5 text-sm font-semibold text-integrax-blue/60 transition-colors hover:text-integrax-red">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 12H5M11 6l-6 6 6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

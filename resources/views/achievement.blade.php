@extends('layouts.integrax')

@section('title', 'Achievement — Integrax Berhad')

@section('content')

{{-- ═══════════════════════ NAVBAR ═══════════════════════ --}}
<header id="site-header" class="site-header fixed inset-x-0 top-0 z-50">
    <div class="site-header-glow pointer-events-none absolute inset-x-0 top-0 h-full" aria-hidden="true"></div>
    <div class="relative mx-auto flex max-w-[90rem] items-center justify-between px-4 py-5 sm:px-6 sm:py-6 lg:px-14 lg:py-7">
        <a href="/" class="site-header-logo group flex items-center gap-5">
            <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad logo" class="h-16 w-18 rounded-2xl object-contain transition-transform duration-500 group-hover:scale-105" fetchpriority="high" decoding="async" />
        </a>

        <nav class="hidden items-center gap-12 lg:flex" aria-label="Primary">
            <button type="button" class="about-trigger js-about-trigger">About</button>
            <a href="/#stats" class="nav-link">Performance</a>
            <a href="/#segments" class="nav-link">Business</a>
            <a href="/#journey" class="nav-link">Our Journey</a>
            <a href="/#esg" class="nav-link">Sustainability</a>
            <a href="/#network" class="nav-link">Network</a>
            <a href="/#contact" class="nav-link">Contact</a>
        </nav>

        <div class="hidden items-center gap-5 lg:flex">
            <a href="/#contact" class="btn-nav-ghost">Investor Relations</a>
            <a href="/#segments" class="btn-primary px-6 py-3 text-sm">Explore Solutions</a>
        </div>

        <button
            type="button"
            id="mobile-menu-btn"
            class="site-header-menu-btn inline-flex h-12 w-12 items-center justify-center rounded-full lg:hidden"
            aria-label="Open menu"
            aria-expanded="false"
        >
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="site-header-mobile hidden border-t px-5 py-6 sm:px-8 sm:py-8 backdrop-blur-2xl lg:hidden">
        <nav class="flex flex-col gap-5">
            <button type="button" class="about-trigger js-about-trigger mobile-nav-link w-full text-left">About</button>
            <a href="/#stats" class="mobile-nav-link">Performance</a>
            <a href="/#segments" class="mobile-nav-link">Business</a>
            <a href="/#journey" class="mobile-nav-link">Our Journey</a>
            <a href="/#esg" class="mobile-nav-link">Sustainability</a>
            <a href="/#network" class="mobile-nav-link">Network</a>
            <a href="/#contact" class="mobile-nav-link">Contact</a>
        </nav>
    </div>
</header>

{{-- ═══════════════════════ HERO ═══════════════════════ --}}
<section class="ach-hero-section section-tone-dark relative flex min-h-screen items-end overflow-hidden">

    {{-- Ambient lighting orbs --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="ach-orb absolute -left-32 top-1/4 h-[28rem] w-[28rem] rounded-full bg-integrax-blue-light/14 blur-[110px]"></div>
        <div class="ach-orb absolute right-0 top-1/3 h-[24rem] w-[24rem] rounded-full bg-integrax-red/18 blur-[100px]"></div>
        <div class="ach-orb absolute bottom-1/4 left-1/2 h-72 w-72 rounded-full bg-integrax-blue-glow/12 blur-[90px]"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_70%_55%_at_0%_0%,rgba(61,143,201,0.1),transparent_52%)]"></div>
    </div>
    <div class="grain-overlay" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto w-full max-w-[90rem] px-4 pb-20 pt-28 sm:px-6 sm:pb-28 sm:pt-36 lg:px-14 lg:pb-44 lg:pt-52">

        <div class="ach-hero-item" style="animation-delay:0.1s">
            <p class="mb-8 flex flex-wrap items-center gap-4">
                <span class="h-px w-16 bg-integrax-blue-light"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.3em] text-integrax-blue-light">Integrax Berhad · Certified Excellence</span>
            </p>
        </div>

        <div class="ach-hero-item max-w-5xl" style="animation-delay:0.25s">
            <h1 class="text-3xl font-extrabold leading-[1.04] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4.25rem]">
                Recognised for<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Operational</span><br>
                Excellence.
            </h1>
        </div>

        <div class="ach-hero-item mt-10 max-w-2xl" style="animation-delay:0.4s">
            <p class="text-lg leading-relaxed text-white/70 md:text-xl">
                Two internationally recognised certifications affirming our commitment to best-in-class asset management and maritime security across our port and terminal operations.
            </p>
        </div>

        <div class="ach-hero-item mt-14 flex flex-wrap gap-4" style="animation-delay:0.55s">
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">2</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Certifications Held</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">2015</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">First Certified</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">ISO</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">International Standard</p>
            </div>
        </div>

        <div class="ach-hero-item mt-12 flex flex-wrap gap-5" style="animation-delay:0.7s">
            <a href="#achievements" class="btn-primary">
                View Achievements
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="/about" class="btn-ghost">About Integrax</a>
        </div>
    </div>

    <div class="ach-flow-bridge--hero-overview pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ ACHIEVEMENT OVERVIEW ═══════════════════════ --}}
<section class="section-tone-light relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--light absolute -left-32 top-0 h-[28rem] w-[28rem]"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute right-1/4 top-1/2 h-56 w-56 opacity-40"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/35 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
        <div class="grid items-start gap-12 lg:grid-cols-2 lg:gap-24">

            {{-- Left: narrative --}}
            <div class="reveal-up">
                <p class="section-eyebrow">Our Achievements</p>
                <h2 class="section-title">Standards That Define Our Operations</h2>
                <p class="mt-8 text-lg leading-relaxed text-integrax-blue/70">
                    Integrax Berhad maintains internationally recognised certifications that affirm our commitment to operational excellence, asset integrity, and maritime security across our port and bulk terminal operations.
                </p>
                <p class="mt-5 text-lg leading-relaxed text-integrax-blue/70">
                    These achievements reflect the rigour applied to every aspect of our operations — from asset management systems governing critical infrastructure to marine security frameworks protecting our vessel operations.
                </p>
                <ul class="mt-10 space-y-4">
                    @foreach ([
                        'ISO 55001:2014 compliant asset management system, maintained since August 2015',
                        'Marine facility security certification for bulk carrier ship operations at LBTSB',
                        'Aligned with TNB Genco\'s mandate for operational integrity and infrastructure excellence',
                    ] as $point)
                        <li class="flex items-start gap-4 text-sm text-integrax-blue/75 md:text-base">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.6)]"></span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: certification summary cards --}}
            <div class="reveal-fade flex flex-col gap-5">
                {{-- ISO Card --}}
                <div class="relative overflow-hidden rounded-2xl border border-integrax-blue-light/20 bg-white/75 p-6 shadow-[0_8px_32px_-10px_rgba(10,22,40,0.10)] backdrop-blur-sm sm:p-8">
                    <div class="mb-5 flex items-center gap-4">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-linear-to-br from-integrax-blue-glow to-integrax-blue-light">
                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.745 3.745 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.745 3.745 0 013.296 1.043 3.745 3.745 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-integrax-blue-glow">Asset Management</p>
                            <p class="text-base font-extrabold tracking-tight text-integrax-blue">ISO 55001:2014</p>
                        </div>
                        <span class="ml-auto rounded-full bg-integrax-blue/5 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-integrax-blue/55">Since Aug 2015</span>
                    </div>
                    <p class="text-sm leading-relaxed text-integrax-blue/60">Asset management system compliance for buildings, plants, and machinery at port and coal bulk terminal operations under TNB Genco.</p>
                </div>

                {{-- Marine Security Card --}}
                <div class="relative overflow-hidden rounded-2xl border border-integrax-blue-light/20 bg-white/75 p-6 shadow-[0_8px_32px_-10px_rgba(10,22,40,0.10)] backdrop-blur-sm sm:p-8">
                    <div class="mb-5 flex items-center gap-4">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-linear-to-br from-integrax-blue to-integrax-blue-glow">
                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-integrax-blue-glow">Maritime Security</p>
                            <p class="text-base font-extrabold tracking-tight text-integrax-blue">Marine Facility Security</p>
                        </div>
                        <span class="ml-auto rounded-full bg-integrax-blue/5 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-integrax-blue/55">2019</span>
                    </div>
                    <p class="text-sm leading-relaxed text-integrax-blue/60">Certification for operating in compliance with an approved marine facility security plan for bulk carrier ships at Lekir Bulk Terminal Sungai Besi (LBTSB).</p>
                </div>
            </div>

        </div>
    </div>

    <div class="ach-flow-bridge--overview-cards pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ ACHIEVEMENT CARDS ═══════════════════════ --}}
<section id="achievements" class="ach-cards-section section-tone-white relative overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow absolute -right-32 top-0 h-[32rem] w-[32rem] opacity-60" style="background:color-mix(in oklab, var(--color-integrax-blue-pale-deep) 50%, transparent)"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute left-1/3 bottom-0 h-64 w-64 opacity-30"></div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        {{-- Section header --}}
        <div class="reveal-up mb-16 lg:mb-20">
            <p class="section-eyebrow">Certifications & Recognition</p>
            <h2 class="section-title max-w-3xl">International Standards We Uphold</h2>
            <p class="section-lead">
                Every certification held by Integrax Berhad represents a sustained operational commitment — maintained through rigorous audits, systematic processes, and a culture of continuous improvement.
            </p>
        </div>

        {{-- Achievement Cards Grid --}}
        <div class="grid gap-8 lg:grid-cols-2 lg:gap-10">

            {{-- Card 1: ISO 55001:2014 --}}
            <article class="ach-cert-card group relative flex flex-col overflow-hidden rounded-3xl border border-integrax-blue-light/18 bg-white shadow-[0_4px_32px_-8px_rgba(10,22,40,0.08)]">
                <div class="ach-cert-card-accent h-0.5 w-full bg-linear-to-r from-integrax-blue-glow via-integrax-blue-light to-integrax-blue-glow opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

                {{-- Card header --}}
                <div class="p-8 pb-0 sm:p-10 sm:pb-0">
                    <div class="flex items-start justify-between gap-4">
                        <div class="ach-cert-icon flex h-14 w-14 items-center justify-center rounded-2xl">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.745 3.745 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.745 3.745 0 013.296 1.043 3.745 3.745 0 011.043 3.296A3.745 3.745 0 0121 12z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <span class="ach-year-badge rounded-full px-4 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em]">Since Aug 2015</span>
                            <span class="rounded-full border border-integrax-red/20 bg-integrax-red/8 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.15em] text-integrax-red">Asset Management</span>
                        </div>
                    </div>

                    <div class="mt-7">
                        <h3 class="text-2xl font-extrabold tracking-tight text-integrax-blue lg:text-[1.65rem]">ISO 55001:2014 Compliance</h3>
                        <div class="mt-4 flex items-center gap-3">
                            <span class="h-px w-10 bg-integrax-blue-light/50"></span>
                            <span class="text-sm font-semibold text-integrax-blue-glow">TNB Genco</span>
                        </div>
                    </div>
                </div>

                {{-- Card body --}}
                <div class="flex flex-1 flex-col p-8 pt-6 sm:p-10 sm:pt-6">
                    <p class="text-[0.9375rem] leading-relaxed text-integrax-blue/65">
                        Integrax achieved and maintains ISO 55001:2014 compliance for TNB Genco's asset management system — the international standard for systematic management of physical assets to maximise value and minimise risk over their lifecycle.
                    </p>

                    <div class="mt-8 border-t border-integrax-blue-light/12 pt-8">
                        <p class="mb-4 text-[11px] font-bold uppercase tracking-[0.22em] text-integrax-blue/40">Certification Scope</p>
                        <ul class="space-y-3.5">
                            @foreach ([
                                'Asset management system for buildings, plants, and machinery',
                                'Port and coal bulk terminal operations',
                                'Maintained continuously since August 2015',
                            ] as $scope)
                                <li class="flex items-start gap-3.5 text-sm text-integrax-blue/68">
                                    <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-blue-glow shadow-[0_0_6px_rgba(61,143,201,0.55)]"></span>
                                    {{ $scope }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-8 rounded-2xl border border-integrax-blue-light/15 bg-integrax-blue-pale/60 p-5">
                        <div class="flex items-center gap-3">
                            <div class="h-1.5 w-1.5 rounded-full bg-integrax-blue-light shadow-[0_0_8px_rgba(94,179,228,0.65)]"></div>
                            <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Standard</p>
                        </div>
                        <p class="mt-2 text-sm font-semibold text-integrax-blue/80">ISO 55001:2014 — Asset management systems: Requirements</p>
                    </div>
                </div>
            </article>

            {{-- Card 2: Marine Facility Security --}}
            <article class="ach-cert-card group relative flex flex-col overflow-hidden rounded-3xl border border-integrax-blue-light/18 bg-white shadow-[0_4px_32px_-8px_rgba(10,22,40,0.08)]">
                <div class="ach-cert-card-accent h-0.5 w-full bg-linear-to-r from-integrax-blue-glow via-integrax-blue-light to-integrax-blue-glow opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

                {{-- Card header --}}
                <div class="p-8 pb-0 sm:p-10 sm:pb-0">
                    <div class="flex items-start justify-between gap-4">
                        <div class="ach-cert-icon flex h-14 w-14 items-center justify-center rounded-2xl bg-linear-to-br from-integrax-blue to-integrax-blue-glow">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <span class="ach-year-badge rounded-full px-4 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em]">Certified 2019</span>
                            <span class="rounded-full border border-integrax-red/20 bg-integrax-red/8 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.15em] text-integrax-red">Maritime Security</span>
                        </div>
                    </div>

                    <div class="mt-7">
                        <h3 class="text-2xl font-extrabold tracking-tight text-integrax-blue lg:text-[1.65rem]">Marine Facility Security Certification</h3>
                        <div class="mt-4 flex items-center gap-3">
                            <span class="h-px w-10 bg-integrax-blue-light/50"></span>
                            <span class="text-sm font-semibold text-integrax-blue-glow">LBTSB — Lekir Bulk Terminal Sungai Besi</span>
                        </div>
                    </div>
                </div>

                {{-- Card body --}}
                <div class="flex flex-1 flex-col p-8 pt-6 sm:p-10 sm:pt-6">
                    <p class="text-[0.9375rem] leading-relaxed text-integrax-blue/65">
                        Lekir Bulk Terminal Sungai Besi (LBTSB) received formal certification confirming full compliance with an approved marine facility security plan — a recognised framework governing the safe and secure operation of bulk carrier vessel movements.
                    </p>

                    <div class="mt-8 border-t border-integrax-blue-light/12 pt-8">
                        <p class="mb-4 text-[11px] font-bold uppercase tracking-[0.22em] text-integrax-blue/40">Certification Scope</p>
                        <ul class="space-y-3.5">
                            @foreach ([
                                'Operating in compliance with an approved marine facility security plan',
                                'Bulk carrier ship operations at LBTSB',
                                'Certified in 2019',
                            ] as $scope)
                                <li class="flex items-start gap-3.5 text-sm text-integrax-blue/68">
                                    <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-blue-glow shadow-[0_0_6px_rgba(61,143,201,0.55)]"></span>
                                    {{ $scope }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-8 rounded-2xl border border-integrax-blue-light/15 bg-integrax-blue-pale/60 p-5">
                        <div class="flex items-center gap-3">
                            <div class="h-1.5 w-1.5 rounded-full bg-integrax-blue-light shadow-[0_0_8px_rgba(94,179,228,0.65)]"></div>
                            <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Facility</p>
                        </div>
                        <p class="mt-2 text-sm font-semibold text-integrax-blue/80">Lekir Bulk Terminal Sungai Besi (LBTSB) — Bulk carrier operations</p>
                    </div>
                </div>
            </article>

        </div>
    </div>

    <div class="ach-flow-bridge--cards-timeline pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ RECOGNITION TIMELINE ═══════════════════════ --}}
<section class="ach-timeline-section section-tone-dark relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -left-40 top-1/4 h-[26rem] w-[26rem] rounded-full bg-integrax-blue-glow/10 blur-[110px]"></div>
        <div class="absolute right-0 bottom-1/4 h-[22rem] w-[22rem] rounded-full bg-integrax-red/12 blur-[100px]"></div>
    </div>
    <div class="grain-overlay opacity-20" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        {{-- Section header --}}
        <div class="reveal-up mb-20 lg:mb-24">
            <p class="section-eyebrow text-integrax-blue-light">Timeline of Recognition</p>
            <h2 class="section-title text-white">A Record of Sustained<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Compliance</span>
            </h2>
        </div>

        {{-- Timeline --}}
        <div class="relative">

            {{-- Vertical line (desktop) --}}
            <div class="ach-timeline-line pointer-events-none absolute left-1/2 top-0 hidden h-full w-px -translate-x-1/2 origin-top lg:block" aria-hidden="true"
                 style="background: linear-gradient(to bottom, transparent, color-mix(in oklab, var(--color-integrax-blue-light) 40%, transparent) 20%, color-mix(in oklab, var(--color-integrax-blue-light) 40%, transparent) 80%, transparent)"></div>

            {{-- Vertical line (mobile) --}}
            <div class="ach-timeline-line pointer-events-none absolute left-6 top-0 h-full w-px origin-top lg:hidden" aria-hidden="true"
                 style="background: linear-gradient(to bottom, transparent, color-mix(in oklab, var(--color-integrax-blue-light) 35%, transparent) 15%, color-mix(in oklab, var(--color-integrax-blue-light) 35%, transparent) 85%, transparent)"></div>

            <div class="space-y-0">

                {{-- Timeline Item 1: 2015 --}}
                <div class="ach-timeline-item relative flex items-start gap-0 pb-20 lg:pb-24">

                    {{-- Desktop layout: content on left, node centre, empty right --}}
                    <div class="hidden w-full lg:grid lg:grid-cols-[1fr_auto_1fr] lg:items-center lg:gap-0">

                        {{-- Left content --}}
                        <div class="pr-14 text-right">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <span class="text-[11px] font-bold uppercase tracking-[0.25em] text-integrax-blue-light">Asset Management</span>
                                <span class="h-px w-8 bg-integrax-blue-light/40"></span>
                            </div>
                            <h3 class="text-2xl font-extrabold tracking-tight text-white lg:text-[1.6rem]">ISO 55001:2014 Compliance</h3>
                            <p class="mt-5 text-sm leading-relaxed text-white/55 max-w-sm ml-auto">
                                Achieved and maintained ISO 55001:2014 compliance for TNB Genco's asset management system covering buildings, plants, and machinery at port and coal bulk terminal operations.
                            </p>
                            <div class="mt-6 flex items-center justify-end gap-3">
                                <span class="h-px w-8 bg-integrax-blue-light/30"></span>
                                <span class="text-sm font-semibold text-integrax-blue-glow">TNB Genco</span>
                            </div>
                        </div>

                        {{-- Centre node --}}
                        <div class="flex flex-col items-center">
                            <div class="ach-timeline-node relative flex h-16 w-16 items-center justify-center rounded-full border-2 border-integrax-blue-light/50 bg-integrax-blue shadow-[0_0_40px_-8px_rgba(94,179,228,0.45)]">
                                <span class="text-sm font-extrabold text-integrax-blue-light">2015</span>
                                <div class="absolute inset-0 animate-ping rounded-full border border-integrax-blue-light/20" style="animation-duration:3s"></div>
                            </div>
                        </div>

                        {{-- Right empty --}}
                        <div class="pl-14"></div>
                    </div>

                    {{-- Mobile layout --}}
                    <div class="flex items-start gap-6 lg:hidden w-full pl-4">
                        <div class="relative flex-shrink-0 flex flex-col items-center" style="margin-left: -1rem;">
                            <div class="ach-timeline-node relative flex h-12 w-12 items-center justify-center rounded-full border border-integrax-blue-light/50 bg-integrax-blue z-10">
                                <span class="text-[10px] font-extrabold text-integrax-blue-light">2015</span>
                            </div>
                        </div>
                        <div class="pt-1">
                            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-integrax-blue-light">Asset Management</span>
                            <h3 class="mt-2 text-lg font-extrabold tracking-tight text-white">ISO 55001:2014 Compliance</h3>
                            <p class="mt-3 text-sm leading-relaxed text-white/55">
                                Achieved ISO 55001:2014 compliance for TNB Genco's asset management system at port and coal bulk terminal operations.
                            </p>
                            <div class="mt-4 flex items-center gap-3">
                                <span class="h-px w-6 bg-integrax-blue-light/35"></span>
                                <span class="text-xs font-semibold text-integrax-blue-glow">TNB Genco · August 2015</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Timeline Item 2: 2019 --}}
                <div class="ach-timeline-item relative flex items-start gap-0">

                    {{-- Desktop layout: empty left, node centre, content on right --}}
                    <div class="hidden w-full lg:grid lg:grid-cols-[1fr_auto_1fr] lg:items-center lg:gap-0">

                        {{-- Left empty --}}
                        <div class="pr-14"></div>

                        {{-- Centre node --}}
                        <div class="flex flex-col items-center">
                            <div class="ach-timeline-node relative flex h-16 w-16 items-center justify-center rounded-full border-2 border-integrax-red/60 bg-integrax-blue shadow-[0_0_40px_-8px_rgba(196,30,58,0.35)]">
                                <span class="text-sm font-extrabold text-integrax-red/90">2019</span>
                                <div class="absolute inset-0 animate-ping rounded-full border border-integrax-red/20" style="animation-duration:3.5s; animation-delay:0.5s"></div>
                            </div>
                        </div>

                        {{-- Right content --}}
                        <div class="pl-14">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <span class="h-px w-8 bg-integrax-blue-light/40"></span>
                                <span class="text-[11px] font-bold uppercase tracking-[0.25em] text-integrax-blue-light">Maritime Security</span>
                            </div>
                            <h3 class="text-2xl font-extrabold tracking-tight text-white lg:text-[1.6rem]">Marine Facility Security Certification</h3>
                            <p class="mt-5 text-sm leading-relaxed text-white/55 max-w-sm">
                                LBTSB received formal certification for operating in compliance with an approved marine facility security plan for its bulk carrier ships, reinforcing maritime operational integrity.
                            </p>
                            <div class="mt-6 flex items-center gap-3">
                                <span class="h-px w-8 bg-integrax-blue-light/30"></span>
                                <span class="text-sm font-semibold text-integrax-blue-glow">LBTSB — Lekir Bulk Terminal Sungai Besi</span>
                            </div>
                        </div>
                    </div>

                    {{-- Mobile layout --}}
                    <div class="flex items-start gap-6 lg:hidden w-full pl-4">
                        <div class="relative flex-shrink-0 flex flex-col items-center" style="margin-left: -1rem;">
                            <div class="ach-timeline-node relative flex h-12 w-12 items-center justify-center rounded-full border border-integrax-red/50 bg-integrax-blue z-10">
                                <span class="text-[10px] font-extrabold text-integrax-red/90">2019</span>
                            </div>
                        </div>
                        <div class="pt-1">
                            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-integrax-blue-light">Maritime Security</span>
                            <h3 class="mt-2 text-lg font-extrabold tracking-tight text-white">Marine Facility Security Certification</h3>
                            <p class="mt-3 text-sm leading-relaxed text-white/55">
                                LBTSB certified for compliance with an approved marine facility security plan covering bulk carrier ship operations.
                            </p>
                            <div class="mt-4 flex items-center gap-3">
                                <span class="h-px w-6 bg-integrax-blue-light/35"></span>
                                <span class="text-xs font-semibold text-integrax-blue-glow">LBTSB · 2019</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="ach-flow-bridge--timeline-excellence pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ EXCELLENCE & GROWTH ═══════════════════════ --}}
<section class="section-tone-light relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--light absolute -right-28 top-0 h-[28rem] w-[28rem]"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute left-1/4 bottom-0 h-64 w-64 opacity-45"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/35 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        <div class="grid gap-14 lg:grid-cols-2 lg:gap-24">

            {{-- Left --}}
            <div class="reveal-up">
                <p class="section-eyebrow">Excellence & Growth</p>
                <h2 class="section-title">A Foundation Built on Proven Standards</h2>
                <p class="mt-8 text-lg leading-relaxed text-integrax-blue/70">
                    Our certifications are not simply credentials — they are evidence of the systematic discipline applied across every layer of our infrastructure and maritime operations. Each standard maintained reflects our accountability to TNB Genco, our clients, and the communities we serve.
                </p>
                <p class="mt-5 text-lg leading-relaxed text-integrax-blue/70">
                    As Integrax continues to grow within Malaysia's energy and infrastructure landscape, these internationally recognised benchmarks remain central to how we manage assets, protect facilities, and deliver long-term operational value.
                </p>

                <div class="mt-12 flex flex-wrap gap-4">
                    <a href="/#contact" class="btn-primary">
                        Get in Touch
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="/about" class="ach-btn-outline">
                        About Integrax
                    </a>
                </div>
            </div>

            {{-- Right: 3 principle cards --}}
            <div class="reveal-fade grid gap-5 sm:grid-cols-1">
                @foreach ([
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>',
                        'title' => 'Operational Excellence',
                        'text' => 'ISO 55001:2014 compliance ensures our asset management practices meet international benchmarks for buildings, plants, and critical infrastructure.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                        'title' => 'Maritime Security Integrity',
                        'text' => 'Our marine facility security certification reflects the structured safety frameworks governing all bulk carrier operations at LBTSB.',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>',
                        'title' => 'Long-term Infrastructure Value',
                        'text' => 'Sustained certification since 2015 demonstrates our long-term commitment to quality standards that protect asset value and stakeholder confidence.',
                    ],
                ] as $principle)
                    <div class="ach-principle-card relative overflow-hidden rounded-2xl border border-integrax-blue-light/18 bg-white/80 p-6 backdrop-blur-sm sm:p-7">
                        <div class="mb-4 flex items-center gap-4">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-integrax-blue-light/25 bg-integrax-blue-pale">
                                <svg class="h-5 w-5 text-integrax-blue-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">{!! $principle['icon'] !!}</svg>
                            </div>
                            <h4 class="font-bold tracking-tight text-integrax-blue">{{ $principle['title'] }}</h4>
                        </div>
                        <p class="text-sm leading-relaxed text-integrax-blue/60">{{ $principle['text'] }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════ BACK NAV / CTA ═══════════════════════ --}}
<section class="section-tone-dark relative overflow-hidden py-20 lg:py-28">
    <div class="grain-overlay opacity-20" aria-hidden="true"></div>
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute left-1/2 top-1/2 h-[20rem] w-[40rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-integrax-blue-light/8 blur-[100px]"></div>
    </div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
        <div class="reveal-up flex flex-col items-center gap-8 text-center">
            <p class="text-[11px] font-bold uppercase tracking-[0.3em] text-integrax-blue-light">Integrax Berhad</p>
            <h2 class="max-w-2xl text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                Explore More of the<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Integrax Corporate Ecosystem</span>
            </h2>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/about" class="btn-primary">
                    About Integrax
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/leadership" class="btn-ghost">Leadership Team</a>
            </div>
        </div>
    </div>
</section>

@include('partials.about-overlay')

@endsection

@extends('layouts.integrax')

@section('title', 'About — Integrax Berhad')

@section('content')

{{-- ═══════════════════════ NAVBAR ═══════════════════════ --}}
<header id="site-header" class="site-header fixed inset-x-0 top-0 z-50">
    <div class="site-header-glow pointer-events-none absolute inset-x-0 top-0 h-full" aria-hidden="true"></div>
    <div class="relative mx-auto flex max-w-[90rem] items-center justify-between px-8 py-6 lg:px-14 lg:py-7">
        <a href="/" class="site-header-logo group flex items-center gap-5">
            <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad logo" class="h-16 w-18 rounded-2xl object-contain transition-transform duration-500 group-hover:scale-105" />
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
            <a href="/#segments" class="btn-primary px-6 py-3 text-sm">
                Explore Solutions
            </a>
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

    <div id="mobile-menu" class="site-header-mobile hidden border-t px-8 py-8 backdrop-blur-2xl lg:hidden">
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
<section class="section-tone-dark relative flex min-h-screen items-end overflow-hidden">

    {{-- Ambient lighting orbs --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="hero-gradient-orb absolute -left-32 top-1/4 h-[26rem] w-[26rem] rounded-full bg-integrax-red/20 blur-[90px]"></div>
        <div class="hero-gradient-orb absolute right-0 top-1/3 h-80 w-80 rounded-full bg-integrax-blue-light/18 blur-[80px]"></div>
        <div class="hero-gradient-orb absolute bottom-1/4 left-1/2 h-64 w-64 rounded-full bg-integrax-blue-glow/14 blur-[70px]"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_0%_0%,rgba(61,143,201,0.12),transparent_55%)]"></div>
    </div>
    <div class="grain-overlay" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto w-full max-w-[90rem] px-8 pb-36 pt-44 lg:px-14 lg:pb-44 lg:pt-52">

        <div class="about-hero-item" style="animation-delay:0.15s">
            <p class="mb-8 flex flex-wrap items-center gap-4">
                <span class="h-px w-16 bg-integrax-blue-light"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.3em] text-integrax-blue-light">Integrax Berhad · Part of the TNB Group</span>
            </p>
        </div>

        <div class="about-hero-item max-w-5xl" style="animation-delay:0.3s">
            <h1 class="text-4xl font-extrabold leading-[1.04] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4.25rem]">
                Decades of Reliable<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Infrastructure</span><br>
                Service.
            </h1>
        </div>

        <div class="about-hero-item mt-10 max-w-2xl" style="animation-delay:0.45s">
            <p class="text-lg leading-relaxed text-white/70 md:text-xl">
                A wholly-owned subsidiary of Tenaga Nasional Berhad, Integrax Berhad manages critical port infrastructure and delivers trusted energy services across Peninsular Malaysia.
            </p>
        </div>

        {{-- Key stats --}}
        <div class="about-hero-item mt-14 flex flex-wrap gap-4" style="animation-delay:0.6s">
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">
                    RM<span class="stat-counter" data-value="650">0</span>M
                </p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Assets Managed</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">
                    RM<span class="stat-counter" data-value="300">0</span>M
                </p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Infrastructure Value</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">
                    <span class="stat-counter" data-value="165">0</span>K DWT
                </p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Port Capacity</p>
            </div>
        </div>

        <div class="about-hero-item mt-12 flex flex-wrap gap-5" style="animation-delay:0.75s">
            <a href="#infrastructure" class="btn-primary">
                Our Infrastructure
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="/#contact" class="btn-ghost">Get in Touch</a>
        </div>
    </div>

    <div class="section-flow-bridge about-flow-bridge--hero-heritage pointer-events-none absolute inset-x-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ CORPORATE HERITAGE ═══════════════════════ --}}
<section class="section-tone-light relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--light absolute -left-32 top-0 h-[28rem] w-[28rem]"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute right-1/4 top-1/3 h-60 w-60 opacity-50"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/35 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="grid items-center gap-16 lg:grid-cols-2 lg:gap-24">

            {{-- Left: narrative --}}
            <div class="reveal-up">
                <p class="section-eyebrow">Corporate Heritage</p>
                <h2 class="section-title">A Strategic Subsidiary of Tenaga Nasional Berhad</h2>
                <p class="mt-8 text-lg leading-relaxed text-integrax-blue/70">
                    In 2015, Integrax became a subsidiary of Tenaga Nasional Berhad (TNB) — Malaysia's national electricity utility. The establishment of TNB Power Generation Sdn Bhd (TNB Genco) prompted Integrax's strategic restructuring, bringing it under this new TNB subsidiary.
                </p>
                <p class="mt-5 text-lg leading-relaxed text-integrax-blue/70">
                    This pivotal move was driven by Integrax's strong alignment with the energy transition initiative and the significant potential for related business growth — positioning Integrax as an integral part of the TNB Genco ecosystem.
                </p>
                <ul class="mt-10 space-y-4">
                    @foreach ([
                        'Wholly-owned subsidiary of Tenaga Nasional Berhad',
                        'Strategic alignment with TNB Genco\'s energy transition mandate',
                        'Decades of operational experience as a trusted service provider',
                    ] as $point)
                        <li class="flex items-start gap-4 text-sm text-integrax-blue/75 md:text-base">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.6)]"></span>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Right: milestone card --}}
            <div class="reveal-fade">
                <div class="relative">
                    <div class="pointer-events-none absolute -inset-8 rounded-3xl bg-linear-to-br from-integrax-blue-light/8 via-transparent to-integrax-blue-pale-deep/30" aria-hidden="true"></div>

                    <div class="relative overflow-hidden rounded-3xl border border-integrax-blue-light/20 bg-white/70 p-10 shadow-[0_24px_64px_-12px_rgba(10,22,40,0.12)] backdrop-blur-sm lg:p-12">
                        <div class="mb-8 flex items-center gap-4">
                            <div class="about-heritage-marker flex h-12 w-12 items-center justify-center rounded-2xl">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5a17.92 17.92 0 01-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Strategic Milestone</p>
                                <p class="text-lg font-extrabold text-integrax-blue">2015</p>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold tracking-tight text-integrax-blue lg:text-2xl">TNB Subsidiary Integration</h3>
                        <p class="mt-4 text-sm leading-relaxed text-integrax-blue/65 md:text-base">
                            Integrax's restructuring under TNB Power Generation Sdn Bhd positioned the company at the heart of Malaysia's national energy strategy, enabling expanded capabilities and long-term infrastructure commitments aligned with the energy transition initiative.
                        </p>

                        <div class="mt-8 grid grid-cols-2 gap-4 border-t border-integrax-blue-light/15 pt-8">
                            <div>
                                <p class="text-2xl font-extrabold tracking-tight text-integrax-blue">RM<span class="stat-counter" data-value="650">0</span>M</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.15em] text-integrax-blue/55">Total Assets</p>
                            </div>
                            <div>
                                <p class="text-2xl font-extrabold tracking-tight text-integrax-blue">TNB</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.15em] text-integrax-blue/55">Parent Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-flow-bridge about-flow-bridge--heritage-port pointer-events-none absolute inset-x-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ PORT INFRASTRUCTURE ═══════════════════════ --}}
<section id="infrastructure" class="section-tone-white relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--light absolute -right-40 top-20 h-96 w-96 opacity-55"></div>
    <div class="section-ambient-glow section-ambient-glow--light absolute -left-24 bottom-10 h-72 w-72 opacity-45"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="reveal-up mx-auto max-w-3xl text-center">
            <p class="section-eyebrow">Port Infrastructure</p>
            <h2 class="section-title">Dedicated Facilities at Stesen Janakuasa Sultan Azlan Shah</h2>
            <p class="section-lead mx-auto">
                Through our wholly-owned subsidiary Lekir Bulk Terminal Sdn Bhd (LBTSB), Integrax owns dedicated port facilities purpose-built to serve the Sultan Azlan Shah Power Station in Manjung, Perak.
            </p>
        </div>

        {{-- Stats grid --}}
        <div class="mt-20 grid gap-8 sm:grid-cols-3 lg:gap-6">
            @foreach ([
                [
                    'display' => 'RM<span class="stat-counter" data-value="300">0</span>M',
                    'label' => 'Infrastructure Value',
                    'detail' => 'Net book value of port facilities as at December 2022',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>',
                ],
                [
                    'display' => '<span class="stat-counter" data-value="165">0</span>K DWT',
                    'label' => 'Port Capacity',
                    'detail' => 'Combined vessel unloading capacity across all berths',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>',
                ],
                [
                    'display' => '<span class="stat-counter" data-value="3">0</span> Berths',
                    'label' => 'Operational Berths',
                    'detail' => 'Two seaside and one landside berth at full operational readiness',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819"/>',
                ],
            ] as $stat)
                <div class="reveal-up group rounded-3xl border border-integrax-blue-light/15 bg-white p-10 text-center shadow-[0_4px_32px_-8px_rgba(10,22,40,0.08)] transition-shadow duration-500 hover:shadow-[0_8px_48px_-12px_rgba(10,22,40,0.14)]">
                    <div class="mx-auto mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-integrax-blue-pale">
                        <svg class="h-7 w-7 text-integrax-blue-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">{!! $stat['icon'] !!}</svg>
                    </div>
                    <p class="text-5xl font-extrabold tracking-tight text-integrax-blue">{!! $stat['display'] !!}</p>
                    <p class="mt-3 text-xs font-bold uppercase tracking-[0.15em] text-integrax-blue-light">{{ $stat['label'] }}</p>
                    <p class="mt-3 text-sm leading-relaxed text-integrax-blue/55">{{ $stat['detail'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Subsidiary breakdown --}}
        <div class="mt-20 grid gap-8 lg:grid-cols-2 lg:gap-10">
            <div class="reveal-up rounded-3xl border border-integrax-blue-light/15 bg-integrax-blue-pale/60 p-10">
                <div class="mb-6 flex items-start gap-5">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-integrax-blue-glow/20 bg-integrax-blue-glow/10">
                        <svg class="h-6 w-6 text-integrax-blue-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Wholly Owned Subsidiary</p>
                        <h3 class="mt-1 text-lg font-bold text-integrax-blue">Lekir Bulk Terminal Sdn Bhd</h3>
                        <p class="text-sm text-integrax-blue/55">(LBTSB)</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-integrax-blue/70 md:text-base">
                    LBTSB holds ownership of the dedicated port infrastructure facilities serving Stesen Janakuasa Sultan Azlan Shah (SJSAS), Manjung, Perak. As at December 2022, the net book value of these facilities stands at <strong class="font-semibold text-integrax-blue">RM300 million</strong>.
                </p>
            </div>

            <div class="reveal-up rounded-3xl border border-integrax-blue-light/15 bg-integrax-blue-pale/60 p-10">
                <div class="mb-6 flex items-start gap-5">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-integrax-blue-glow/20 bg-integrax-blue-glow/10">
                        <svg class="h-6 w-6 text-integrax-blue-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Associate Company</p>
                        <h3 class="mt-1 text-lg font-bold text-integrax-blue">Lumut Maritime Terminal Sdn Bhd</h3>
                        <p class="text-sm text-integrax-blue/55">(LMTSB)</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed text-integrax-blue/70 md:text-base">
                    LMTSB, an associate company of Integrax, serves as the designated port operator. Working in close coordination with LBTSB, LMTSB ensures seamless port operations supporting continuous power generation at SJSAS.
                </p>
            </div>
        </div>
    </div>

    <div class="section-flow-bridge about-flow-bridge--port-tech pointer-events-none absolute inset-x-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ TECHNICAL CAPABILITIES ═══════════════════════ --}}
<section class="section-tone-dark relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--dark absolute -left-24 top-0 h-80 w-80"></div>
    <div class="section-ambient-glow section-ambient-glow--dark absolute right-0 bottom-0 h-96 w-96 opacity-70"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/30 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="reveal-up max-w-3xl">
            <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-red">Technical Excellence</p>
            <h2 class="mt-5 text-4xl font-extrabold leading-[1.08] tracking-tight text-white md:text-5xl lg:text-[3.25rem]">
                Precision-Engineered<br>Coal Handling Systems
            </h2>
            <p class="mt-8 text-lg leading-relaxed text-white/65">
                Our port facilities feature modern, up-to-date equipment engineered for high-throughput efficiency — ensuring uninterrupted fuel supply to Stesen Janakuasa Sultan Azlan Shah.
            </p>
        </div>

        <div class="mt-20 grid gap-8 lg:grid-cols-3 lg:gap-6">

            {{-- Ship Unloaders --}}
            <div class="reveal-up about-glass-card rounded-3xl p-10">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-integrax-blue-light/30 bg-integrax-blue-light/10">
                        <svg class="h-7 w-7 text-integrax-blue-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"/>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Ship Unloaders</span>
                </div>
                <p class="text-5xl font-extrabold tracking-tight text-white"><span class="stat-counter" data-value="3">0</span></p>
                <p class="mt-2 text-sm font-semibold uppercase tracking-[0.15em] text-integrax-blue-light">Modern Units</p>
                <p class="mt-5 text-sm leading-relaxed text-white/60 md:text-base">
                    Three modern and up-to-date ship unloaders assure efficient coal unloading from ship to shore, maintaining continuous fuel supply to the power station.
                </p>
                <div class="mt-8 border-t border-white/10 pt-6">
                    <span class="text-2xl font-extrabold text-integrax-blue-light"><span class="stat-counter" data-value="162">0</span> MT</span>
                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/45">Capacity Per Unit</p>
                </div>
            </div>

            {{-- Conveyor System --}}
            <div class="reveal-up about-glass-card rounded-3xl p-10">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-integrax-blue-light/30 bg-integrax-blue-light/10">
                        <svg class="h-7 w-7 text-integrax-blue-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Jetty Conveyor Lines</span>
                </div>
                <p class="text-5xl font-extrabold tracking-tight text-white"><span class="stat-counter" data-value="3">0</span></p>
                <p class="mt-2 text-sm font-semibold uppercase tracking-[0.15em] text-integrax-blue-light">Conveyor Lines</p>
                <p class="mt-5 text-sm leading-relaxed text-white/60 md:text-base">
                    The jetty delivery system is equipped with three independent conveyor lines, transporting coal from quayside to the onshore receiving facilities.
                </p>
                <div class="mt-8 border-t border-white/10 pt-6">
                    <span class="text-2xl font-extrabold text-integrax-blue-light"><span class="stat-counter" data-value="3800">0</span> MT/hr</span>
                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/45">Capacity Per Line</p>
                </div>
            </div>

            {{-- Berths --}}
            <div class="reveal-up about-glass-card rounded-3xl p-10">
                <div class="mb-8 flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl border border-integrax-blue-light/30 bg-integrax-blue-light/10">
                        <svg class="h-7 w-7 text-integrax-blue-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Berth Configuration</span>
                </div>
                <p class="text-5xl font-extrabold tracking-tight text-white"><span class="stat-counter" data-value="3">0</span></p>
                <p class="mt-2 text-sm font-semibold uppercase tracking-[0.15em] text-integrax-blue-light">Total Berths</p>
                <p class="mt-5 text-sm leading-relaxed text-white/60 md:text-base">
                    Two seaside and one landside berth provide operational flexibility, accommodating vessels up to the largest bulk carrier class at the facility.
                </p>
                <div class="mt-8 border-t border-white/10 pt-6">
                    <span class="text-2xl font-extrabold text-integrax-blue-light"><span class="stat-counter" data-value="165">0</span>K DWT</span>
                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-white/45">Vessel Capacity</p>
                </div>
            </div>

        </div>
    </div>

    <div class="section-flow-bridge about-flow-bridge--tech-expansion pointer-events-none absolute inset-x-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ EXPANSION & GROWTH ═══════════════════════ --}}
<section class="section-tone-light relative -mt-px overflow-hidden py-28 lg:py-40">
    <div class="section-ambient-glow section-ambient-glow--light absolute right-0 top-0 h-96 w-96"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute left-1/4 bottom-0 h-64 w-64 opacity-50"></div>
    <div class="float-subtle pointer-events-none absolute left-1/3 top-1/4 h-2 w-2 rounded-full bg-integrax-blue-light/50 blur-[1px]"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/30 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="grid items-start gap-16 lg:grid-cols-2 lg:gap-24">

            {{-- Left: narrative --}}
            <div class="reveal-up">
                <p class="section-eyebrow">Growth &amp; Expansion</p>
                <h2 class="section-title">Expanding Marine &amp; Maritime Services</h2>
                <p class="mt-8 text-lg leading-relaxed text-integrax-blue/70">
                    Integrax is actively expanding its business footprint within the TNB Genco ecosystem. The latest initiative extends Marine and Maritime Services to <strong class="font-semibold text-integrax-blue">Stesen Janakuasa Tuanku Muhriz (SJTM)</strong> in Jimah, Negeri Sembilan — a significant addition to the Integrax operational portfolio.
                </p>
                <p class="mt-5 text-lg leading-relaxed text-integrax-blue/70">
                    By continually seeking opportunities for growth and innovation, Integrax is well-positioned to deliver value to its clients and contribute to the ongoing development of Malaysia's energy industry. With RM650 million in managed assets and decades of established experience, Integrax remains a trusted partner for the critical infrastructure that powers the nation.
                </p>
                <div class="mt-12 flex flex-wrap gap-5">
                    <a href="/#segments" class="btn-primary">
                        Our Business Segments
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="/#contact" class="relative inline-flex items-center gap-2.5 rounded-full border border-integrax-blue/20 bg-integrax-blue/5 px-9 py-4 text-sm font-semibold text-integrax-blue transition hover:bg-integrax-blue/10">
                        Contact Us
                    </a>
                </div>
            </div>

            {{-- Right: cards --}}
            <div class="reveal-fade space-y-5">

                {{-- SJTM card --}}
                <div class="about-expansion-card float-subtle rounded-3xl p-8">
                    <div class="flex items-start gap-5">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-integrax-blue-light/30 bg-integrax-blue-light/15">
                            <svg class="h-6 w-6 text-integrax-blue-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">New Service Area</p>
                            <h3 class="mt-1 text-lg font-bold text-integrax-blue">Stesen Janakuasa Tuanku Muhriz</h3>
                            <p class="mt-1 text-sm text-integrax-blue/60">Jimah, Negeri Sembilan</p>
                        </div>
                    </div>
                    <p class="mt-5 text-sm leading-relaxed text-integrax-blue/70">
                        Marine and Maritime Services engagement at SJTM extends Integrax's operational reach beyond its established Perak operations, deepening its role within the TNB Genco power generation network.
                    </p>
                </div>

                {{-- Asset total card --}}
                <div class="rounded-3xl border border-integrax-blue/10 bg-white/80 p-8 shadow-[0_8px_32px_-8px_rgba(10,22,40,0.08)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">Asset Portfolio</p>
                    <p class="mt-3 text-4xl font-extrabold tracking-tight text-integrax-blue">RM<span class="stat-counter" data-value="650">0</span>M</p>
                    <p class="mt-2 text-sm font-semibold uppercase tracking-[0.15em] text-integrax-blue/55">Total Assets Under Management</p>
                    <p class="mt-5 text-sm leading-relaxed text-integrax-blue/65">
                        With decades of experience as a trusted and efficient service provider, Integrax manages a substantial asset base — delivering reliable and efficient services that contribute to the growth of Malaysia's energy industry.
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════ FOOTER ═══════════════════════ --}}
<footer id="about-contact" class="section-tone-dark relative border-t border-white/10 py-20 lg:py-28">
    <div class="section-ambient-glow section-ambient-glow--dark absolute inset-x-0 top-0 mx-auto h-64 w-[80%] max-w-5xl"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute -right-20 bottom-0 h-72 w-72 opacity-40"></div>
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(94,179,228,0.08),transparent_60%)]"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="grid gap-16 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <a href="/" class="flex items-center gap-5">
                    <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad logo" class="h-16 w-18 rounded-2xl object-contain" />
                </a>
                <p class="mt-8 max-w-sm text-sm leading-relaxed text-white/55 md:text-base">
                    Powering sustainable infrastructure for Malaysia and beyond — marine services, critical infrastructure, and integrated energy solutions.
                </p>
            </div>

            <div class="grid gap-12 sm:grid-cols-2 lg:col-span-4 lg:col-start-8">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Company</p>
                    <ul class="mt-5 space-y-3 text-sm text-white/65">
                        <li><a href="/about" class="transition hover:text-white">About Integrax</a></li>
                        <li><a href="/#stats" class="transition hover:text-white">Track Record</a></li>
                        <li><a href="/#segments" class="transition hover:text-white">Business Segments</a></li>
                        <li><a href="/#journey" class="transition hover:text-white">Our Journey</a></li>
                        <li><a href="/#esg" class="transition hover:text-white">Sustainability</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Connect</p>
                    <ul class="mt-5 space-y-3 text-sm text-white/65">
                        <li><a href="mailto:info@integrax.com.my" class="transition hover:text-white">info@integrax.com.my</a></li>
                        <li>Kuala Lumpur, Malaysia</li>
                    </ul>
                    <div class="mt-8 flex gap-4">
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/12 text-white/65 transition hover:border-integrax-blue-light hover:text-white" aria-label="LinkedIn">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 114.127 0 2.062 2.062 0 01-2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/12 text-white/65 transition hover:border-integrax-blue-light hover:text-white" aria-label="Facebook">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/12 text-white/65 transition hover:border-integrax-blue-light hover:text-white" aria-label="Instagram">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="mailto:info@integrax.com.my" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/12 text-white/65 transition hover:border-integrax-blue-light hover:text-white" aria-label="Email">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-10 sm:flex-row">
            <p class="text-xs text-white/38">&copy; {{ date('Y') }} Integrax Berhad. All rights reserved.</p>
            <div class="flex gap-8 text-xs text-white/38">
                <a href="#" class="transition hover:text-white/60">Privacy Policy</a>
                <a href="#" class="transition hover:text-white/60">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

@include('partials.about-overlay')

@endsection

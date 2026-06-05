@extends('layouts.integrax')

@section('title', 'Integrax Berhad')

@php
    $heroRotatingPhrases = [
        'Innovating Sustainable Energy Solutions',
        'Redefining Growth',
        'Inspiring Journey',
        'Leading By Example',
        'Realising Good Governance',
        'Transforming The Landscape',
        'Delivering Excellence Through Diversification',
        'Creating Meaningful Impact',
    ];
    $heroLineTwo = ['For', 'Malaysia', '&', 'Beyond'];
    $segments = [
        [
            'title' => 'Marine & Maritime',
            'desc' => 'Offshore support, vessel operations, and maritime logistics engineered for the most demanding waters.',
            'image' => asset('media/images/INTEGREX_MARINE.jpg'),
            'tag' => 'Offshore & Maritime',
        ],
        [
            'title' => 'Coal Handling Services',
            'desc' => 'Integrated coal handling, storage, and logistics solutions delivering reliable supply chain performance.',
            'image' => asset('media/images/segment-infrastructure.jpg'),
            'tag' => 'Energy Logistics',
        ],
        [
            'title' => 'Future Business',
            'desc' => 'Pioneering new ventures in renewables, clean energy transitions, and next-generation infrastructure.',
            'image' => asset('media/images/segment-energy.jpg'),
            'tag' => 'Innovation & Growth',
            'split_reveal' => true,
        ],
    ];
@endphp

@section('content')
    {{-- Navbar --}}
    <header id="site-header" class="site-header fixed inset-x-0 top-0 z-50">
        <div class="site-header-glow pointer-events-none absolute inset-x-0 top-0 h-full" aria-hidden="true"></div>
        <div class="relative mx-auto flex max-w-[90rem] items-center justify-between px-4 py-5 sm:px-6 sm:py-6 lg:px-14 lg:py-7">
            <a href="#" class="site-header-logo group flex items-center gap-5">
                <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad logo" class="h-16 w-18 rounded-2xl object-contain transition-transform duration-500 group-hover:scale-105" fetchpriority="high" decoding="async" />
            </a>

            <nav class="hidden items-center gap-12 lg:flex" aria-label="Primary">
                <button type="button" class="about-trigger js-about-trigger">About</button>
                <a href="#stats" class="nav-link">Performance</a>
                <a href="#segments" class="nav-link">Business</a>
                <a href="#journey" class="nav-link">Our Journey</a>
                <a href="#esg" class="nav-link">Sustainability</a>
                <a href="#network" class="nav-link">Network</a>
                <a href="#contact" class="nav-link">Contact</a>
            </nav>

            <div class="hidden items-center gap-5 lg:flex">
                <a href="#contact" class="btn-nav-ghost">Investor Relations</a>
                <a href="#segments" class="btn-primary px-6 py-3 text-sm">
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

        <div id="mobile-menu" class="site-header-mobile hidden border-t px-5 py-6 sm:px-8 sm:py-8 backdrop-blur-2xl lg:hidden">
            <nav class="flex flex-col gap-5">
                <button type="button" class="about-trigger js-about-trigger mobile-nav-link w-full text-left">About</button>
                <a href="#stats" class="mobile-nav-link">Performance</a>
                <a href="#segments" class="mobile-nav-link">Business</a>
                <a href="#journey" class="mobile-nav-link">Our Journey</a>
                <a href="#esg" class="mobile-nav-link">Sustainability</a>
                <a href="#network" class="mobile-nav-link">Network</a>
                <a href="#contact" class="mobile-nav-link">Contact</a>
            </nav>
        </div>
    </header>

    {{-- Hero --}}
    <section id="hero" class="section-tone-dark relative flex min-h-screen items-end overflow-hidden">
        <div class="hero-media absolute inset-0 scale-105 will-change-transform">
            <video
                class="h-full w-full object-cover"
                autoplay
                muted
                loop
                playsinline
                poster="{{ asset('media/images/hero-poster.jpg') }}"
            >
                <source src="{{ asset('media/videos/home_background.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-linear-to-r from-integrax-blue via-integrax-blue/75 to-integrax-blue/40"></div>
            <div class="absolute inset-0 bg-linear-to-t from-integrax-blue via-integrax-blue/30 to-transparent"></div>
            <div class="grain-overlay"></div>
        </div>

        {{-- Animated lighting --}}
        <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
            <div class="hero-gradient-orb absolute -left-40 top-1/4 h-[28rem] w-[28rem] rounded-full bg-integrax-red/25 blur-[100px]"></div>
            <div class="hero-gradient-orb absolute right-0 top-1/3 h-96 w-96 rounded-full bg-integrax-blue-light/20 blur-[90px]"></div>
            <div class="hero-gradient-orb absolute bottom-0 left-1/3 h-80 w-80 rounded-full bg-integrax-blue-glow/15 blur-[80px]"></div>
            <div class="hero-gradient-sweep absolute inset-0 bg-linear-to-br from-integrax-red/10 via-transparent to-integrax-blue-light/10 opacity-40"></div>
            <div id="hero-particles" class="absolute inset-0"></div>
        </div>

        <div class="hero-content relative z-10 mx-auto w-full max-w-[90rem] px-4 pb-20 pt-28 sm:px-6 sm:pb-28 sm:pt-32 lg:px-14 lg:pb-40 lg:pt-44">
            <p class="hero-eyebrow mb-8 flex flex-wrap items-center gap-4">
                <span class="h-px w-16 bg-integrax-blue-light"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.3em] text-integrax-blue-light">Energy · Maritime · Infrastructure</span>
            </p>

            <h1 class="max-w-6xl [perspective:1200px]">
                <div class="hero-rotator" aria-live="polite" aria-atomic="true">
                    @foreach ($heroRotatingPhrases as $index => $phrase)
                        <p class="hero-rotator-phrase{{ $index === 0 ? ' is-active' : '' }}">{{ $phrase }}</p>
                    @endforeach
                </div>

                <span class="mt-3 block overflow-hidden">
                    <span class="hero-line-accent mb-4 block h-px w-24 origin-left bg-linear-to-r from-integrax-red to-integrax-blue-light"></span>
                    <span class="block text-3xl font-extrabold leading-[1.02] tracking-tight sm:text-4xl md:text-5xl lg:text-[3.5rem]">
                        @foreach ($heroLineTwo as $word)
                            <span class="hero-word inline-block bg-linear-to-r from-white via-integrax-blue-light to-white/90 bg-clip-text pr-[0.28em] text-transparent">{{ $word }}</span>
                        @endforeach
                    </span>
                </span>
            </h1>

            <p class="hero-sub mt-6 max-w-2xl text-lg leading-relaxed text-white/72 sm:mt-10 md:text-xl md:leading-relaxed">
                A diversified energy and infrastructure group delivering marine excellence, critical assets, and future-ready solutions across ASEAN and international markets.
            </p>

            <div class="hero-cta mt-8 flex flex-wrap gap-4 sm:mt-12 sm:gap-5">
                <a href="#segments" class="btn-primary">
                    Our Capabilities
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#esg" class="btn-ghost">
                    Sustainability Commitment
                </a>
            </div>
        </div>

        <div class="section-flow-bridge section-flow-bridge--hero-stats" aria-hidden="true"></div>

        <a href="#stats" class="scroll-indicator absolute bottom-10 left-1/2 z-10 flex -translate-x-1/2 flex-col items-center gap-3 text-white/45" aria-label="Scroll to track record">
            <span class="text-[10px] font-semibold uppercase tracking-[0.35em]">Discover</span>
            <span class="flex h-14 w-8 items-start justify-center rounded-full border border-white/25 p-2.5 backdrop-blur-sm">
                <span class="scroll-dot block h-2 w-1 rounded-full bg-integrax-blue-light"></span>
            </span>
        </a>
    </section>

    {{-- Track Record / Operational Excellence --}}
    <section id="stats" class="stats-section section-tone-light relative overflow-hidden py-28 lg:py-40">
        <div class="stats-section-accent pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/45 to-transparent" aria-hidden="true"></div>
        <div class="section-ambient-glow section-ambient-glow--light absolute -left-32 top-0 h-[30rem] w-[30rem]"></div>
        <div class="section-ambient-glow section-ambient-glow--light absolute -right-24 bottom-0 h-80 w-80 opacity-70"></div>
        <div class="section-ambient-glow section-ambient-glow--red absolute right-1/3 top-1/4 h-64 w-64 opacity-60"></div>
        <div class="float-subtle pointer-events-none absolute right-1/4 top-1/3 h-2 w-2 rounded-full bg-integrax-blue-light/50 blur-[1px]"></div>

        <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
            <div id="stats-header" class="mx-auto max-w-2xl text-center">
                <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-red">Track Record</p>
                <h2 class="mt-5 text-4xl font-extrabold tracking-tight text-integrax-blue md:text-5xl lg:text-[3.25rem]">
                    Built on operational excellence
                </h2>
            </div>

            <div id="stats-grid" class="mt-12 grid gap-6 sm:mt-20 sm:grid-cols-2 sm:gap-8 lg:grid-cols-4 lg:gap-6">
                @foreach ([
                    [
                        'display' => '2015',
                        'label'   => 'Subsidiary of TNB',
                        'detail'  => 'Strategic alignment under TNB Genco',
                    ],
                    [
                        'display' => '<span>RM</span><span class="stat-counter" data-value="650">0</span><span>M</span>',
                        'label'   => 'Managed Assets',
                        'detail'  => 'Strategic infrastructure asset portfolio',
                    ],
                    [
                        'display' => '<span class="stat-counter" data-value="165">0</span>K DWT',
                        'label'   => 'Port Handling Capacity',
                        'detail'  => 'Dedicated energy logistics infrastructure',
                    ],
                    [
                        'display' => '<span class="stat-counter" data-value="3">0</span> Lines',
                        'label'   => 'Coal Transfer System',
                        'detail'  => '3,800 MT/hour operational capability',
                    ],
                ] as $stat)
                    <div class="stat-item group rounded-2xl p-6 text-center transition-colors duration-500 sm:p-10">
                        <p class="text-5xl font-extrabold tracking-tight text-integrax-blue md:text-6xl">
                            <span class="block text-center">{!! $stat['display'] !!}</span>
                        </p>
                        <p class="mt-4 text-xs font-bold uppercase tracking-[0.15em] text-integrax-blue-light">{{ $stat['label'] }}</p>
                        <p class="stat-detail mt-3 text-sm leading-relaxed text-integrax-blue/55">{{ $stat['detail'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section-flow-bridge section-flow-bridge--stats-segments" aria-hidden="true"></div>
    </section>

    {{-- Business Segments --}}
    <section id="segments" class="section-tone-white relative -mt-px overflow-hidden py-28 lg:py-40">
        <div class="section-ambient-glow section-ambient-glow--light absolute -right-40 top-20 h-96 w-96 opacity-50"></div>
        <div class="section-ambient-glow section-ambient-glow--light absolute -left-24 bottom-10 h-72 w-72 opacity-40"></div>

        <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
            <div class="reveal-up max-w-3xl">
                <p class="section-eyebrow">Our Business</p>
                <h2 class="section-title">Integrated capabilities across the value chain</h2>
                <p class="section-lead">
                    From offshore marine operations to national infrastructure and clean energy transitions — we engineer resilience at scale.
                </p>
            </div>

            <div id="segments-grid" class="mt-20 grid gap-10 lg:grid-cols-3 lg:gap-8">
                @foreach ($segments as $segment)
                    <article class="segment-card group cursor-pointer" @if ($segment['split_reveal'] ?? false) data-split-reveal="true" @endif>
                        @if ($segment['split_reveal'] ?? false)
                            <div class="segment-explore-hint" aria-hidden="true">
                                <svg class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                                Expand
                            </div>
                        @endif
                        <div class="segment-card-inner absolute inset-0">
                            <img
                                src="{{ $segment['image'] }}"
                                alt="{{ $segment['title'] }}"
                                class="segment-image absolute inset-0 h-full w-full object-cover will-change-transform"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-linear-to-t from-integrax-blue via-integrax-blue/75 to-integrax-blue/20"></div>
                            <div class="absolute inset-0 bg-linear-to-br from-integrax-red/10 via-transparent to-integrax-blue-light/15 opacity-0 transition-opacity duration-700 group-hover:opacity-100"></div>
                        </div>
                        <div class="relative z-10 flex min-h-[24rem] flex-col justify-end p-6 sm:min-h-[32rem] sm:p-9 lg:p-11">
                            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-integrax-blue-light">{{ $segment['tag'] }}</span>
                            <h3 class="mt-3 text-2xl font-bold tracking-tight text-white lg:text-3xl">{{ $segment['title'] }}</h3>
                            <p class="mt-4 max-w-sm text-sm leading-relaxed text-white/65 md:text-base">{{ $segment['desc'] }}</p>
                            <span class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-integrax-blue-light transition-all duration-500 group-hover:gap-4">
                                @if ($segment['split_reveal'] ?? false) Explore Pathways @else Discover more @endif
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </span>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="section-flow-bridge section-flow-bridge--segments-journey" aria-hidden="true"></div>
    </section>

    @include('partials.journey-timeline')

    {{-- ESG --}}
    <section id="esg" class="section-tone-light relative overflow-hidden py-28 lg:py-40">
        <div class="section-ambient-glow section-ambient-glow--light absolute right-0 top-1/3 h-80 w-80"></div>
        <div class="section-ambient-glow section-ambient-glow--red absolute left-0 bottom-0 h-64 w-64 opacity-50"></div>
        <div class="pointer-events-none absolute left-1/2 top-0 h-px w-full max-w-5xl -translate-x-1/2 bg-linear-to-r from-transparent via-integrax-blue-light/35 to-transparent" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24">
                <div class="reveal-up">
                    <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-red">ESG & Sustainability</p>
                    <h2 class="mt-5 text-4xl font-extrabold leading-[1.08] tracking-tight text-integrax-blue md:text-5xl lg:text-[3.25rem]">
                        Future-ready infrastructure with purpose
                    </h2>
                    <p class="mt-8 text-lg leading-relaxed text-integrax-blue/70 md:text-xl">
                        We align capital deployment with environmental stewardship, robust governance, and community impact — enabling Malaysia's energy transition while meeting international investor expectations.
                    </p>
                    <ul class="mt-10 space-y-5">
                        @foreach (['Net-zero pathway integration across operations', 'Marine environmental compliance & monitoring', 'Transparent governance & stakeholder engagement'] as $item)
                            <li class="flex items-start gap-4 text-sm text-integrax-blue/75 md:text-base">
                                <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.6)]"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="reveal-fade relative">
                    <div class="esg-timeline relative pl-10">
                        <div class="esg-line absolute left-4 top-0 h-full w-px origin-top bg-linear-to-b from-integrax-blue-light via-integrax-red/80 to-integrax-blue-light"></div>

                        @foreach ([
                            ['year' => '2020', 'title' => 'ESG Framework', 'text' => 'Established integrated sustainability reporting aligned with global standards.'],
                            ['year' => '2022', 'title' => 'Renewables Expansion', 'text' => 'Accelerated clean energy portfolio and efficiency programmes.'],
                            ['year' => '2024', 'title' => 'Carbon Roadmap', 'text' => 'Published decarbonisation targets across marine and energy assets.'],
                            ['year' => '2026', 'title' => 'Sustainable Growth', 'text' => 'Scaling green infrastructure partnerships across ASEAN.'],
                        ] as $milestone)
                            <div class="esg-milestone relative mb-12 last:mb-0">
                                <span class="absolute -left-6 flex h-7 w-7 items-center justify-center rounded-full border border-integrax-blue-light/45 bg-white shadow-[0_0_20px_rgba(94,179,228,0.2)]">
                                    <span class="esg-dot h-2 w-2 rounded-full bg-integrax-blue-light"></span>
                                </span>
                                <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-glow">{{ $milestone['year'] }}</span>
                                <h3 class="mt-2 text-xl font-bold text-integrax-blue">{{ $milestone['title'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-integrax-blue/60 md:text-base">{{ $milestone['text'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.regional-network')

    {{-- Footer --}}
    <footer id="contact" class="section-tone-dark relative border-t border-white/10 py-20 lg:py-28">
        <div class="section-ambient-glow section-ambient-glow--dark absolute inset-x-0 top-0 mx-auto h-64 w-[80%] max-w-5xl"></div>
        <div class="section-ambient-glow section-ambient-glow--red absolute -right-20 bottom-0 h-72 w-72 opacity-40"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(94,179,228,0.08),transparent_60%)]"></div>

        <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
            <div class="grid gap-10 lg:gap-16 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <a href="#" class="flex items-center gap-5">
                        <img src="{{ asset('media/images/logo.png') }}" alt="Integrax Berhad logo" class="h-16 w-18 rounded-2xl object-contain" loading="lazy" decoding="async" />
                    </a>
                    <p class="mt-8 max-w-sm text-sm leading-relaxed text-white/55 md:text-base">
                        Powering sustainable infrastructure for Malaysia and beyond — marine services, critical infrastructure, and integrated energy solutions.
                    </p>
                </div>

                <div class="grid gap-12 sm:grid-cols-2 lg:col-span-4 lg:col-start-8">
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-[0.2em] text-integrax-blue-light">Company</p>
                        <ul class="mt-5 space-y-3 text-sm text-white/65">
                            <li><a href="#stats" class="transition hover:text-white">Track Record</a></li>
                            <li><a href="#segments" class="transition hover:text-white">Business Segments</a></li>
                            <li><a href="#journey" class="transition hover:text-white">Our Journey</a></li>
                            <li><a href="#esg" class="transition hover:text-white">Sustainability</a></li>
                            <li><a href="#" class="transition hover:text-white">Careers</a></li>
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

    {{-- Future Business Split Reveal --}}
    <div id="future-split-overlay" class="future-split-overlay" role="dialog" aria-modal="true" aria-label="Future Business" aria-hidden="true">
        <div class="future-split-backdrop"></div>

        <div class="future-split-wrap">
            <button type="button" class="future-split-close" aria-label="Close">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            {{-- Left Panel: Clean Energy --}}
            <div class="future-split-panel future-split-panel--left">
                <div class="fsr-glow fsr-glow--tl" aria-hidden="true"></div>
                <div class="fsr-glow fsr-glow--br" aria-hidden="true"></div>
                <div class="relative z-10 flex h-full flex-col">
                    <p class="fsr-content text-[10px] font-bold uppercase tracking-[0.24em] text-integrax-blue-glow">Energy Innovation</p>
                    <h3 class="fsr-content mt-3 text-[1.6rem] font-extrabold leading-tight tracking-tight text-white">Clean Energy<br>Transition</h3>
                    <div class="fsr-content mt-4 h-px w-10 bg-integrax-blue-light/40"></div>
                    <p class="fsr-content mt-5 text-sm leading-relaxed text-white/60 md:text-base">
                        Positioning Integrax at the forefront of Malaysia's decarbonisation journey through strategic investments in clean fuels and renewable integration.
                    </p>
                    <ul class="mt-7 flex-1 space-y-3.5">
                        @foreach (['Green Hydrogen', 'Biomass Co-Firing', 'Carbon Capture (CCUS)', 'Solar Integration'] as $item)
                            <li class="fsr-content flex items-center gap-3 text-sm text-white/68">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-blue-light shadow-[0_0_8px_rgba(94,179,228,0.65)]"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-8 border-t border-white/10 pt-6">
                        <a href="#esg" class="fsr-content fsr-cta fsr-cta--blue group/cta">
                            Explore Energy Pathways
                            <svg class="h-4 w-4 transition-transform duration-300 group-hover/cta:translate-x-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Connector --}}
            <div class="future-split-connector" aria-hidden="true">
                <div class="fsr-connector-line"></div>
                <div class="fsr-connector-node"></div>
                <div class="fsr-connector-line"></div>
            </div>

            {{-- Right Panel: Infrastructure --}}
            <div class="future-split-panel future-split-panel--right">
                <div class="fsr-glow fsr-glow--tr-red" aria-hidden="true"></div>
                <div class="fsr-glow fsr-glow--bl-red" aria-hidden="true"></div>
                <div class="relative z-10 flex h-full flex-col">
                    <p class="fsr-content text-[10px] font-bold uppercase tracking-[0.24em] text-integrax-red">Strategic Infrastructure</p>
                    <h3 class="fsr-content mt-3 text-[1.6rem] font-extrabold leading-tight tracking-tight text-white">Next-Gen<br>Infrastructure</h3>
                    <div class="fsr-content mt-4 h-px w-10 bg-integrax-red/40"></div>
                    <p class="fsr-content mt-5 text-sm leading-relaxed text-white/60 md:text-base">
                        Expanding terminal capabilities and logistics networks to serve evolving regional energy demands and new fuel distribution pathways across ASEAN.
                    </p>
                    <ul class="mt-7 flex-1 space-y-3.5">
                        @foreach (['Regasification Terminals (RGTs)', 'LNG Logistics & Storage', 'Port Digitalisation', 'ASEAN Partnerships'] as $item)
                            <li class="fsr-content flex items-center gap-3 text-sm text-white/68">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.65)]"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-8 border-t border-white/10 pt-6">
                        <a href="#journey" class="fsr-content fsr-cta fsr-cta--red group/cta">
                            Discover Growth Opportunities
                            <svg class="h-4 w-4 transition-transform duration-300 group-hover/cta:translate-x-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
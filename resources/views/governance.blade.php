@extends('layouts.integrax')

@section('title', 'Governance — Integrax Berhad')

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
<section class="gov-hero-section section-tone-dark relative flex min-h-screen items-end overflow-hidden">

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="gov-orb absolute -left-24 top-1/3 h-[26rem] w-[26rem] rounded-full bg-integrax-blue-glow/14 blur-[110px]"></div>
        <div class="gov-orb absolute right-0 top-1/4 h-[22rem] w-[22rem] rounded-full bg-integrax-red/16 blur-[90px]"></div>
        <div class="gov-orb absolute bottom-1/4 right-1/3 h-72 w-72 rounded-full bg-integrax-blue-light/10 blur-[80px]"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_65%_50%_at_100%_0%,rgba(61,143,201,0.08),transparent_52%)]"></div>
    </div>
    <div class="grain-overlay" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto w-full max-w-[90rem] px-4 pb-20 pt-28 sm:px-6 sm:pb-28 sm:pt-36 lg:px-14 lg:pb-44 lg:pt-52">

        <div class="gov-hero-item" style="animation-delay:0.1s">
            <p class="mb-8 flex flex-wrap items-center gap-4">
                <span class="h-px w-16 bg-integrax-blue-light"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.3em] text-integrax-blue-light">Integrax Berhad · Corporate Governance</span>
            </p>
        </div>

        <div class="gov-hero-item max-w-5xl" style="animation-delay:0.25s">
            <h1 class="text-3xl font-extrabold leading-[1.04] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4.25rem]">
                Good Corporate<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Governance</span><br>
                <span class="text-white/70">Delivering Sustainable Value</span>
            </h1>
        </div>

        <div class="gov-hero-item mt-8 max-w-2xl" style="animation-delay:0.4s">
            <p class="text-base leading-relaxed text-white/60 sm:text-lg">
                Integrax recognizes the significance of upholding the principles of good corporate governance to sustainably deliver value to all stakeholders.
            </p>
        </div>

        <div class="gov-hero-item mt-10 flex flex-wrap gap-3" style="animation-delay:0.55s">
            <span class="about-stat-chip inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold text-white/80">
                <span class="h-1.5 w-1.5 rounded-full bg-integrax-blue-light"></span>
                5 Core Principles
            </span>
            <span class="about-stat-chip inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold text-white/80">
                <span class="h-1.5 w-1.5 rounded-full bg-integrax-red"></span>
                7 Active Policies
            </span>
            <span class="about-stat-chip inline-flex items-center gap-2 rounded-full px-4 py-2 text-xs font-semibold text-white/80">
                <span class="h-1.5 w-1.5 rounded-full bg-integrax-blue-glow"></span>
                Stakeholder Value
            </span>
        </div>

    </div>

    <div class="pointer-events-none absolute inset-x-0 overflow-hidden gov-flow-bridge--hero-hub" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ PRINCIPLES HUB ═══════════════════════ --}}
<section class="gov-hub-section section-tone-dark relative overflow-hidden py-24 lg:py-36">

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute left-1/2 top-1/2 h-[36rem] w-[36rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-integrax-blue-glow/7 blur-[130px]"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        <div class="mb-16 max-w-2xl lg:mb-20">
            <p class="section-eyebrow mb-4">Core Principles</p>
            <h2 class="reveal-up text-3xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-4xl lg:text-[2.75rem]">
                Realization of<br>Good Governance
            </h2>
            <p class="reveal-up mt-5 text-base leading-relaxed text-white/55 sm:text-lg">
                Five principles that define how Integrax operates, makes decisions, and creates long-term value.
            </p>
        </div>

        {{-- ── Desktop: interactive SVG hub (lg+) ──────────────────── --}}
        <div class="hidden lg:grid lg:grid-cols-[1fr_400px] lg:items-start lg:gap-16 xl:grid-cols-[1fr_440px]">

            {{-- Hub canvas --}}
            <div class="flex items-center justify-center">
                <div id="gov-hub-canvas" class="gov-hub-canvas relative" style="width:520px;height:520px;">

                    <svg id="gov-hub-svg" class="pointer-events-none absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <defs>
                            <filter id="gov-line-glow" x="-200%" y="-200%" width="500%" height="500%">
                                <feGaussianBlur stdDeviation="2.2" result="blur"/>
                                <feMerge>
                                    <feMergeNode in="blur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                    </svg>

                    {{-- Central hub --}}
                    <div id="gov-hub-center" class="gov-hub-center absolute left-1/2 top-1/2 z-10">
                        <span class="gov-hub-ring gov-hub-ring--outer" aria-hidden="true"></span>
                        <span class="gov-hub-ring gov-hub-ring--mid" aria-hidden="true"></span>
                        <span class="gov-hub-core">
                            <span class="gov-hub-brand" aria-hidden="true">INTEGRAX</span>
                            <span class="gov-hub-label">GCG</span>
                            <span class="gov-hub-sublabel">Framework</span>
                        </span>
                    </div>

                    {{-- Principle nodes — pentagon layout (transform: translate(-50%,-50%) applied via CSS) --}}

                    {{-- Node 0: Transparency — top --}}
                    <button class="gov-principle-node" data-idx="0" style="left:50%;top:10%;" aria-label="Transparency">
                        <span class="gov-node-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
                            </svg>
                        </span>
                        <span class="gov-node-label">Transparency</span>
                    </button>

                    {{-- Node 1: Accountability — upper-right --}}
                    <button class="gov-principle-node" data-idx="1" style="left:88%;top:38%;" aria-label="Accountability">
                        <span class="gov-node-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                        </span>
                        <span class="gov-node-label">Accountability</span>
                    </button>

                    {{-- Node 2: Responsibility — lower-right --}}
                    <button class="gov-principle-node" data-idx="2" style="left:74%;top:82%;" aria-label="Responsibility">
                        <span class="gov-node-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </span>
                        <span class="gov-node-label">Responsibility</span>
                    </button>

                    {{-- Node 3: Fairness — lower-left --}}
                    <button class="gov-principle-node" data-idx="3" style="left:26%;top:82%;" aria-label="Fairness">
                        <span class="gov-node-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                            </svg>
                        </span>
                        <span class="gov-node-label">Fairness</span>
                    </button>

                    {{-- Node 4: Independence — upper-left --}}
                    <button class="gov-principle-node" data-idx="4" style="left:12%;top:38%;" aria-label="Independence">
                        <span class="gov-node-icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                            </svg>
                        </span>
                        <span class="gov-node-label">Independence</span>
                    </button>

                </div>
            </div>

            {{-- Detail panel --}}
            <div id="gov-principle-panel" class="gov-principle-panel sticky top-28" aria-live="polite">

                {{-- Idle state --}}
                <div id="gov-panel-idle" class="gov-panel-idle">
                    <div class="gov-panel-idle-icon" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <p class="mt-5 text-sm font-semibold tracking-wide text-white/40">Select a principle</p>
                    <p class="mt-2 max-w-[22ch] text-xs leading-relaxed text-white/25">Click any node in the hub to explore Integrax's governance principles in detail.</p>
                    <div class="mt-8 flex gap-2">
                        @foreach(['T','A','R','F','I'] as $l)
                        <span class="gov-panel-idle-pip" aria-hidden="true">{{ $l }}</span>
                        @endforeach
                    </div>
                </div>

                {{-- Active principle content --}}
                <div id="gov-panel-content" class="gov-panel-content" style="display:none;">
                    <div class="gov-panel-eyebrow">Core Principle</div>
                    <h3 id="gov-panel-title" class="gov-panel-title"></h3>
                    <p id="gov-panel-desc" class="gov-panel-desc"></p>
                    <ul id="gov-panel-points" class="gov-panel-points"></ul>
                    <div class="gov-panel-accent" aria-hidden="true"></div>
                </div>

            </div>
        </div>

        {{-- ── Mobile: principle accordion (< lg) ─────────────────── --}}
        <div class="grid gap-3 lg:hidden" id="gov-mobile-principles">
            @php
            $mobilePrinciples = [
                [
                    'name' => 'Transparency',
                    'icon' => '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>',
                    'desc' => 'Clear and timely disclosure of material information to all stakeholders, enabling informed decision-making and building enduring trust in Integrax\'s operations.',
                ],
                [
                    'name' => 'Accountability',
                    'icon' => '<polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>',
                    'desc' => 'The Board and management are accountable for their decisions and actions to all shareholders and relevant stakeholders through transparent governance practices.',
                ],
                [
                    'name' => 'Responsibility',
                    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                    'desc' => 'Responsible conduct across all business activities, aligned with ethical standards, applicable regulatory frameworks, and the expectations of all stakeholders.',
                ],
                [
                    'name' => 'Fairness',
                    'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>',
                    'desc' => 'Equitable and fair treatment of all shareholders and stakeholders, including minority shareholders, employees, and community partners in every business interaction.',
                ],
                [
                    'name' => 'Independence',
                    'icon' => '<circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>',
                    'desc' => 'Objective and independent judgment in all Board deliberations and management decisions, free from undue influence, conflicts of interest, or external pressure.',
                ],
            ];
            @endphp

            @foreach($mobilePrinciples as $i => $p)
            <div class="gov-accordion-item">
                <button class="gov-accordion-btn w-full text-left" aria-expanded="false">
                    <span class="gov-accordion-icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">{!! $p['icon'] !!}</svg>
                    </span>
                    <span class="gov-accordion-name">{{ $p['name'] }}</span>
                    <svg class="gov-accordion-chevron ml-auto flex-shrink-0 transition-transform duration-300" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="gov-accordion-body" hidden>
                    <p class="gov-accordion-desc">{{ $p['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div class="pointer-events-none absolute inset-x-0 overflow-hidden gov-flow-bridge--hub-policies" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ POLICY EXPLORER ═══════════════════════ --}}
<section class="gov-policies-section section-tone-light relative overflow-hidden py-24 lg:py-36">

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -right-32 top-1/4 h-[22rem] w-[22rem] rounded-full bg-integrax-blue-pale-deep/55 blur-[110px]"></div>
        <div class="absolute -left-20 bottom-1/3 h-72 w-72 rounded-full bg-integrax-blue-pale-mid/50 blur-[90px]"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        <div class="mb-14 max-w-2xl lg:mb-16">
            <p class="section-eyebrow mb-4">Policy Framework</p>
            <h2 class="reveal-up text-3xl font-extrabold leading-[1.08] tracking-tight text-integrax-blue sm:text-4xl lg:text-[2.75rem]">
                Governance Policies<br>
                <span class="text-integrax-blue-glow">in Practice</span>
            </h2>
            <p class="reveal-up mt-5 text-base leading-relaxed text-integrax-blue/60 sm:text-lg">
                Company-level and TNB Group policies that guide conduct, manage risk, and ensure accountability across all operations.
            </p>
        </div>

        @php
        $policies = [
            [
                'name' => 'Asset Management Policy',
                'scope' => 'Company Level',
                'color' => 'blue',
                'icon' => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/>',
                'desc' => 'Governs the systematic management of physical assets throughout their lifecycle. Aligned with ISO 55001 principles — the same standard Integrax is certified under — to maximise asset value, ensure operational reliability, and optimise maintenance across all facilities and equipment.',
            ],
            [
                'name' => 'Risk Management Policy',
                'scope' => 'Company Level',
                'color' => 'blue',
                'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
                'desc' => 'Establishes an enterprise-wide framework for identifying, assessing, monitoring, and mitigating risks across all business operations and strategic activities. Ensures that risk exposure is understood and managed within defined tolerances at all levels of the organisation.',
            ],
            [
                'name' => 'TNB Corporate Governance',
                'scope' => 'TNB Group',
                'color' => 'red',
                'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
                'desc' => 'Alignment with the TNB Group corporate governance framework, ensuring consistency with parent company standards, Board practices, director obligations, and disclosure requirements in accordance with applicable Malaysian regulatory and listing requirements.',
            ],
            [
                'name' => 'Code of Ethics',
                'scope' => 'TNB Group',
                'color' => 'red',
                'icon' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>',
                'desc' => 'Sets out the ethical standards and conduct expected of all employees and directors. Covers integrity, conflicts of interest, confidentiality of information, anti-bribery and corruption, gifts and hospitality, and professional conduct in all business dealings.',
            ],
            [
                'name' => 'Whistleblowing Policy',
                'scope' => 'TNB Group',
                'color' => 'red',
                'icon' => '<path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>',
                'desc' => 'Provides secure and confidential channels for employees, contractors, and stakeholders to raise concerns about improper conduct, unethical practices, or policy breaches. Protects reporters from retaliation and ensures matters are investigated through appropriate channels.',
            ],
            [
                'name' => 'Occupational Health & Safety Policy',
                'scope' => 'Public',
                'color' => 'green',
                'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
                'desc' => 'Commits Integrax to maintaining safe and healthy working environments across all operational sites — including port facilities, marine operations, and bulk terminal infrastructure. Ensures compliance with applicable occupational health and safety legislation and internationally recognised standards.',
            ],
            [
                'name' => 'Environmental Policy',
                'scope' => 'Public',
                'color' => 'green',
                'icon' => '<path d="M17 8C8 10 5.9 16.17 3.82 19.36"/><path d="M2 12A10 10 0 1022 12"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41"/>',
                'desc' => 'Articulates Integrax\'s commitment to responsible environmental stewardship across all business activities. Covers pollution prevention, waste management, energy and resource efficiency, and the continuous improvement of environmental performance in alignment with sustainability goals.',
            ],
        ];
        @endphp

        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($policies as $p)
            <div class="gov-policy-card reveal-up">
                <button class="gov-policy-btn w-full text-left" aria-expanded="false">
                    <div class="flex items-start gap-4">
                        <div class="gov-policy-icon gov-policy-icon--{{ $p['color'] }} flex-shrink-0" aria-hidden="true">
                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">{!! $p['icon'] !!}</svg>
                        </div>
                        <div class="min-w-0 flex-1">
                            <span class="gov-policy-scope gov-policy-scope--{{ $p['color'] }}">{{ $p['scope'] }}</span>
                            <h3 class="gov-policy-name mt-1.5">{{ $p['name'] }}</h3>
                        </div>
                        <svg class="gov-policy-chevron mt-0.5 flex-shrink-0" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </button>
                <div class="gov-policy-expand" hidden>
                    <p class="gov-policy-desc">{{ $p['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div class="pointer-events-none absolute inset-x-0 overflow-hidden gov-flow-bridge--policies-action" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ GOVERNANCE IN ACTION ═══════════════════════ --}}
<section class="gov-action-section section-tone-dark relative overflow-hidden py-24 lg:py-36">

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -left-24 top-1/3 h-[22rem] w-[22rem] rounded-full bg-integrax-blue-glow/10 blur-[110px]"></div>
        <div class="absolute right-0 bottom-1/4 h-72 w-72 rounded-full bg-integrax-red/14 blur-[90px]"></div>
    </div>
    <div class="grain-overlay" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">

        <div class="mb-14 max-w-2xl lg:mb-16">
            <p class="section-eyebrow mb-4">Our Commitment</p>
            <h2 class="reveal-up text-3xl font-extrabold leading-[1.08] tracking-tight text-white sm:text-4xl lg:text-[2.75rem]">
                Governance in Action
            </h2>
            <p class="reveal-up mt-5 text-base leading-relaxed text-white/55 sm:text-lg">
                Aligning business practices with development goals to achieve long-term growth and success for all stakeholders.
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-3">

            <div class="gov-action-card">
                <div class="gov-action-card-icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                    </svg>
                </div>
                <h3 class="gov-action-card-title">Stakeholder Value</h3>
                <p class="gov-action-card-desc">Sustainably delivering value to all stakeholders through disciplined governance, transparent communication, and principled business management.</p>
                <div class="gov-action-card-bar" aria-hidden="true"></div>
            </div>

            <div class="gov-action-card">
                <div class="gov-action-card-icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3 class="gov-action-card-title">Business Alignment</h3>
                <p class="gov-action-card-desc">Ensuring governance frameworks directly support strategic development goals, so every policy decision drives the organisation toward its long-term objectives.</p>
                <div class="gov-action-card-bar" aria-hidden="true"></div>
            </div>

            <div class="gov-action-card">
                <div class="gov-action-card-icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                        <polyline points="17 6 23 6 23 12"/>
                    </svg>
                </div>
                <h3 class="gov-action-card-title">Long-term Growth</h3>
                <p class="gov-action-card-desc">Building sustainable growth through ethical conduct, regulatory compliance, and a governance culture that prioritises enduring value over short-term gains.</p>
                <div class="gov-action-card-bar" aria-hidden="true"></div>
            </div>

        </div>

    </div>

    <div class="pointer-events-none absolute inset-x-0 overflow-hidden gov-flow-bridge--action-nav" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ BACK NAV CTA ═══════════════════════ --}}
<section class="relative overflow-hidden py-20 section-tone-light lg:py-28">

    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute left-1/2 top-1/2 h-96 w-[38rem] -translate-x-1/2 -translate-y-1/2 rounded-full bg-integrax-blue-pale-deep/50 blur-[100px]"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
        <div class="flex flex-col items-center gap-8 text-center">

            <p class="text-[11px] font-bold uppercase tracking-[0.3em] text-integrax-red">Explore More</p>
            <h2 class="text-2xl font-extrabold tracking-tight text-integrax-blue sm:text-3xl lg:text-[2.25rem]">
                Continue Exploring Integrax
            </h2>
            <p class="max-w-xl text-base leading-relaxed text-integrax-blue/55">
                Discover our achievements, leadership team, and the full story of Integrax's corporate journey.
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="/about" class="ach-btn-outline">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    About Integrax
                </a>
                <a href="/achievement" class="ach-btn-outline">
                    Achievement
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="/leadership" class="ach-btn-outline">
                    Leadership
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </div>

</section>

@include('partials.about-overlay')
@endsection

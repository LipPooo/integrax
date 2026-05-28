@extends('layouts.integrax')

@section('title', 'Leadership & Management — Integrax Berhad')

@php
$executives = [
    [
        'initials'     => 'AH',
        'name'         => 'Ts. Abdul Halim Abdullah Shukor',
        'title'        => 'Managing Director',
        'department'   => 'Executive Leadership',
        'avatar_class' => 'ldg-avatar--md',
        'preview'      => 'Visionary leader championing the "Brown to Green" energy transition, overseeing daily operations and positioning Integrax as a premier power generation services provider.',
        'has_full_bio' => true,
        'bio'          => '<p>Ts. Abdul Halim bin Abdullah Shukor serves as the Managing Director of Integrax Berhad, where he plays an instrumental role in positioning the company as a premier service provider in the power generation sector. Committed to fostering innovation and sustainability, he actively supports TNB Genco\'s strategic "Brown to Green" initiative, focusing on transitioning toward cleaner and more sustainable energy solutions. Under his leadership, Integrax Berhad prioritizes maximizing shareholder value, driving revenue growth, and embedding sustainable practices in its operations.</p><p>Recognized as a visionary and results-driven leader, Ts. Abdul Halim excels in aligning organizational objectives with stakeholder expectations, ensuring sustainable growth and long-term success. His ability to adapt to evolving business landscapes and foster collaboration among diverse stakeholders has been pivotal in achieving both immediate and strategic goals.</p><p>At Integrax Berhad, he oversees daily operations and ensures that the company\'s strategic vision is realized through actionable and impactful initiatives, reinforcing its leadership position within the industry. He began his professional journey in 1997 as a Mechanical Engineer at TNB\'s Sultan Salahuddin Abdul Aziz Shah Kapar Power Station, gaining invaluable technical expertise. Before assuming his current role, he served as Chief Operating Officer at TNB Energy Services, where he demonstrated strategic foresight and operational excellence.</p><p>Ts. Abdul Halim holds a Bachelor\'s degree in Mechanical Engineering from Universiti Teknologi Malaysia (UTM) and a Master\'s degree in Business Administration (MBA) from Universiti Tenaga Nasional (UNITEN).</p>',
    ],
    [
        'initials'     => 'WK',
        'name'         => 'Ts. Wan Mohd Khairul Syahman Wan Khairuldin',
        'title'        => 'Chief Technical Officer',
        'department'   => 'C-Suite',
        'avatar_class' => 'ldg-avatar--cto',
        'preview'      => null,
        'has_full_bio' => false,
        'bio'          => null,
    ],
    [
        'initials'     => 'AA',
        'name'         => 'Amiryazan Azizan',
        'title'        => 'Chief Strategy & Development',
        'department'   => 'C-Suite',
        'avatar_class' => 'ldg-avatar--cso',
        'preview'      => null,
        'has_full_bio' => false,
        'bio'          => null,
    ],
    [
        'initials'     => 'MS',
        'name'         => 'Ts. Mohd Syahril Hussain',
        'title'        => 'Head, Project & Engineering Services',
        'department'   => 'Executive',
        'avatar_class' => 'ldg-avatar--hpe',
        'preview'      => null,
        'has_full_bio' => false,
        'bio'          => null,
    ],
    [
        'initials'     => 'RS',
        'name'         => 'Radzmin Shah Md Shahbudin',
        'title'        => 'Chief Financial Officer',
        'department'   => 'C-Suite',
        'avatar_class' => 'ldg-avatar--cfo',
        'preview'      => null,
        'has_full_bio' => false,
        'bio'          => null,
    ],
    [
        'initials'     => 'MH',
        'name'         => 'Mohd Hady Ahmat',
        'title'        => 'Lead, Business & Corporate Services',
        'department'   => 'Executive',
        'avatar_class' => 'ldg-avatar--bcs',
        'preview'      => null,
        'has_full_bio' => false,
        'bio'          => null,
    ],
];
@endphp

@section('content')

{{-- ═══════════════════════ NAVBAR ═══════════════════════ --}}
<header id="site-header" class="site-header fixed inset-x-0 top-0 z-50">
    <div class="site-header-glow pointer-events-none absolute inset-x-0 top-0 h-full" aria-hidden="true"></div>
    <div class="relative mx-auto flex max-w-[90rem] items-center justify-between px-8 py-6 lg:px-14 lg:py-7">
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
            <a href="/#segments" class="btn-primary px-6 py-3 text-sm">
                Explore Solutions
            </a>
        </div>

        <button type="button" id="mobile-menu-btn" class="site-header-menu-btn inline-flex h-12 w-12 items-center justify-center rounded-full lg:hidden" aria-label="Open menu" aria-expanded="false">
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
<section class="section-tone-dark relative flex min-h-[92vh] items-end overflow-hidden">

    {{-- Ambient orbs --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="hero-gradient-orb absolute -left-24 top-1/4 h-[28rem] w-[28rem] rounded-full bg-integrax-blue-light/14 blur-[90px]"></div>
        <div class="hero-gradient-orb absolute right-0 top-1/3 h-80 w-80 rounded-full bg-integrax-red/16 blur-[80px]"></div>
        <div class="hero-gradient-orb absolute bottom-1/3 left-1/2 h-64 w-64 rounded-full bg-integrax-blue-glow/10 blur-[70px]"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_90%_65%_at_10%_0%,rgba(61,143,201,0.13),transparent_55%)]"></div>
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_60%_40%_at_90%_80%,rgba(94,179,228,0.07),transparent_50%)]"></div>
    </div>
    <div class="grain-overlay" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto w-full max-w-[90rem] px-8 pb-36 pt-48 lg:px-14 lg:pb-48 lg:pt-56">

        <div class="about-hero-item" style="animation-delay:0.1s">
            <p class="mb-8 flex flex-wrap items-center gap-4">
                <span class="h-px w-16 bg-integrax-blue-light opacity-80"></span>
                <span class="text-[11px] font-semibold uppercase tracking-[0.3em] text-integrax-blue-light">Executive Team · Integrax Berhad</span>
            </p>
        </div>

        <div class="about-hero-item max-w-5xl" style="animation-delay:0.25s">
            <h1 class="text-4xl font-extrabold leading-[1.04] tracking-tight text-white sm:text-5xl md:text-6xl lg:text-[4.5rem]">
                Leadership &amp;<br>
                <span class="bg-linear-to-r from-white via-integrax-blue-light to-white/85 bg-clip-text text-transparent">Management</span>
            </h1>
        </div>

        <div class="about-hero-item mt-9 max-w-2xl" style="animation-delay:0.4s">
            <p class="text-lg leading-relaxed text-white/65 md:text-xl">
                Experienced leaders driving Integrax Berhad's strategic vision — delivering sustainable infrastructure and energy solutions across Peninsular Malaysia as part of the TNB Group.
            </p>
        </div>

        <div class="about-hero-item mt-14 flex flex-wrap gap-4" style="animation-delay:0.55s">
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">6</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Executives</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">C-Suite</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Leadership Tier</p>
            </div>
            <div class="about-stat-chip rounded-2xl px-7 py-5">
                <p class="text-2xl font-extrabold tracking-tight text-white">TNB</p>
                <p class="mt-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white/50">Group Subsidiary</p>
            </div>
        </div>

    </div>

    {{-- Section bridge dark → light --}}
    <div class="about-flow-bridge--hero-heritage pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ EXECUTIVE TEAM ═══════════════════════ --}}
<section id="leadership-grid" class="section-tone-light relative -mt-px overflow-hidden py-28 lg:py-44">

    <div class="section-ambient-glow section-ambient-glow--light absolute -left-40 top-0 h-[30rem] w-[30rem]"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute right-1/4 top-1/4 h-64 w-64 opacity-40"></div>
    <div class="section-ambient-glow section-ambient-glow--light absolute right-0 bottom-0 h-96 w-96 opacity-60"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/30 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">

        {{-- Section intro --}}
        <div class="reveal-up mx-auto mb-24 max-w-3xl text-center">
            <p class="section-eyebrow">Executive Team</p>
            <h2 class="section-title">Meet the Leaders Behind Integrax</h2>
            <p class="section-lead mx-auto">
                A dedicated team of experienced professionals committed to operational excellence, strategic growth, and sustainable energy transition.
            </p>
        </div>

        {{-- Executive cards grid --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 lg:gap-9">
            @foreach($executives as $index => $exec)
            <div class="ldg-card reveal-up" data-exec-index="{{ $index }}">

                {{-- Top accent line --}}
                <div class="ldg-card-accent" aria-hidden="true"></div>

                {{-- Avatar --}}
                <div class="ldg-card-avatar-wrap">
                    <div class="ldg-card-avatar {{ $exec['avatar_class'] }}" aria-hidden="true">
                        <span class="ldg-card-initials">{{ $exec['initials'] }}</span>
                    </div>
                    <div class="ldg-card-avatar-ring" aria-hidden="true"></div>
                </div>

                {{-- Content --}}
                <div class="ldg-card-body">
                    <span class="ldg-card-badge">{{ $exec['department'] }}</span>
                    <h3 class="ldg-card-name mt-3">{{ $exec['name'] }}</h3>
                    <p class="ldg-card-title mt-2">{{ $exec['title'] }}</p>

                    @if($exec['preview'])
                    <p class="ldg-card-preview mt-5">{{ $exec['preview'] }}</p>
                    @endif

                    <div class="ldg-card-footer mt-7">
                        <button
                            class="ldg-view-btn js-ldg-open"
                            data-exec-index="{{ $index }}"
                            aria-label="View profile of {{ $exec['name'] }}"
                        >
                            <span>View Profile</span>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M7 17 17 7M7 7h10v10"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Hover glow layer --}}
                <div class="ldg-card-glow" aria-hidden="true"></div>
            </div>
            @endforeach
        </div>

    </div>

    {{-- Section bridge light → dark --}}
    <div class="about-flow-bridge--port-tech pointer-events-none absolute inset-x-0 bottom-0 z-[2]" aria-hidden="true"></div>
</section>

{{-- ═══════════════════════ FOOTER ═══════════════════════ --}}
<footer class="section-tone-dark relative border-t border-white/10 py-20 lg:py-28">
    <div class="section-ambient-glow section-ambient-glow--dark absolute inset-x-0 top-0 mx-auto h-64 w-[80%] max-w-5xl"></div>
    <div class="section-ambient-glow section-ambient-glow--red absolute -right-20 bottom-0 h-72 w-72 opacity-40"></div>
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(94,179,228,0.08),transparent_60%)]"></div>

    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">
        <div class="grid gap-16 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <a href="/" class="flex items-center gap-5">
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
                        <li><a href="/about" class="transition hover:text-white">About Integrax</a></li>
                        <li><a href="/leadership" class="transition hover:text-white">Leadership Team</a></li>
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

{{-- ═══════════════════════ BIO MODAL ═══════════════════════ --}}
<div id="ldg-bio-modal" class="ldg-modal" hidden aria-modal="true" role="dialog" aria-label="Executive Profile">

    {{-- Backdrop --}}
    <div id="ldg-modal-backdrop" class="ldg-modal-backdrop"></div>

    {{-- Panel --}}
    <div id="ldg-modal-panel" class="ldg-modal-panel">

        {{-- Close button --}}
        <button id="ldg-modal-close" class="ldg-modal-close" aria-label="Close profile">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18M6 6l12 12"/>
            </svg>
        </button>

        <div class="ldg-modal-inner">

            {{-- Sidebar: identity --}}
            <div class="ldg-modal-sidebar">
                <div class="ldg-modal-avatar-wrap">
                    <div id="ldg-modal-avatar" class="ldg-modal-avatar" aria-hidden="true">
                        <span id="ldg-modal-initials" class="ldg-modal-initials"></span>
                    </div>
                    <div class="ldg-modal-avatar-ring" aria-hidden="true"></div>
                </div>
                <div class="ldg-modal-identity">
                    <span id="ldg-modal-dept" class="ldg-modal-dept-badge"></span>
                    <h2 id="ldg-modal-name" class="ldg-modal-name"></h2>
                    <p id="ldg-modal-title" class="ldg-modal-role"></p>
                    <div class="ldg-modal-divider" aria-hidden="true"></div>
                    <p class="ldg-modal-company">Integrax Berhad<span class="ldg-modal-company-dot" aria-hidden="true"></span>TNB Group</p>
                </div>
            </div>

            {{-- Bio content --}}
            <div class="ldg-modal-content">
                <div id="ldg-modal-bio" class="ldg-modal-bio-body"></div>
            </div>

        </div>
    </div>
</div>

{{-- Executive data for JS --}}
<script id="ldg-exec-data" type="application/json">
[
    @foreach($executives as $exec)
    {
        "initials": {{ json_encode($exec['initials']) }},
        "name": {{ json_encode($exec['name']) }},
        "title": {{ json_encode($exec['title']) }},
        "department": {{ json_encode($exec['department']) }},
        "avatarClass": {{ json_encode($exec['avatar_class']) }},
        "hasBio": {{ $exec['has_full_bio'] ? 'true' : 'false' }},
        "bio": {!! isset($exec['bio']) && $exec['bio'] ? json_encode($exec['bio']) : 'null' !!}
    }{{ !$loop->last ? ',' : '' }}
    @endforeach
]
</script>

@include('partials.about-overlay')

@endsection

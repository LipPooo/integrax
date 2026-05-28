@php
    $journeyMilestones = [
        [
            'year' => '1996',
            'paragraphs' => [
                'Desa Kilat Sdn Bhd & Lekir Bulk Terminal (LBT) formed by PKNP, Halim Rasip Holdings & Malakoff Berhad:',
            ],
            'list' => [
                'Lekir Coastal Project - land reclamation',
                'Deep water bulk terminal',
            ],
        ],
        [
            'year' => '1999',
            'paragraphs' => [
                'First Lekir Island completed & handed over to TNB Janamanjung Sdn Bhd (TNBJ) for construction of 3 x 700MW coal fired power plant.',
                'LBTSB executed of Jetty Terminal Usage Agreement (JTUA) No.1 with TNBJ on 19 August 1999',
            ],
        ],
        [
            'year' => '2012',
            'paragraphs' => [
                'LBTSB executed JTUA No.2 with TNBJ on 27 July 2012',
            ],
        ],
        [
            'year' => '2015',
            'list' => [
                'TNB served General Offer (GO) for acquisition of Integrax on 9 January 2015',
                'LBTSB executed JTUA No. 3 with TNB Manjung Five on 25 February 2015',
                'TNB acquired > 50% shares in Integrax & delisted from Bursa Securities',
            ],
        ],
        [
            'year' => '2016',
            'paragraphs' => [
                'TNB acquired 100% shares in Integrax on 23 February 2016',
            ],
        ],
        [
            'year' => '2018',
            'paragraphs' => [
                'Integrax acquired 100% shares of LBTSB on 5 September 2018',
            ],
        ],
        [
            'year' => '2019',
            'paragraphs' => [
                'Bypass Conveyor Line project completion (LEXPRO P1) on June 2019',
            ],
        ],
        [
            'year' => '2022',
            'paragraphs' => [
                'Provide Marine Services and Marine Superintendent Services at Jimah East Power (JEP) on 1 January 2022',
            ],
        ],
        [
            'year' => '2024',
            'paragraphs' => [
                'Provide Stevedoring Services at JEP on 1 September 2024',
            ],
        ],
        [
            'year' => '2025',
            'paragraphs' => [
                'Renewal contract for Marine Services and Marine Superintendent Services at JEP on 1 January 2025',
            ],
        ],
        [
            'year' => '2026',
            'list' => [
                'RGTs',
                'Hydrogen',
                'Co-firing',
                'Biomass',
                'CCUS',
            ],
        ],
    ];
    $journeyDefaultYear = $journeyMilestones[0]['year'];
@endphp

<section id="journey" class="journey-section section-tone-light relative -mt-px overflow-hidden py-28 lg:py-40" aria-labelledby="journey-heading">
    <div class="section-flow-bridge section-flow-bridge--journey-top" aria-hidden="true"></div>
    <div class="journey-bg pointer-events-none absolute inset-0" aria-hidden="true">
        <img
            src="{{ asset('media/images/journey-background.jpg') }}"
            alt=""
            class="h-full w-full object-cover opacity-[0.08]"
            loading="lazy"
        >
        <div class="absolute inset-0 bg-linear-to-b from-integrax-blue-pale/90 via-integrax-blue-pale-mid/85 to-integrax-blue-pale"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,rgba(94,179,228,0.18),transparent_50%)]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,rgba(196,30,58,0.06),transparent_45%)]"></div>
        <div class="grain-overlay opacity-10"></div>
    </div>

    <div class="section-ambient-glow section-ambient-glow--light absolute -right-24 top-1/4 h-96 w-96"></div>
    <div class="section-ambient-glow section-ambient-glow--light absolute -left-16 bottom-1/4 h-72 w-72 opacity-60"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/30 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-[90rem] px-4 sm:px-6 lg:px-14">
        <div class="journey-reveal journey-header mx-auto max-w-3xl text-center">
            <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-red">Our Journey</p>
            <h2 id="journey-heading" class="mt-5 text-3xl font-extrabold tracking-tight text-integrax-blue sm:text-4xl md:text-5xl lg:text-[3.25rem]">
                Journey of Integrax Group
            </h2>
        </div>

        <div class="journey-reveal journey-timeline-wrap relative mt-16 lg:mt-20">
            <div class="journey-line-track pointer-events-none absolute left-0 right-0 top-[2.65rem] hidden h-px bg-integrax-blue/15 md:block lg:top-[2.85rem]" aria-hidden="true">
                <div id="journey-line-progress" class="journey-line-progress h-full origin-left bg-linear-to-r from-integrax-red via-integrax-blue-light to-integrax-blue-glow"></div>
            </div>

            <div
                id="journey-years-scroll"
                class="journey-years-scroll relative -mx-2 flex gap-1 overflow-x-auto px-2 pb-4 scroll-smooth md:mx-0 md:justify-between md:gap-0 md:overflow-visible md:px-0 md:pb-0"
                role="tablist"
                aria-label="Integrax Group milestone years"
            >
                @foreach ($journeyMilestones as $index => $milestone)
                    <button
                        type="button"
                        role="tab"
                        id="journey-tab-{{ $milestone['year'] }}"
                        class="journey-year-btn group relative shrink-0 px-3 py-2 md:flex-1 md:px-2 md:py-0 {{ $milestone['year'] === $journeyDefaultYear ? 'is-active' : '' }}"
                        data-year="{{ $milestone['year'] }}"
                        data-index="{{ $index }}"
                        aria-selected="{{ $milestone['year'] === $journeyDefaultYear ? 'true' : 'false' }}"
                        aria-controls="journey-panel-{{ $milestone['year'] }}"
                    >
                        <span class="journey-year-node relative z-10 mx-auto mb-3 flex h-3 w-3 items-center justify-center rounded-full border border-integrax-blue/20 bg-white transition-all duration-500 group-hover:border-integrax-blue-light/60 md:mb-4 md:h-3.5 md:w-3.5">
                            <span class="journey-year-node-core h-1 w-1 rounded-full bg-integrax-blue/30 transition-all duration-500"></span>
                        </span>
                        <span class="journey-year-label block text-sm font-bold tracking-tight text-integrax-blue/45 transition-colors duration-500 group-hover:text-integrax-blue/75 md:text-base lg:text-lg">{{ $milestone['year'] }}</span>
                        <span class="journey-year-underline absolute -bottom-1 left-1/2 h-0.5 w-0 -translate-x-1/2 rounded-full bg-integrax-red opacity-0 transition-all duration-500"></span>
                    </button>
                @endforeach

                <span id="journey-active-indicator" class="journey-active-indicator pointer-events-none absolute bottom-0 hidden h-0.5 rounded-full bg-linear-to-r from-integrax-red to-integrax-blue-light shadow-[0_0_12px_rgba(196,30,58,0.35)] md:block" aria-hidden="true"></span>
            </div>
        </div>

        <div
            id="journey-content"
            class="journey-reveal journey-content relative mt-10 min-h-[20rem] lg:mt-14 lg:min-h-[18rem]"
            aria-live="polite"
        >
            @foreach ($journeyMilestones as $milestone)
                <article
                    id="journey-panel-{{ $milestone['year'] }}"
                    class="journey-panel {{ $milestone['year'] === $journeyDefaultYear ? 'is-active' : '' }}"
                    data-year="{{ $milestone['year'] }}"
                    role="tabpanel"
                    aria-labelledby="journey-tab-{{ $milestone['year'] }}"
                    @if ($milestone['year'] !== $journeyDefaultYear) hidden @endif
                >
                    <div class="journey-panel-card overflow-hidden rounded-[1.75rem] border border-integrax-blue/10 bg-white/80 shadow-[0_24px_48px_-20px_rgba(10,22,40,0.14)] backdrop-blur-xl">
                        <div class="grid lg:grid-cols-12">
                            <div class="relative hidden overflow-hidden lg:col-span-5 lg:block">
                                <img
                                    src="{{ asset('media/images/journey-panel.jpg') }}"
                                    alt=""
                                    class="journey-panel-image h-full min-h-full w-full object-cover"
                                    loading="lazy"
                                >
                                <div class="absolute inset-0 bg-linear-to-r from-transparent via-integrax-blue/35 to-integrax-blue/85"></div>
                                <div class="absolute inset-0 bg-linear-to-t from-integrax-blue/75 to-transparent"></div>
                            </div>

                            <div class="journey-panel-body relative p-8 md:p-10 lg:col-span-7 lg:p-12 xl:p-14">
                                <div class="pointer-events-none absolute -right-8 -top-8 h-40 w-40 rounded-full bg-integrax-red/8 blur-[60px]" aria-hidden="true"></div>
                                <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-blue-glow">Milestone</p>
                                <p class="journey-panel-year mt-3 text-5xl font-extrabold tracking-tight text-integrax-blue md:text-6xl">{{ $milestone['year'] }}</p>

                                <div class="journey-panel-text mt-8 space-y-5 text-base leading-relaxed text-integrax-blue/75 md:text-lg md:leading-relaxed">
                                    @if (! empty($milestone['paragraphs']))
                                        @foreach ($milestone['paragraphs'] as $paragraph)
                                            <p>{{ $paragraph }}</p>
                                        @endforeach
                                    @endif

                                    @if (! empty($milestone['list']))
                                        <ul class="journey-panel-list space-y-3 pl-0">
                                            @foreach ($milestone['list'] as $item)
                                                <li class="flex items-start gap-4">
                                                    <span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.45)]"></span>
                                                    <span>{{ $item }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

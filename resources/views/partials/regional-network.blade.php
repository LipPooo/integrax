@php

    $networkCards = [

        [

            'id' => 'malaysia',

            'title' => 'Malaysia Operations',

            'desc' => 'Headquartered in Kuala Lumpur with integrated marine, infrastructure, and energy operations across Peninsular and East Malaysia.',

            'tag' => 'Core Hub',

            'icon' => 'building',

        ],

        [

            'id' => 'asean',

            'title' => 'ASEAN Infrastructure',

            'desc' => 'Regional project delivery and asset development supporting cross-border energy corridors and industrial growth across Southeast Asia.',

            'tag' => 'Regional Delivery',

            'icon' => 'grid',

        ],

        [

            'id' => 'maritime',

            'title' => 'Maritime Services',

            'desc' => 'Offshore marine support, port operations, and superintendent services for power generation and industrial maritime assets.',

            'tag' => 'Marine Excellence',

            'icon' => 'anchor',

        ],

        [

            'id' => 'partnerships',

            'title' => 'Strategic Partnerships',

            'desc' => 'Long-term alliances with utilities, developers, and international operators across Asia-Pacific and strategic trade corridors.',

            'tag' => 'Global Alliances',

            'icon' => 'link',

        ],

    ];

@endphp



<section id="network" class="network-section section-tone-light relative overflow-hidden py-28 lg:py-40">

    <div class="network-bg pointer-events-none absolute inset-0" aria-hidden="true">

        <img

            src="{{ asset('media/images/journey-background.jpg') }}"

            alt=""

            class="h-full w-full object-cover opacity-[0.06]"

            loading="lazy"

        >

        <div class="absolute inset-0 bg-linear-to-b from-integrax-blue-pale via-integrax-blue-pale-mid/90 to-integrax-blue-pale"></div>

        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_30%_20%,rgba(94,179,228,0.16),transparent_55%)]"></div>

        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_80%_80%,rgba(196,30,58,0.05),transparent_50%)]"></div>

        <div class="grain-overlay opacity-10"></div>

    </div>



    <div id="network-particles" class="pointer-events-none absolute inset-0" aria-hidden="true"></div>

    <div class="section-ambient-glow section-ambient-glow--light absolute -left-24 top-1/4 h-80 w-80"></div>

    <div class="section-ambient-glow section-ambient-glow--red absolute -right-16 bottom-1/4 h-96 w-96 opacity-50"></div>

    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-integrax-blue-light/28 to-transparent" aria-hidden="true"></div>



    <div class="relative mx-auto max-w-[90rem] px-8 lg:px-14">

        <div class="network-reveal network-header mx-auto max-w-3xl text-center">

            <p class="text-[11px] font-bold uppercase tracking-[0.28em] text-integrax-red">Regional Operations</p>

            <h2 class="mt-5 text-4xl font-extrabold tracking-tight text-integrax-blue md:text-5xl lg:text-[3.25rem]">

                Strategic Regional Network

            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-relaxed text-integrax-blue/65 md:text-lg md:leading-relaxed">

                A focused operational footprint across Malaysia and ASEAN — connecting marine services, critical infrastructure, and strategic partnerships with disciplined execution.

            </p>

        </div>



        <div class="network-reveal network-stage relative mt-14 lg:mt-20">

            <div

                id="network-map-glass"

                class="network-map-glass relative mx-auto max-w-xl overflow-hidden rounded-3xl p-6 backdrop-blur-2xl md:max-w-2xl md:p-8 lg:p-10"

            >

                <div class="network-map-ambient pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(94,179,228,0.14),transparent_65%)]" aria-hidden="true"></div>

                <div class="network-map-ambient-red pointer-events-none absolute left-1/2 top-1/2 h-48 w-48 -translate-x-1/2 -translate-y-1/2 rounded-full bg-integrax-red/10 blur-[70px]" aria-hidden="true"></div>



                <p class="relative z-10 mb-4 text-center text-[10px] font-bold uppercase tracking-[0.24em] text-integrax-blue-glow">Operational Footprint</p>



                <div class="relative z-10 flex justify-center py-2">

                    @include('partials.regional-network-map')

                </div>



                <div class="relative z-10 mt-4 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-[10px] font-semibold uppercase tracking-[0.18em] text-integrax-blue/50">

                    <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-integrax-red shadow-[0_0_8px_rgba(196,30,58,0.55)]"></span> Malaysia</span>

                    <span class="inline-flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-integrax-blue-light"></span> ASEAN</span>

                    <span class="inline-flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-integrax-blue-glow"></span> Maritime</span>

                    <span class="inline-flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-integrax-blue-light/70"></span> Partnerships</span>

                </div>

            </div>



            <div id="network-cards" class="mt-10 grid gap-5 sm:grid-cols-2 lg:mt-14 lg:grid-cols-4 lg:gap-6">

                @foreach ($networkCards as $card)

                    <article

                        class="network-card group relative cursor-default overflow-hidden rounded-2xl p-6 transition-colors duration-500 md:p-7"

                        data-region="{{ $card['id'] }}"

                    >

                        <div class="network-card-border pointer-events-none absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-500 group-hover:opacity-100" aria-hidden="true"></div>

                        <div class="network-card-shine pointer-events-none absolute -inset-full opacity-0 transition-opacity duration-700 group-hover:opacity-100" aria-hidden="true"></div>



                        <div class="relative z-10">

                            <div class="flex items-start justify-between gap-4">

                                <span class="network-card-icon flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-integrax-blue/10 bg-integrax-blue-pale text-integrax-blue-glow">

                                    @if ($card['icon'] === 'building')

                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5M4.5 21V9.75L12 3l7.5 6.75V21M9.75 21v-4.5h4.5V21"/></svg>

                                    @elseif ($card['icon'] === 'grid')

                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>

                                    @elseif ($card['icon'] === 'anchor')

                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v3m0 12v3m9-9h-3M6 12H3m15.364 6.364l-2.121-2.121M8.757 8.757L6.636 6.636m12.728 0l-2.121 2.121M8.757 15.243l-2.121 2.121"/></svg>

                                    @else

                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>

                                    @endif

                                </span>

                                <span class="text-[10px] font-bold uppercase tracking-[0.16em] text-integrax-blue-glow">{{ $card['tag'] }}</span>

                            </div>



                            <h3 class="mt-5 text-lg font-bold tracking-tight text-integrax-blue">{{ $card['title'] }}</h3>

                            <p class="mt-3 text-sm leading-relaxed text-integrax-blue/60">{{ $card['desc'] }}</p>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </div>



    <div class="section-flow-bridge section-flow-bridge--network-footer" aria-hidden="true"></div>

</section>


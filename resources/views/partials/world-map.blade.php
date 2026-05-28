<svg
    id="world-map"
    class="mx-auto h-auto w-full max-w-5xl"
    viewBox="0 0 1000 500"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    aria-hidden="true"
>
    <defs>
        <linearGradient id="mapLineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#5eb3e4" stop-opacity="0.2"/>
            <stop offset="50%" stop-color="#5eb3e4"/>
            <stop offset="100%" stop-color="#c41e3a"/>
        </linearGradient>
        <radialGradient id="hubGlow" cx="50%" cy="50%" r="50%">
            <stop offset="0%" stop-color="#c41e3a" stop-opacity="0.9"/>
            <stop offset="100%" stop-color="#c41e3a" stop-opacity="0"/>
        </radialGradient>
        <filter id="dotGlow" x="-100%" y="-100%" width="300%" height="300%">
            <feGaussianBlur stdDeviation="3" result="blur"/>
            <feMerge>
                <feMergeNode in="blur"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
        <pattern id="mapGrid" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="1" cy="1" r="0.6" fill="#5eb3e4" fill-opacity="0.08"/>
        </pattern>
    </defs>

    <rect width="1000" height="500" fill="url(#mapGrid)"/>

    {{-- Simplified land silhouettes --}}
    <g class="map-land" fill="#5eb3e4" fill-opacity="0.06" stroke="#5eb3e4" stroke-opacity="0.12" stroke-width="0.5">
        <path d="M120 180c40-30 90-40 140-25s100 10 150-5 120-5 180 15 80 40 60 70-30 50-80 45-120 20-150-10-90-30-130-55-50-35z"/>
        <path d="M480 120c60-20 120-15 180 5s90 35 70 75-50 55-100 50-130-15-150-45-40-50 20-85z"/>
        <path d="M680 160c50-25 110-20 160 10s70 50 50 90-60 40-110 30-140-25-120-60 20-45 70-70z"/>
        <path d="M200 280c70 40 150 50 230 35s160-30 220 10 90 60 40 90-100 35-180 25-200-20-150-55-60-45-60-105z"/>
        <path d="M720 300c40 30 90 45 140 35s100-25 80-65-70-50-130-40-100 20-130 50 20 35 40 75z"/>
    </g>

    {{-- Latitude guides --}}
    <ellipse cx="500" cy="250" rx="420" ry="160" stroke="#5eb3e4" stroke-opacity="0.08" stroke-width="0.5" stroke-dasharray="6 12"/>
    <ellipse cx="500" cy="250" rx="280" ry="100" stroke="#5eb3e4" stroke-opacity="0.05" stroke-width="0.5"/>

    {{-- Connection lines (hub: Kuala Lumpur region) --}}
    <g id="map-connections" stroke="url(#mapLineGrad)" stroke-width="1.5" fill="none" stroke-linecap="round">
        <path class="connection-line" data-delay="0" d="M548 228 L720 175"/>
        <path class="connection-line" data-delay="0.1" d="M548 228 L380 165"/>
        <path class="connection-line" data-delay="0.2" d="M548 228 L200 155"/>
        <path class="connection-line" data-delay="0.15" d="M548 228 L620 285"/>
        <path class="connection-line" data-delay="0.25" d="M548 228 L820 200"/>
        <path class="connection-line" data-delay="0.2" d="M548 228 L480 120"/>
    </g>

    {{-- Regional nodes --}}
    <g class="map-nodes" filter="url(#dotGlow)">
        <g class="map-node-group" data-label="Americas">
            <circle class="map-pulse" cx="200" cy="155" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="200" cy="155" r="4" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-label="Europe & MENA">
            <circle class="map-pulse" cx="380" cy="165" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="380" cy="165" r="4" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-label="ASEAN">
            <circle class="map-pulse" cx="620" cy="285" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="620" cy="285" r="4" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-label="East Asia">
            <circle class="map-pulse" cx="720" cy="175" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="720" cy="175" r="4" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-label="Oceania">
            <circle class="map-pulse" cx="820" cy="200" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="820" cy="200" r="4" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-label="North Asia">
            <circle class="map-pulse" cx="480" cy="120" r="18" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="480" cy="120" r="4" fill="#5eb3e4"/>
        </g>
        {{-- HQ Hub --}}
        <g class="map-hub-group">
            <circle class="map-hub-pulse" cx="548" cy="228" r="32" fill="url(#hubGlow)" fill-opacity="0.5"/>
            <circle class="map-hub-pulse map-hub-pulse--delay" cx="548" cy="228" r="48" fill="#c41e3a" fill-opacity="0.06"/>
            <circle class="map-hub" cx="548" cy="228" r="7" fill="#c41e3a"/>
            <circle cx="548" cy="228" r="3" fill="#fff"/>
        </g>
    </g>
</svg>

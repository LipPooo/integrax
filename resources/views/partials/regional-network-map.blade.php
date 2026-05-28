<svg
    id="regional-map"
    class="regional-map-svg mx-auto h-auto w-full max-w-md"
    viewBox="420 160 360 200"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
    aria-hidden="true"
>
    <defs>
        <linearGradient id="regionalLineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#5eb3e4" stop-opacity="0.25"/>
            <stop offset="50%" stop-color="#5eb3e4"/>
            <stop offset="100%" stop-color="#c41e3a" stop-opacity="0.85"/>
        </linearGradient>
        <radialGradient id="regionalHubGlow" cx="50%" cy="50%" r="50%">
            <stop offset="0%" stop-color="#c41e3a" stop-opacity="0.95"/>
            <stop offset="100%" stop-color="#c41e3a" stop-opacity="0"/>
        </radialGradient>
        <filter id="regionalDotGlow" x="-100%" y="-100%" width="300%" height="300%">
            <feGaussianBlur stdDeviation="2.5" result="blur"/>
            <feMerge>
                <feMergeNode in="blur"/>
                <feMergeNode in="SourceGraphic"/>
            </feMerge>
        </filter>
        <pattern id="regionalGrid" width="16" height="16" patternUnits="userSpaceOnUse">
            <circle cx="1" cy="1" r="0.5" fill="#5eb3e4" fill-opacity="0.1"/>
        </pattern>
    </defs>

    <rect x="420" y="160" width="360" height="200" fill="url(#regionalGrid)"/>

    <g class="map-land" fill="#5eb3e4" fill-opacity="0.08" stroke="#5eb3e4" stroke-opacity="0.18" stroke-width="0.6">
        <path d="M480 200c35-18 75-22 115-8s70 28 55 58-48 42-88 38-95-18-110-48c-12-22 8-32 28-40z"/>
        <path d="M600 255c45 25 95 30 130 12s55-42 35-68-65-28-105-15-75 35-90 58 15 28 30 13z"/>
        <path d="M520 175c25-12 55-10 80 8s35 35 20 55-40 25-65 18-50-22-35-45 0-28 20-36z"/>
    </g>

    <ellipse cx="548" cy="228" rx="120" ry="48" stroke="#5eb3e4" stroke-opacity="0.1" stroke-width="0.5" stroke-dasharray="5 10"/>
    <ellipse cx="548" cy="228" rx="72" ry="28" stroke="#5eb3e4" stroke-opacity="0.06" stroke-width="0.5"/>

    <g id="regional-connections" stroke="url(#regionalLineGrad)" stroke-width="1.25" fill="none" stroke-linecap="round">
        <path class="connection-line" data-delay="0" d="M548 228 L620 285"/>
        <path class="connection-line" data-delay="0.12" d="M548 228 L640 195"/>
        <path class="connection-line" data-delay="0.2" d="M548 228 L470 205"/>
        <path class="connection-line" data-delay="0.28" d="M548 228 L595 175"/>
    </g>

    <g class="map-nodes" filter="url(#regionalDotGlow)">
        <g class="map-node-group" data-region="asean">
            <circle class="map-pulse" cx="620" cy="285" r="14" fill="#5eb3e4" fill-opacity="0.1"/>
            <circle class="map-node" cx="620" cy="285" r="3.5" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-region="maritime">
            <circle class="map-pulse" cx="640" cy="195" r="14" fill="#5eb3e4" fill-opacity="0.1"/>
            <circle class="map-node" cx="640" cy="195" r="3.5" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-region="partnerships">
            <circle class="map-pulse" cx="470" cy="205" r="14" fill="#5eb3e4" fill-opacity="0.1"/>
            <circle class="map-node" cx="470" cy="205" r="3.5" fill="#5eb3e4"/>
        </g>
        <g class="map-node-group" data-region="malaysia">
            <circle class="map-pulse" cx="595" cy="175" r="12" fill="#5eb3e4" fill-opacity="0.08"/>
            <circle class="map-node" cx="595" cy="175" r="3" fill="#5eb3e4"/>
        </g>
        <g class="map-hub-group">
            <circle class="map-hub-pulse" cx="548" cy="228" r="22" fill="url(#regionalHubGlow)" fill-opacity="0.55"/>
            <circle class="map-hub-pulse map-hub-pulse--delay" cx="548" cy="228" r="34" fill="#c41e3a" fill-opacity="0.07"/>
            <circle class="map-hub" cx="548" cy="228" r="5.5" fill="#c41e3a"/>
            <circle cx="548" cy="228" r="2.5" fill="#fff"/>
        </g>
    </g>
</svg>

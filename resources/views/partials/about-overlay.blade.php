<div id="about-overlay" class="about-overlay" role="dialog" aria-modal="true" aria-label="About Integrax Berhad" hidden>

    {{-- Cinematic background --}}
    <div class="about-overlay-bg" aria-hidden="true">
        <div class="about-bg-orb about-bg-orb--r"></div>
        <div class="about-bg-orb about-bg-orb--b1"></div>
        <div class="about-bg-orb about-bg-orb--b2"></div>
        <div class="about-bg-grain"></div>
        <div id="about-particles" class="absolute inset-0 overflow-hidden pointer-events-none"></div>
    </div>

    {{-- SVG connection lines (desktop only — drawn by JS) --}}
    <svg id="about-svg" class="about-connections" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <filter id="abt-line-glow" x="-200%" y="-200%" width="500%" height="500%">
                <feGaussianBlur stdDeviation="2.5" result="blur"/>
                <feMerge>
                    <feMergeNode in="blur"/>
                    <feMergeNode in="SourceGraphic"/>
                </feMerge>
            </filter>
        </defs>
    </svg>

    {{-- Close button (top-right) --}}
    <button class="about-close js-about-close" aria-label="Close About navigation">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18M6 6l12 12"/>
        </svg>
    </button>

    {{-- Central Hub (click to close) --}}
    <button id="about-hub" class="about-hub" aria-label="About Us — close this navigation">
        <span class="about-hub-ring about-hub-ring--outer" aria-hidden="true"></span>
        <span class="about-hub-ring about-hub-ring--mid" aria-hidden="true"></span>
        <span class="about-hub-core">
            <span class="about-hub-brand" aria-hidden="true">INTEGRAX</span>
            <span class="about-hub-label">About Us</span>
        </span>
    </button>

    {{-- Satellite node: About Integrax Berhad --}}
    <a href="#" class="about-node" data-node="integrax" aria-label="About Integrax Berhad">
        <span class="about-node-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 21h18M3 7l9-4 9 4M4 7v14M20 7v14M9 21V11h6v10"/>
            </svg>
        </span>
        <span class="about-node-content">
            <span class="about-node-eye">Corporate</span>
            <span class="about-node-title">About Integrax Berhad</span>
        </span>
        <span class="about-node-arr" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17 17 7M7 7h10v10"/>
            </svg>
        </span>
    </a>

    {{-- Satellite node: Leadership --}}
    <a href="#" class="about-node" data-node="leadership" aria-label="Leadership">
        <span class="about-node-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
        </span>
        <span class="about-node-content">
            <span class="about-node-eye">Executive</span>
            <span class="about-node-title">Leadership</span>
        </span>
        <span class="about-node-arr" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17 17 7M7 7h10v10"/>
            </svg>
        </span>
    </a>

    {{-- Satellite node: Our Team --}}
    <a href="#" class="about-node" data-node="team" aria-label="Our Team">
        <span class="about-node-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
        </span>
        <span class="about-node-content">
            <span class="about-node-eye">People</span>
            <span class="about-node-title">Our Team</span>
        </span>
        <span class="about-node-arr" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17 17 7M7 7h10v10"/>
            </svg>
        </span>
    </a>

    {{-- Satellite node: Achievement --}}
    <a href="#" class="about-node" data-node="achievement" aria-label="Achievement">
        <span class="about-node-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22M18 2H6v7a6 6 0 0 0 12 0V2Z"/>
            </svg>
        </span>
        <span class="about-node-content">
            <span class="about-node-eye">Milestones</span>
            <span class="about-node-title">Achievement</span>
        </span>
        <span class="about-node-arr" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17 17 7M7 7h10v10"/>
            </svg>
        </span>
    </a>

    {{-- Satellite node: Governance --}}
    <a href="#" class="about-node" data-node="governance" aria-label="Governance">
        <span class="about-node-icon" aria-hidden="true">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
        </span>
        <span class="about-node-content">
            <span class="about-node-eye">Compliance</span>
            <span class="about-node-title">Governance</span>
        </span>
        <span class="about-node-arr" aria-hidden="true">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17 17 7M7 7h10v10"/>
            </svg>
        </span>
    </a>

    {{-- Bottom ambient hint --}}
    <p class="about-hint" aria-hidden="true">Explore the Integrax corporate ecosystem</p>

</div>

@props(['announcements' => []])

@php $active = array_values(array_filter($announcements, fn($a) => $a['active'] ?? true)); @endphp

@if(count($active))
<div
    id="announcement-hub"
    class="announcement-hub"
    aria-live="polite"
    aria-label="Site announcements"
>
    @foreach($active as $index => $ann)
    <article
        class="announcement-toast"
        data-announcement-id="{{ $ann['id'] }}"
        data-delay="{{ ($ann['delay'] ?? 3) + ($index * 0.4) }}"
        data-auto-hide="{{ $ann['auto_hide'] ?? 8 }}"
        role="alertdialog"
        aria-labelledby="ann-title-{{ $ann['id'] }}"
        aria-describedby="ann-desc-{{ $ann['id'] }}"
    >
        {{-- Ambient corner glow --}}
        <div class="announcement-toast__glow" aria-hidden="true"></div>

        {{-- Glass card --}}
        <div class="announcement-toast__card">

            {{-- Header: label + close --}}
            <header class="announcement-toast__header">
                <div class="announcement-toast__label-wrap">
                    <span class="announcement-toast__dot" aria-hidden="true"></span>
                    <span class="announcement-toast__label">{{ $ann['label'] ?? 'Announcement' }}</span>
                </div>
                <button
                    class="announcement-toast__close js-ann-close"
                    aria-label="Dismiss announcement"
                    type="button"
                >
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                        <path d="M1 1l10 10M11 1L1 11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </button>
            </header>

            {{-- Body: title + description --}}
            <div class="announcement-toast__body">
                <p id="ann-title-{{ $ann['id'] }}" class="announcement-toast__title">
                    {{ $ann['title'] }}
                </p>
                <p id="ann-desc-{{ $ann['id'] }}" class="announcement-toast__description">
                    {{ $ann['description'] }}
                </p>
            </div>

            {{-- Footer: CTA --}}
            <footer class="announcement-toast__footer">
                <a href="{{ $ann['cta_url'] }}" class="announcement-toast__cta">
                    {{ $ann['cta_label'] ?? 'Learn More' }}
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </footer>

            {{-- Auto-hide progress bar --}}
            <div class="announcement-toast__progress" aria-hidden="true">
                <div class="announcement-toast__progress-bar"></div>
            </div>

        </div>{{-- /.announcement-toast__card --}}
    </article>
    @endforeach
</div>{{-- /#announcement-hub --}}
@endif

@if (!empty($href))
    <a href="{{ $href }}" class="{{ $classes }}">
@else
    <button type="{{ $buttonType }}" class="{{ $classes }}">
@endif
    @if (($icon ?? '') === 'google')
        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0" aria-hidden="true">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.27-4.75 3.27-8.1Z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.65l-3.57-2.77c-.99.66-2.25 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.15v2.84A11 11 0 0 0 12 23Z"/>
            <path fill="#FBBC05" d="M5.84 14.11a6.6 6.6 0 0 1 0-4.22V7.05H2.15a11 11 0 0 0 0 9.9l3.69-2.84Z"/>
            <path fill="#EA4335" d="M12 5.36c1.62 0 3.07.56 4.21 1.65l3.16-3.16C17.45 2.02 14.97 1 12 1a11 11 0 0 0-9.85 6.05l3.69 2.84C6.71 7.29 9.14 5.36 12 5.36Z"/>
        </svg>
    @elseif (($icon ?? '') === 'facebook')
        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0" aria-hidden="true">
            <circle cx="12" cy="12" r="10" fill="#1877F2"/>
            <path fill="#fff" d="M13.36 19v-6.38h2.14l.32-2.49h-2.46V8.54c0-.72.2-1.21 1.23-1.21h1.31V5.1c-.23-.03-1.02-.1-1.94-.1-1.92 0-3.23 1.17-3.23 3.32v1.81H8.56v2.49h2.17V19h2.63Z"/>
        </svg>
    @elseif (($icon ?? '') === 'arrow')
        <svg viewBox="0 0 20 20" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 10h12m-5-5 5 5-5 5"/>
        </svg>
    @endif
    <span>{{ $label }}</span>
@if (!empty($href))
    </a>
@else
    </button>
@endif

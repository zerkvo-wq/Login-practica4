<div>
    <label for="{{ $id }}" class="mb-2 flex items-center justify-between text-[13px] font-semibold text-slate-700">
        <span>{{ $label }}</span>
        @if (!empty($optional))
            <span class="text-[10px] font-normal text-slate-400">Opcional</span>
        @endif
    </label>
    <div class="relative">
        <input
            id="{{ $id }}"
            name="{{ $name }}"
            type="{{ $type }}"
            placeholder="{{ $placeholder }}"
            autocomplete="{{ $autocomplete }}"
            @if (!empty($required)) required @endif
            @if (!empty($toggle)) data-password-input @endif
            class="h-14 w-full rounded-lg border border-slate-200 bg-white px-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-300 hover:border-slate-300 focus:border-brand-primary focus:ring-2 focus:ring-brand-primary/10 @if (!empty($toggle)) pr-11 @endif"
        >
        @if (!empty($toggle))
            <button
                type="button"
                class="absolute inset-y-0 right-0 flex w-10 items-center justify-center text-slate-400 transition hover:text-slate-600"
                data-password-toggle
                aria-label="Mostrar contraseña"
                aria-controls="{{ $id }}"
                aria-pressed="false"
            >
                <svg data-password-show-icon viewBox="0 0 24 24" class="h-[18px] w-[18px]" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12s3.4-6 9.5-6 9.5 6 9.5 6-3.4 6-9.5 6-9.5-6-9.5-6Z"/>
                    <circle cx="12" cy="12" r="2.5"/>
                </svg>
                <svg data-password-hide-icon viewBox="0 0 24 24" class="hidden h-[18px] w-[18px]" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m3 3 18 18M10.6 6.2A9.8 9.8 0 0 1 12 6c6.1 0 9.5 6 9.5 6a15 15 0 0 1-3.1 3.6M6.2 6.8C3.8 8.3 2.5 12 2.5 12s3.4 6 9.5 6c1.2 0 2.3-.2 3.3-.6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/>
                </svg>
            </button>
        @endif
    </div>
</div>

@extends('layouts.app')

@section('title', 'Crear cuenta | Stitch IA')
@section('active-registro')
    active
@endsection

@section('content')
    <section class="mx-auto flex w-full max-w-6xl flex-1 items-center px-5 py-8 sm:px-8 sm:py-10 lg:px-10">
        <div class="grid w-full items-stretch gap-6 lg:grid-cols-[0.94fr_1.06fr] lg:gap-7">
            <aside class="flex flex-col rounded-2xl bg-brand-lavender p-6 sm:p-8 lg:p-9">
                <div class="mb-6 flex items-center gap-2.5">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-primary text-white">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" aria-hidden="true">
                            <path d="M12 2.75 14.3 9.7l6.95 2.3-6.95 2.3L12 21.25 9.7 14.3l-6.95-2.3L9.7 9.7 12 2.75Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <div>
                        <p class="font-display text-sm font-extrabold leading-tight text-slate-900">Stitch IA</p>
                        <p class="text-[10px] font-medium text-slate-500">Plataforma inteligente</p>
                    </div>
                </div>

                <p class="mb-2 text-[10px] font-bold uppercase tracking-[0.12em] text-brand-primary">Empieza hoy gratis</p>
                <h1 class="font-display text-[26px] font-extrabold leading-[1.18] tracking-tight text-slate-900 sm:text-[30px]">
                    Potencia tus flujos con inteligencia artificial avanzada.
                </h1>
                <p class="mt-3 text-xs leading-5 text-slate-600">
                    Únete a más de 12.000 organizaciones y profesionales que automatizan, sintetizan y optimizan procesos operativos cada día.
                </p>

                <figure class="relative mt-5 overflow-hidden rounded-xl bg-slate-200">
                    <img
                        src="{{ url('images/registro-hero.jpg') }}"
                        alt="Equipo colaborando en un espacio de trabajo moderno"
                        class="h-40 w-full object-cover sm:h-48"
                    >
                    <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/75 to-transparent px-3 pb-3 pt-8 text-[10px] font-medium text-white">
                        <span class="mr-1 inline-block h-1.5 w-1.5 rounded-full bg-white align-middle"></span>
                        Cumplimiento ISO y seguridad de nivel empresarial
                    </figcaption>
                </figure>

                <div class="mt-3 grid grid-cols-2 gap-3">
                    <div class="rounded-lg border border-white/80 bg-white/90 px-3 py-2.5">
                        <p class="font-display text-xl font-extrabold leading-none text-brand-primary">99.98%</p>
                        <p class="mt-1 text-[10px] text-slate-500">Disponibilidad SLA</p>
                    </div>
                    <div class="rounded-lg border border-white/80 bg-white/90 px-3 py-2.5">
                        <p class="font-display text-xl font-extrabold leading-none text-brand-primary">3.4x</p>
                        <p class="mt-1 text-[10px] text-slate-500">Velocidad de entrega</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center gap-3 rounded-lg border border-white/80 bg-white/90 p-3">
                    <span class="relative flex h-9 w-9 shrink-0 items-center justify-center overflow-hidden rounded-full bg-brand-lavender-strong text-[10px] font-bold text-brand-primary">
                        ES
                        <img src="{{ url('images/avatar-testimonial.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover" onerror="this.remove()">
                    </span>
                    <div class="min-w-0">
                        <p class="truncate text-[11px] font-bold text-slate-800">Elena Salgado</p>
                        <p class="truncate text-[10px] text-slate-500">Directora de Operaciones · Grupo Nova</p>
                    </div>
                </div>
            </aside>

            <section class="rounded-2xl border border-slate-100 bg-white p-6 shadow-card sm:p-8 lg:p-9" aria-labelledby="registro-titulo">
                <div class="mb-5">
                    <h2 id="registro-titulo" class="font-display text-2xl font-extrabold tracking-tight text-slate-900">Crear cuenta</h2>
                    <p class="mt-1 text-xs text-slate-500">Regístrate para comenzar</p>
                </div>

                <form method="POST" action="{{ url('/registro') }}" class="space-y-5">
                    @include('partials.input', [
                        'id' => 'nombre',
                        'name' => 'nombre',
                        'type' => 'text',
                        'label' => 'Nombre completo',
                        'placeholder' => 'Ej. María González',
                        'autocomplete' => 'name',
                        'required' => true,
                    ])

                    @include('partials.input', [
                        'id' => 'correo',
                        'name' => 'correo',
                        'type' => 'email',
                        'label' => 'Correo electrónico',
                        'placeholder' => 'maria@ejemplo.com',
                        'autocomplete' => 'email',
                        'required' => true,
                    ])

                    @include('partials.input', [
                        'id' => 'telefono',
                        'name' => 'telefono',
                        'type' => 'tel',
                        'label' => 'Teléfono (opcional)',
                        'placeholder' => '+34 600 000 000',
                        'autocomplete' => 'tel',
                        'optional' => true,
                    ])

                    @include('partials.input', [
                        'id' => 'contrasena',
                        'name' => 'contrasena',
                        'type' => 'password',
                        'label' => 'Contraseña',
                        'placeholder' => 'Mínimo 8 caracteres',
                        'autocomplete' => 'new-password',
                        'required' => true,
                        'toggle' => true,
                    ])
                    <p class="-mt-2 flex items-center justify-between gap-2 text-[11px] text-slate-400">
                        <span>Seguridad de cuenta</span>
                        <span>8+ caracteres, números y símbolos</span>
                    </p>

                    @include('partials.input', [
                        'id' => 'confirmar-contrasena',
                        'name' => 'confirmar_contrasena',
                        'type' => 'password',
                        'label' => 'Confirmar contraseña',
                        'placeholder' => 'Repite tu contraseña',
                        'autocomplete' => 'new-password',
                        'required' => true,
                        'toggle' => true,
                    ])

                    <label class="flex items-start gap-2 pt-1 text-[11px] leading-4 text-slate-500">
                        <input type="checkbox" name="acepta_terminos" required class="mt-0.5 h-3.5 w-3.5 shrink-0 rounded border-slate-300 text-brand-primary focus:ring-brand-primary">
                        <span>Acepto los <a href="#" class="font-semibold text-brand-primary underline underline-offset-2">términos y condiciones</a> y la <a href="#" class="font-semibold text-brand-primary underline underline-offset-2">política de privacidad</a>.</span>
                    </label>

                    @include('partials.button', [
                        'buttonType' => 'submit',
                        'classes' => 'flex h-11 w-full items-center justify-center gap-2 rounded-lg bg-brand-primary px-4 text-xs font-bold text-white transition hover:bg-brand-hover focus:outline-none focus:ring-2 focus:ring-brand-primary/30 focus:ring-offset-2',
                        'label' => 'Crear cuenta',
                        'icon' => 'arrow',
                    ])

                    <div class="flex items-center gap-3 py-0.5">
                        <span class="h-px flex-1 bg-slate-100"></span>
                        <span class="text-[10px] text-slate-400">o continúa con</span>
                        <span class="h-px flex-1 bg-slate-100"></span>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        @include('partials.button', [
                            'href' => '#',
                            'classes' => 'flex h-11 items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-2 text-[11px] font-semibold text-slate-600 transition hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-brand-primary/20',
                            'label' => 'Continuar con Google',
                            'icon' => 'google',
                        ])
                        @include('partials.button', [
                            'href' => '#',
                            'classes' => 'flex h-11 items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-2 text-[11px] font-semibold text-slate-600 transition hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-brand-primary/20',
                            'label' => 'Continuar con Facebook',
                            'icon' => 'facebook',
                        ])
                    </div>
                </form>

                <p class="mt-5 text-center text-[11px] text-slate-500">
                    ¿Ya tienes cuenta?
                    <a href="#" class="ml-1 font-bold text-brand-primary hover:text-brand-hover">Inicia sesión</a>
                </p>
            </section>
        </div>
    </section>

    <script>
        document.querySelectorAll('[data-password-toggle]').forEach(function (button) {
            button.addEventListener('click', function () {
                var input = document.getElementById(button.getAttribute('aria-controls'));
                var showingPassword = input.type === 'password';
                input.type = showingPassword ? 'text' : 'password';
                button.setAttribute('aria-label', showingPassword ? 'Ocultar contraseña' : 'Mostrar contraseña');
                button.setAttribute('aria-pressed', String(showingPassword));
                button.querySelector('[data-password-show-icon]').classList.toggle('hidden', showingPassword);
                button.querySelector('[data-password-hide-icon]').classList.toggle('hidden', !showingPassword);
            });
        });
    </script>
@endsection

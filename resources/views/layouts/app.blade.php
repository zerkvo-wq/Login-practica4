<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8f9fc">
    <title>@yield('title', 'Stitch IA | Portal de usuarios')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            primary: '#5146e5',
                            hover: '#4338ca',
                            lavender: '#eef0ff',
                            'lavender-strong': '#e4e7ff'
                        }
                    },
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Manrope', 'sans-serif']
                    },
                    boxShadow: {
                        card: '0 12px 35px -20px rgba(31, 41, 55, 0.24)'
                    }
                }
            }
        };
    </script>
</head>
<body class="min-h-screen bg-[#f8f9fc] font-sans text-slate-800 antialiased">
    <div class="flex min-h-screen flex-col">
        <header class="border-b border-slate-100 bg-white">
            <div class="mx-auto flex h-[68px] max-w-[1440px] items-center justify-between px-5 sm:px-8 lg:px-12">
                <a href="{{ url('/') }}" class="flex shrink-0 items-center gap-2.5" aria-label="Stitch IA, inicio">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-primary text-white">
                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" aria-hidden="true">
                            <path d="M12 2.75 14.3 9.7l6.95 2.3-6.95 2.3L12 21.25 9.7 14.3l-6.95-2.3L9.7 9.7 12 2.75Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span class="font-display text-base font-extrabold tracking-tight text-slate-900">Stitch IA</span>
                </a>

                <nav class="ml-auto flex items-center gap-1 sm:ml-0 sm:gap-2" aria-label="Navegación principal">
                    <a href="{{ url('/usuarios') }}" @hasSection('active-usuarios') aria-current="page" @endif class="@hasSection('active-usuarios') bg-brand-lavender text-brand-primary @else text-slate-500 hover:bg-slate-50 hover:text-slate-900 @endif rounded-lg px-3 py-2 text-xs font-semibold transition sm:px-4 sm:text-sm">Usuarios</a>
                    <a href="{{ url('/perfil') }}" @hasSection('active-perfil') aria-current="page" @endif class="@hasSection('active-perfil') bg-brand-lavender text-brand-primary @else text-slate-500 hover:bg-slate-50 hover:text-slate-900 @endif rounded-lg px-3 py-2 text-xs font-semibold transition sm:px-4 sm:text-sm">Perfil</a>
                    <a href="{{ url('/registro') }}" @hasSection('active-registro') aria-current="page" @endif class="@hasSection('active-registro') bg-brand-lavender text-brand-primary @else text-slate-500 hover:bg-slate-50 hover:text-slate-900 @endif rounded-lg px-3 py-2 text-xs font-semibold transition sm:px-4 sm:text-sm">Registro</a>
                </nav>

                <div class="ml-3 hidden items-center gap-2.5 sm:flex">
                    <span class="text-xs font-medium text-slate-600">Carlos Morales</span>
                    <span class="relative flex h-8 w-8 items-center justify-center overflow-hidden rounded-full bg-brand-lavender text-[10px] font-bold text-brand-primary" aria-label="Avatar de Carlos Morales">
                        CM
                        <img src="{{ url('images/avatar-admin.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover" onerror="this.remove()">
                    </span>
                    <svg viewBox="0 0 20 20" class="h-4 w-4 text-slate-400" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 7.47a.75.75 0 0 1 1.06 0L10 11.19l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </header>

        <main class="flex flex-1 flex-col">
            @yield('content')
        </main>

        <footer class="border-t border-slate-100 bg-white">
            <div class="mx-auto flex max-w-[1440px] flex-col gap-3 px-5 py-4 text-[11px] text-slate-400 sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12">
                <p>&copy; 2026 Stitch IA. Todos los derechos reservados.</p>
                <nav class="flex flex-wrap items-center gap-x-5 gap-y-2" aria-label="Enlaces del pie de página">
                    <a href="#" class="transition hover:text-slate-600">Privacidad</a>
                    <a href="#" class="transition hover:text-slate-600">Términos de servicio</a>
                    <a href="#" class="transition hover:text-slate-600">Soporte corporativo</a>
                </nav>
            </div>
        </footer>
    </div>
</body>
</html>

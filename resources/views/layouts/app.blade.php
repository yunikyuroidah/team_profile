<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelompok 3 — Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="stylesheet" href="{{ asset('input.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { Outfit: ['Outfit','sans-serif'], Ovo: ['Ovo','serif'] },
                    colors: { dark: '#0b1021', accent: '#6366f1' },
                }
            }
        }
    </script>

    <style>
        /* ---- Custom scrollbar ---- */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0b1021; }
        ::-webkit-scrollbar-thumb { background: #6366f1; border-radius: 9999px; }

        /* ---- Animated gradient background ---- */
        .bg-mesh {
            background:
                radial-gradient(ellipse 80% 50% at 20% 40%, rgba(99,102,241,.15), transparent),
                radial-gradient(ellipse 60% 60% at 80% 20%, rgba(139,92,246,.12), transparent),
                radial-gradient(ellipse 50% 70% at 50% 80%, rgba(59,130,246,.08), transparent),
                #0b1021;
        }

        /* ---- Floating stars / particles ---- */
        .stars { position: fixed; inset: 0; pointer-events: none; z-index: 0; overflow: hidden; }
        .stars span {
            position: absolute; border-radius: 50%; background: white;
            animation: twinkle var(--dur) ease-in-out infinite alternate;
            opacity: 0;
        }
        @keyframes twinkle { 0% { opacity: 0; transform: scale(.5); } 100% { opacity: var(--opa); transform: scale(1); } }

        /* ---- Scroll-reveal animations ---- */
        .reveal { opacity: 0; transform: translateY(40px); transition: all .8s cubic-bezier(.22,1,.36,1); }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-left { opacity: 0; transform: translateX(-60px); transition: all .8s cubic-bezier(.22,1,.36,1); }
        .reveal-left.visible { opacity: 1; transform: translateX(0); }
        .reveal-right { opacity: 0; transform: translateX(60px); transition: all .8s cubic-bezier(.22,1,.36,1); }
        .reveal-right.visible { opacity: 1; transform: translateX(0); }
        .reveal-scale { opacity: 0; transform: scale(.85); transition: all .7s cubic-bezier(.22,1,.36,1); }
        .reveal-scale.visible { opacity: 1; transform: scale(1); }

        /* ---- Stagger children ---- */
        .stagger-children > *:nth-child(1) { transition-delay: .05s; }
        .stagger-children > *:nth-child(2) { transition-delay: .15s; }
        .stagger-children > *:nth-child(3) { transition-delay: .25s; }
        .stagger-children > *:nth-child(4) { transition-delay: .35s; }
        .stagger-children > *:nth-child(5) { transition-delay: .45s; }
        .stagger-children > *:nth-child(6) { transition-delay: .55s; }

        /* ---- Glassmorphism card ---- */
        .glass {
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .glass-hover {
            transition: all .4s cubic-bezier(.22,1,.36,1);
        }
        .glass-hover:hover {
            background: rgba(255,255,255,.08);
            border-color: rgba(99,102,241,.3);
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(99,102,241,.1), 0 0 0 1px rgba(99,102,241,.15);
        }

        /* ---- Gradient text ---- */
        .gradient-text {
            background: linear-gradient(135deg, #818cf8 0%, #c084fc 50%, #f0abfc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ---- Glow ring ---- */
        .glow-ring {
            box-shadow: 0 0 0 0 rgba(99,102,241,.4);
            transition: box-shadow .4s ease;
        }
        .glow-ring:hover {
            box-shadow: 0 0 20px 4px rgba(99,102,241,.25);
        }

        /* ---- Navbar active indicator ---- */
        .nav-link { position: relative; }
        .nav-link::after {
            content: ''; position: absolute; bottom: -4px; left: 50%; width: 0; height: 2px;
            background: linear-gradient(90deg, #818cf8, #c084fc);
            border-radius: 2px; transition: all .3s ease; transform: translateX(-50%);
        }
        .nav-link:hover::after,
        .nav-link.active::after { width: 100%; }
        .nav-link.active { color: #a5b4fc; }

        /* ---- Pulse dot ---- */
        .pulse-dot {
            animation: pulse-ring 2s ease-out infinite;
        }
        @keyframes pulse-ring {
            0% { box-shadow: 0 0 0 0 rgba(99,102,241,.5); }
            70% { box-shadow: 0 0 0 10px rgba(99,102,241,0); }
            100% { box-shadow: 0 0 0 0 rgba(99,102,241,0); }
        }

        /* ---- Smooth page transition ---- */
        .page-enter { animation: pageIn .6s cubic-bezier(.22,1,.36,1) both; }
        @keyframes pageIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ---- Badge chip ---- */
        .badge {
            display: inline-block; padding: 2px 10px; border-radius: 9999px; font-size: .7rem;
            background: rgba(99,102,241,.15); color: #a5b4fc; border: 1px solid rgba(99,102,241,.25);
        }

        /* ---- Section divider glow ---- */
        .section-glow {
            position: relative;
        }
        .section-glow::before {
            content: ''; position: absolute; top: -1px; left: 50%; transform: translateX(-50%);
            width: 120px; height: 2px;
            background: linear-gradient(90deg, transparent, #6366f1, transparent);
        }
    </style>
</head>

<body class="font-Outfit leading-8 bg-mesh text-white min-h-screen relative overflow-x-hidden">

    <!-- Floating stars -->
    <div class="stars" id="stars"></div>

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 backdrop-blur-xl bg-[#0b1021]/70 border-b border-white/5 transition-all duration-500" id="mainNav">
        <div class="max-w-6xl mx-auto px-6 lg:px-10 flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-xs font-bold shadow-lg shadow-indigo-500/20 group-hover:shadow-indigo-500/40 transition-shadow">K3</div>
                <span class="font-semibold text-sm tracking-wide hidden sm:inline">Kelompok 3</span>
            </a>

            <!-- Nav links (desktop) -->
            <div class="hidden md:flex items-center gap-1">
                @php
                    $links = [
                        '/' => 'Beranda',
                        '/about' => 'Tentang',
                        '/biodata' => 'Biodata',
                        '/pendidikan' => 'Pendidikan',
                        '/experience' => 'Experience',
                    ];
                @endphp
                @foreach($links as $url => $label)
                    <a href="{{ $url }}"
                       class="nav-link px-4 py-2 text-sm text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5
                              {{ request()->is(ltrim($url,'/') ?: '/') ? 'active text-white' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            <!-- Mobile menu button -->
            <button onclick="toggleMobileNav()" class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-white/10 transition">
                <i class="fas fa-bars text-lg" id="menuIcon"></i>
            </button>
        </div>

        <!-- Mobile nav -->
        <div class="md:hidden overflow-hidden transition-all duration-500 max-h-0" id="mobileNav">
            <div class="px-6 pb-4 space-y-1">
                @foreach($links as $url => $label)
                    <a href="{{ $url }}"
                       class="block px-4 py-2 text-sm text-white/70 hover:text-white hover:bg-white/5 rounded-lg transition
                              {{ request()->is(ltrim($url,'/') ?: '/') ? 'text-white bg-white/5' : '' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="relative z-10 max-w-6xl mx-auto px-6 lg:px-10 py-12 page-enter">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 border-t border-white/5 mt-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-10 py-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded-md bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-[10px] font-bold">K3</div>
                    <span class="text-sm text-white/50">Kelompok 3 &mdash; Politeknik Negeri Jember</span>
                </div>
                <p class="text-xs text-white/30">&copy; {{ date('Y') }} All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

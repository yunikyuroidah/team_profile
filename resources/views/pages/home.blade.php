@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="min-h-[75vh] flex flex-col items-center justify-center text-center relative">
        <!-- Decorative rings -->
        <div class="absolute w-72 h-72 rounded-full border border-indigo-500/10 animate-[spin_40s_linear_infinite]"></div>
        <div class="absolute w-96 h-96 rounded-full border border-purple-500/5 animate-[spin_60s_linear_infinite_reverse]"></div>

        <!-- Profile image with glow -->
        <div class="reveal relative mb-8">
            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 blur-2xl opacity-30 scale-110"></div>
            <img src="{{ asset('assets/icon_kel.jpg') }}" alt="Profile"
                 class="relative rounded-full w-32 h-32 object-cover ring-2 ring-white/10 shadow-2xl glow-ring" />
            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-emerald-400 rounded-full border-2 border-[#0b1021] pulse-dot"></div>
        </div>

        <!-- Greeting badge -->
        <div class="reveal mb-6" style="transition-delay:.1s">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm text-white/80">
                <img src="{{ asset('assets/hand-icon.png') }}" alt="Wave" class="w-4 h-4 animate-[wave_2s_ease-in-out_infinite]" />
                Halo, Kami Dari Kelompok 3
            </span>
        </div>

        <!-- Main heading -->
        <h1 class="reveal text-4xl sm:text-6xl lg:text-7xl font-Ovo font-bold leading-tight mb-6" style="transition-delay:.2s">
            <span class="text-white">Team </span>
            <span class="gradient-text">Web & Mobile</span><br>
            <span class="text-white">Developer</span>
        </h1>

        <!-- Description -->
        <p class="reveal max-w-xl mx-auto text-white/50 text-base leading-relaxed font-light mb-10" style="transition-delay:.3s">
            Kami adalah tim pengembang yang membangun aplikasi web dan mobile berbasis kebutuhan nyata, dengan pendekatan terstruktur, kolaboratif, dan siap digunakan secara profesional.
        </p>

        <!-- CTA buttons -->
        <div class="reveal flex flex-wrap items-center justify-center gap-4" style="transition-delay:.4s">
            <a href="/biodata"
               class="group inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-medium
                      shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-105 transition-all duration-300">
                Kenali Tim Kami
                <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/experience"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-white/80 text-sm font-medium
                      hover:bg-white/10 hover:border-white/20 hover:scale-105 transition-all duration-300">
                <i class="fas fa-briefcase text-xs text-indigo-400"></i>
                Lihat Proyek
            </a>
        </div>

        <!-- Stats row -->
        <div class="reveal mt-16 flex items-center gap-8 md:gap-12" style="transition-delay:.5s">
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">4</div>
                <div class="text-xs text-white/40 mt-1">Anggota</div>
            </div>
            <div class="w-px h-8 bg-white/10"></div>
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">4+</div>
                <div class="text-xs text-white/40 mt-1">Proyek</div>
            </div>
            <div class="w-px h-8 bg-white/10"></div>
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text">10+</div>
                <div class="text-xs text-white/40 mt-1">Sertifikat</div>
            </div>
        </div>
    </div>

    <!-- Tech stack ribbon -->
    <div class="reveal mt-8 mb-4">
        <p class="text-center text-xs text-white/30 uppercase tracking-widest mb-6">Tech Stack</p>
        <div class="flex items-center justify-center gap-6 flex-wrap opacity-50">
            <img src="{{ asset('assets/firebase.png') }}" alt="Firebase" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="Firebase">
            <img src="{{ asset('assets/react.svg') }}" alt="React" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="React">
            <img src="{{ asset('assets/git.png') }}" alt="Git" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="Git">
            <img src="{{ asset('assets/mongodb.png') }}" alt="MongoDB" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="MongoDB">
            <img src="{{ asset('assets/vscode.png') }}" alt="VS Code" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="VS Code">
            <img src="{{ asset('assets/figma.png') }}" alt="Figma" class="h-8 hover:opacity-100 transition grayscale hover:grayscale-0" title="Figma">
        </div>
    </div>
@endsection
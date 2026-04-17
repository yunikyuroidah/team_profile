@extends('layouts.app')

@section('content')
    <!-- About Section -->
    <div class="py-10">
        <!-- Section header -->
        <div class="text-center mb-16 reveal">
            <span class="badge mb-4">Pendahuluan</span>
            <h2 class="text-4xl sm:text-5xl font-Ovo font-bold mt-3">
                Tentang <span class="gradient-text">Kami</span>
            </h2>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto mt-4"></div>
        </div>

        <!-- Main about card -->
        <div class="max-w-3xl mx-auto reveal" style="transition-delay:.1s">
            <div class="glass rounded-2xl p-8 md:p-12 glass-hover relative overflow-hidden">
                <!-- Decorative corner -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-indigo-500/10 to-transparent rounded-bl-full"></div>

                <div class="relative">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-users text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold">Siapa Kami?</h3>
                    </div>
                    <p class="text-white/60 leading-relaxed text-[15px]">
                        Tim kami terbentuk melalui pembelajaran berbasis proyek di
                        <span class="text-indigo-300 font-medium">Politeknik Negeri Jember</span>.
                        Dengan kombinasi keahlian frontend, backend, database, dan mobile development,
                        kami mengerjakan sistem nyata yang digunakan langsung oleh pengguna.
                    </p>
                </div>
            </div>
        </div>

        <!-- Feature cards -->
        <div class="max-w-3xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 stagger-children">
            <div class="glass rounded-xl p-6 text-center glass-hover reveal">
                <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-code text-indigo-400 text-lg"></i>
                </div>
                <h4 class="font-semibold text-sm mb-2">Web Development</h4>
                <p class="text-xs text-white/40">Laravel, React, TypeScript, Tailwind CSS</p>
            </div>
            <div class="glass rounded-xl p-6 text-center glass-hover reveal">
                <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mobile-alt text-purple-400 text-lg"></i>
                </div>
                <h4 class="font-semibold text-sm mb-2">Mobile Apps</h4>
                <p class="text-xs text-white/40">Java, Android Studio, Firebase</p>
            </div>
            <div class="glass rounded-xl p-6 text-center glass-hover reveal">
                <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-database text-blue-400 text-lg"></i>
                </div>
                <h4 class="font-semibold text-sm mb-2">Database & Cloud</h4>
                <p class="text-xs text-white/40">MySQL, Firebase, MongoDB</p>
            </div>
        </div>

        <!-- Mission statement -->
        <div class="max-w-3xl mx-auto mt-8 reveal" style="transition-delay:.2s">
            <div class="glass rounded-2xl p-8 glass-hover text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/5 via-purple-500/5 to-pink-500/5"></div>
                <div class="relative">
                    <i class="fas fa-quote-left text-2xl text-indigo-500/30 mb-4"></i>
                    <p class="text-white/60 text-sm italic leading-relaxed max-w-xl mx-auto">
                        "Membangun solusi digital yang berdampak nyata melalui kolaborasi, inovasi, dan pembelajaran berkelanjutan."
                    </p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <div class="w-8 h-px bg-gradient-to-r from-transparent to-indigo-500/50"></div>
                        <span class="text-xs text-white/30">Kelompok 3</span>
                        <div class="w-8 h-px bg-gradient-to-l from-transparent to-indigo-500/50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
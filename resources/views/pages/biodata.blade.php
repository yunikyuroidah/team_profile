@extends('layouts.app')

@section('content')
    <!-- Biodata Section -->
    <div class="py-10">
        <!-- Section header -->
        <div class="text-center mb-16 reveal">
            <span class="badge mb-4">Tim Kami</span>
            <h2 class="text-4xl sm:text-5xl font-Ovo font-bold mt-3">
                <span class="gradient-text">Biodata</span> Anggota
            </h2>
            <p class="max-w-lg mx-auto mt-4 text-white/40 text-sm">Kenali lebih dekat anggota tim pengembang kami.</p>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto mt-4"></div>
        </div>

        @php
            $members = [
                [
                    'name' => 'Yunik Yuroidah',
                    'img' => 'yunik.png',
                    'asal' => 'Gresik',
                    'usia' => '21',
                    'gender' => 'Perempuan',
                    'role' => 'Backend Developer',
                    'icon' => 'fa-code',
                    'color' => 'indigo',
                ],
                [
                    'name' => 'Refita Intan Aulia Nafisa',
                    'img' => 'refita.png',
                    'asal' => 'Probolinggo',
                    'usia' => '20',
                    'gender' => 'Perempuan',
                    'role' => 'Frontend Developer',
                    'icon' => 'fa-palette',
                    'color' => 'purple',
                ],
                [
                    'name' => 'Aditya Wisnu Pratama',
                    'img' => 'WhatsApp Image 2026-02-10 at 08.24.06.png',
                    'asal' => 'Blitar',
                    'usia' => '20',
                    'gender' => 'Laki-laki',
                    'role' => 'Backend Developer',
                    'icon' => 'fa-code',
                    'color' => 'blue',
                ],
                [
                    'name' => 'Muhammad Ferdi Syahrazan',
                    'img' => 'ferdi.png',
                    'asal' => 'Spande',
                    'usia' => '20',
                    'gender' => 'Laki-laki',
                    'role' => 'Database engineer',
                    'icon' => 'fa-database',
                    'color' => 'emerald',
                ],
            ];
        @endphp

        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
            @foreach($members as $m)
                <div class="reveal glass rounded-2xl overflow-hidden glass-hover group">
                    <div class="p-6">
                        <div class="flex items-start gap-5">
                            <!-- Photo -->
                            <div class="relative flex-shrink-0">
                                <div class="absolute -inset-1 bg-gradient-to-br from-{{ $m['color'] }}-500/30 to-transparent rounded-xl blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <img src="{{ asset('assets/' . $m['img']) }}" alt="{{ $m['name'] }}"
                                     class="relative w-24 h-24 rounded-xl object-cover ring-1 ring-white/10 group-hover:ring-{{ $m['color'] }}-500/30 transition-all duration-500">
                            </div>

                            <!-- Info -->
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-semibold text-lg truncate">{{ $m['name'] }}</h3>
                                </div>
                                <div class="flex items-center gap-2 mb-4">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-{{ $m['color'] }}-500/10 text-{{ $m['color'] }}-400 border border-{{ $m['color'] }}-500/20">
                                        <i class="fas {{ $m['icon'] }} text-[8px]"></i>
                                        {{ $m['role'] }}
                                    </span>
                                </div>

                                <div class="space-y-1.5 text-sm">
                                    <div class="flex items-center gap-2 text-white/50">
                                        <i class="fas fa-map-marker-alt text-xs w-4 text-center text-{{ $m['color'] }}-400/60"></i>
                                        <span>{{ $m['asal'] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-white/50">
                                        <i class="fas fa-birthday-cake text-xs w-4 text-center text-{{ $m['color'] }}-400/60"></i>
                                        <span>{{ $m['usia'] }} tahun</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-white/50">
                                        <i class="fas fa-{{ $m['gender'] === 'Perempuan' ? 'venus' : 'mars' }} text-xs w-4 text-center text-{{ $m['color'] }}-400/60"></i>
                                        <span>{{ $m['gender'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom accent line -->
                    <div class="h-0.5 bg-gradient-to-r from-{{ $m['color'] }}-500/0 via-{{ $m['color'] }}-500/40 to-{{ $m['color'] }}-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
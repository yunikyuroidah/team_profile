@extends('layouts.app')

@section('content')
    <!-- Experience Section -->
    <div class="py-10">
        <!-- Section header -->
        <div class="text-center mb-16 reveal">
            <span class="badge mb-4">Achievements & Projects</span>
            <h2 class="text-4xl sm:text-5xl font-Ovo font-bold mt-3">
                Prestasi & <span class="gradient-text">Experience</span>
            </h2>
            <p class="max-w-lg mx-auto mt-4 text-white/40 text-sm">
                Ringkasan prestasi anggota tim, sertifikasi pribadi, serta proyek yang kami kembangkan.
            </p>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto mt-4"></div>
        </div>

        @php
            $cards = [
                'yunik'  => ['nama' => 'Yunik Yuroidah',              'sub' => 'Sertifikasi & Pengalaman',  'color' => 'indigo', 'icon' => 'fa-certificate'],
                'aditya' => ['nama' => 'Aditya Wisnu Pratama',         'sub' => 'Prestasi & Sertifikat',     'color' => 'blue',   'icon' => 'fa-award'],
                'ferdi'  => ['nama' => 'Muhammad Ferdi Syahrazan',     'sub' => 'Prestasi & Sertifikat',     'color' => 'emerald','icon' => 'fa-trophy'],
                'refita' => ['nama' => 'Refita Intan Aulia Nafisa',    'sub' => 'Prestasi & Sertifikat',     'color' => 'purple', 'icon' => 'fa-star'],
            ];
        @endphp

        <!-- Prestasi & Sertifikasi cards -->
        <div class="reveal mb-6">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-8 h-8 rounded-lg bg-yellow-500/10 flex items-center justify-center">
                    <i class="fas fa-trophy text-yellow-400 text-sm"></i>
                </div>
                <h3 class="text-xl font-semibold">Prestasi & Sertifikasi</h3>
            </div>
            <p class="text-sm text-white/30 ml-11">Sertifikat, badge, dan pengalaman tim — kelola langsung di kartu.</p>
        </div>

        <div class="grid gap-6 grid-cols-1 md:grid-cols-2 stagger-children">
            @foreach($cards as $key => $card)
                <div class="reveal glass rounded-2xl overflow-hidden glass-hover group">
                    <div class="p-6 space-y-5">
                        <!-- Card header -->
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-{{ $card['color'] }}-500/10 flex items-center justify-center group-hover:bg-{{ $card['color'] }}-500/20 transition-colors">
                                <i class="fas {{ $card['icon'] }} text-{{ $card['color'] }}-400"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-base">{{ $card['nama'] }}</h3>
                                <p class="text-xs text-white/40">{{ $card['sub'] }}</p>
                            </div>
                        </div>

                        <!-- Existing items -->
                        <div class="space-y-2">
                            @foreach($prestasi[$key] ?? [] as $i => $item)
                                <div class="flex items-center gap-2 bg-white/[.03] border border-white/5 rounded-xl px-3 py-2 hover:border-{{ $card['color'] }}-500/20 transition-colors group/item"
                                     data-item-id="{{ $key }}-{{ $i }}">
                                    <span class="text-yellow-400 text-sm">🏆</span>
                                    
                                    <!-- View mode (default) -->
                                    <div class="flex-1 flex items-center gap-2 view-mode">
                                        <span class="text-sm text-white/70">{{ $item }}</span>
                                    </div>
                                    
                                    <!-- Edit mode (hidden by default) -->
                                    <form method="POST" action="/experience/{{ $key }}/update/{{ $i }}" 
                                          class="flex-1 items-center gap-2 edit-mode hidden">
                                        @csrf
                                        <input name="text" value="{{ $item }}"
                                               class="flex-1 bg-white/5 border border-{{ $card['color'] }}-500/30 rounded-lg px-3 py-1.5 text-sm text-white placeholder:text-white/30 focus:outline-none focus:border-{{ $card['color'] }}-500/50 transition-colors">
                                        <button type="submit"
                                                class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 text-[10px] px-2.5 py-1 rounded-lg hover:bg-emerald-500/20 transition-all font-medium whitespace-nowrap">
                                            <i class="fas fa-check mr-1"></i>Simpan
                                        </button>
                                    </form>

                                    <!-- Action buttons -->
                                    <div class="flex items-center gap-1">
                                        <button onclick="toggleEditMode('{{ $key }}-{{ $i }}')" type="button"
                                                class="edit-btn opacity-0 group-hover/item:opacity-100 bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 text-[10px] px-2.5 py-1 rounded-lg hover:bg-emerald-500/20 transition-all font-medium">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button onclick="cancelEdit('{{ $key }}-{{ $i }}')" type="button"
                                                class="cancel-btn hidden bg-gray-500/10 text-gray-400 border border-gray-500/20 text-[10px] px-2.5 py-1 rounded-lg hover:bg-gray-500/20 transition-all font-medium">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <form method="POST" action="/experience/{{ $key }}/delete/{{ $i }}" class="inline">
                                            @csrf
                                            <button type="submit"
                                                    class="opacity-0 group-hover/item:opacity-100 bg-red-500/10 text-red-400 border border-red-500/20 text-[10px] px-2.5 py-1 rounded-lg hover:bg-red-500/20 transition-all font-medium">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Add form -->
                        <form method="POST" action="/experience/{{ $key }}/add" class="flex items-center gap-2">
                            @csrf
                            <input name="text" placeholder="Tambah prestasi baru..."
                                   class="flex-1 bg-white/[.03] border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white placeholder:text-white/30 focus:outline-none focus:border-{{ $card['color'] }}-500/30 transition-colors">
                            <button type="submit"
                                    class="bg-{{ $card['color'] }}-500/10 text-{{ $card['color'] }}-400 border border-{{ $card['color'] }}-500/20 text-xs px-4 py-2.5 rounded-xl hover:bg-{{ $card['color'] }}-500/20 transition-all font-medium flex items-center gap-1.5">
                                <i class="fas fa-plus text-[10px]"></i>
                                Tambah
                            </button>
                        </form>
                    </div>

                    <!-- Bottom accent -->
                    <div class="h-0.5 bg-gradient-to-r from-{{ $card['color'] }}-500/0 via-{{ $card['color'] }}-500/30 to-{{ $card['color'] }}-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            @endforeach
        </div>

        <!-- ── Project Experience ── -->
        <div class="mt-20 section-glow pt-10">
            <div class="reveal mb-8">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center">
                        <i class="fas fa-rocket text-blue-400 text-sm"></i>
                    </div>
                    <h3 class="text-xl font-semibold">Project Experience</h3>
                </div>
                <p class="text-sm text-white/30 ml-11">Proyek yang kami pimpin dan kontribusikan selama studi.</p>
            </div>

            @php
                $projects = [
                    [
                        'title' => 'SamiraTourLink (Web)',
                        'year'  => '2025',
                        'role'  => 'Ketua Tim',
                        'tech'  => ['TypeScript','Firebase','PHP','MySQL'],
                        'color' => 'indigo',
                        'items' => [
                            'Merancang arsitektur web dua versi: TypeScript + Firebase (produksi) dan PHP + MySQL (pengayaan backend).',
                            'Membangun dashboard manajemen jamaah dan paket umroh dengan React + Tailwind CSS.',
                            'Integrasi database Firebase untuk akses data online dan real-time.',
                        ],
                    ],
                    [
                        'title' => 'SamiraTourLink (Android)',
                        'year'  => '2025',
                        'role'  => 'Ketua Tim',
                        'tech'  => ['Java','Firebase'],
                        'color' => 'emerald',
                        'items' => [
                            'Merancang aplikasi admin Android untuk pembaruan data paket dan informasi jamaah.',
                            'Membangun antarmuka kontrol data yang efisien untuk staf operasional.',
                            'Integrasi Firebase untuk sinkronisasi real-time dengan platform web.',
                        ],
                    ],
                    [
                        'title' => 'Warung Ranisa POS',
                        'year'  => '2024',
                        'role'  => 'Ketua Tim',
                        'tech'  => ['Java','MySQL'],
                        'color' => 'purple',
                        'items' => [
                            'Merancang modul kasir, manajemen stok, dan laporan penjualan harian.',
                            'Membangun antarmuka desktop yang ramah bagi operator non-teknis.',
                            'Deploy lokal dengan konfigurasi database multi-user untuk operasional toko.',
                        ],
                    ],
                    [
                        'title' => 'RA AR-ROUDLOH School System',
                        'year'  => '2024',
                        'role'  => 'Ketua Tim',
                        'tech'  => ['Java','MySQL'],
                        'color' => 'pink',
                        'items' => [
                            'Mengimplementasikan akses role-based untuk admin dan guru.',
                            'Mengotomasi laporan akademik dan keuangan ke dalam satu panel terpadu.',
                            'Melatih staf internal agar mampu melakukan pembaruan mandiri pada sistem.',
                        ],
                    ],
                ];
            @endphp

            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 stagger-children">
                @foreach($projects as $p)
                    <div class="reveal glass rounded-2xl overflow-hidden glass-hover group">
                        <div class="p-6">
                            <!-- Project header -->
                            <div class="flex items-start justify-between mb-4">
                                <div>
                                    <h4 class="font-semibold text-lg mb-1 group-hover:text-{{ $p['color'] }}-300 transition-colors">{{ $p['title'] }}</h4>
                                    <div class="flex items-center gap-2 text-xs text-white/40">
                                        <span class="badge">{{ $p['role'] }}</span>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-{{ $p['color'] }}-400/60 bg-{{ $p['color'] }}-500/10 px-2.5 py-1 rounded-lg">{{ $p['year'] }}</span>
                            </div>

                            <!-- Tech badges -->
                            <div class="flex flex-wrap gap-1.5 mb-4">
                                @foreach($p['tech'] as $t)
                                    <span class="text-[10px] px-2 py-0.5 rounded-md bg-white/5 text-white/40 border border-white/5">{{ $t }}</span>
                                @endforeach
                            </div>

                            <!-- Bullet points -->
                            <ul class="space-y-2">
                                @foreach($p['items'] as $item)
                                    <li class="flex items-start gap-2 text-sm text-white/50 leading-relaxed">
                                        <i class="fas fa-chevron-right text-[8px] text-{{ $p['color'] }}-500/50 mt-2 flex-shrink-0"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Bottom accent -->
                        <div class="h-0.5 bg-gradient-to-r from-{{ $p['color'] }}-500/0 via-{{ $p['color'] }}-500/30 to-{{ $p['color'] }}-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function toggleEditMode(itemId) {
            const item = document.querySelector(`[data-item-id="${itemId}"]`);
            if (!item) return;

            const viewMode = item.querySelector('.view-mode');
            const editMode = item.querySelector('.edit-mode');
            const editBtn = item.querySelector('.edit-btn');
            const cancelBtn = item.querySelector('.cancel-btn');

            viewMode.classList.add('hidden');
            editMode.classList.remove('hidden');
            editMode.classList.add('flex');
            editBtn.classList.add('hidden');
            cancelBtn.classList.remove('hidden');
        }

        function cancelEdit(itemId) {
            const item = document.querySelector(`[data-item-id="${itemId}"]`);
            if (!item) return;

            const viewMode = item.querySelector('.view-mode');
            const editMode = item.querySelector('.edit-mode');
            const editBtn = item.querySelector('.edit-btn');
            const cancelBtn = item.querySelector('.cancel-btn');

            viewMode.classList.remove('hidden');
            editMode.classList.add('hidden');
            editMode.classList.remove('flex');
            editBtn.classList.remove('hidden');
            cancelBtn.classList.add('hidden');
        }
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <!-- Pendidikan Section -->
    <div class="py-10">
        <!-- Section header -->
        <div class="text-center mb-16 reveal">
            <span class="badge mb-4">Education</span>
            <h2 class="text-4xl sm:text-5xl font-Ovo font-bold mt-3">
                Riwayat <span class="gradient-text">Pendidikan</span>
            </h2>
            <p class="max-w-lg mx-auto mt-4 text-white/40 text-sm">Daftar riwayat pendidikan anggota tim.</p>
            <div class="w-16 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto mt-4"></div>
        </div>

        @php
            $education = [
                [
                    'name' => 'Muhammad Ferdi Syahrazan',
                    'icon' => 'fa-graduation-cap',
                    'color' => 'indigo',
                    'items' => [
                        ['year' => '2024 - Sekarang', 'school' => 'Politeknik Negeri Jember', 'active' => true],
                        ['year' => '2021 - 2024', 'school' => 'SMAN 2 Sidoarjo'],
                        ['year' => '2018 - 2021', 'school' => 'MTSN 1 Sidoarjo'],
                        ['year' => '2012 - 2018', 'school' => 'MI Thoriqussalam Sidoarjo'],
                    ]
                ],
                [
                    'name' => 'Yunik Yuroidah',
                    'icon' => 'fa-graduation-cap',
                    'color' => 'purple',
                    'items' => [
                        ['year' => '2024 - Sekarang', 'school' => 'Politeknik Negeri Jember', 'active' => true],
                        ['year' => '2021 - 2023', 'school' => 'SMAN 1 Manyar Gresik'],
                        ['year' => '2019 - 2021', 'school' => 'SMPN 3 Gresik'],
                        ['year' => '2014 - 2019', 'school' => 'SDN 7 Sidokumpul Gresik'],
                    ]
                ],
                [
                    'name' => 'Refita Intan Aulia Nafisa',
                    'icon' => 'fa-graduation-cap',
                    'color' => 'pink',
                    'items' => [
                        ['year' => '2024 - Sekarang', 'school' => 'Politeknik Negeri Jember', 'active' => true],
                        ['year' => '2021 - 2024', 'school' => 'MAN 2 Kota Probolinggo'],
                        ['year' => '2018 - 2021', 'school' => 'SMPN 1 Sumberasih'],
                        ['year' => '2012 - 2018', 'school' => 'SDN Ambulu 1'],
                    ]
                ],
                [
                    'name' => 'Aditya Wisnu Pratama',
                    'icon' => 'fa-graduation-cap',
                    'color' => 'blue',
                    'items' => [
                        ['year' => '2024 - Sekarang', 'school' => 'Politeknik Negeri Jember', 'active' => true],
                        ['year' => '2021 - 2024', 'school' => 'SMK Islam 1 Blitar'],
                        ['year' => '2018 - 2021', 'school' => 'SMPN 1 Ponggok'],
                        ['year' => '2012 - 2018', 'school' => 'SDN Srengat 1'],
                    ]
                ],
            ];
        @endphp

        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
            @foreach($education as $edu)
                <div class="reveal glass rounded-2xl overflow-hidden glass-hover group">
                    <div class="p-6">
                        <!-- Name header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-xl bg-{{ $edu['color'] }}-500/10 flex items-center justify-center group-hover:bg-{{ $edu['color'] }}-500/20 transition-colors">
                                <i class="fas {{ $edu['icon'] }} text-{{ $edu['color'] }}-400"></i>
                            </div>
                            <h3 class="font-semibold text-base">{{ $edu['name'] }}</h3>
                        </div>

                        <!-- Timeline -->
                        <div class="relative pl-6 space-y-4">
                            <!-- Vertical line -->
                            <div class="absolute left-[7px] top-2 bottom-2 w-px bg-gradient-to-b from-{{ $edu['color'] }}-500/40 to-transparent"></div>

                            @foreach($edu['items'] as $item)
                                <div class="relative flex items-start gap-3">
                                    <!-- Dot -->
                                    <div class="absolute -left-6 top-1.5 w-3.5 h-3.5 rounded-full border-2 border-{{ $edu['color'] }}-500/40 {{ isset($item['active']) ? 'bg-' . $edu['color'] . '-500 pulse-dot' : 'bg-dark' }}"></div>
                                    <div class="flex-1">
                                        <p class="text-xs text-{{ $edu['color'] }}-400/70 font-medium">{{ $item['year'] }}</p>
                                        <p class="text-sm text-white/70 mt-0.5">{{ $item['school'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Bottom accent -->
                    <div class="h-0.5 bg-gradient-to-r from-{{ $edu['color'] }}-500/0 via-{{ $edu['color'] }}-500/30 to-{{ $edu['color'] }}-500/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
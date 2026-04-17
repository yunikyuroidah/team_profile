<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| PAGE ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('pages.home'));
Route::get('/about', fn() => view('pages.about'));
Route::get('/biodata', fn() => view('pages.biodata'));
Route::get('/pendidikan', fn() => view('pages.pendidikan'));

$defaultPrestasi = [
    'yunik' => [
        'IBM — Artificial Intelligence Fundamentals (Certificate of Completion, Des 2025).',
        'IBM — Mastering the Art of Prompting & Supervised Machine Learning with Scikit-Learn (Des 2025).',
        'Google Cloud — Badges: Vector Search & Embeddings; Introduction to Vertex AI Studio; Create Image Captioning Models; Transformer Models & BERT; Encoder-Decoder Architecture; Attention Mechanism (Jan–Feb 2026).',
        'Magang: Automation Engineer (Dinas KBPPPA Gresik Bidang Perlindungan Anak) — pengalaman kerja praktek / magang.',
    ],
    'aditya' => [
        'Juara 1 Lomba Pengembangan Aplikasi Web Kota Sidoarjo 2024.',
        'Sertifikat: AWS Cloud Practitioner (Nov 2024).',
        'Sertifikat: Kursus UI/UX dasar (2023).',
    ],
    'ferdi' => [
        'Runner up RUHC Unesa 2023.',
    ],
    'refita' => [
        'Kontributor proyek komunitas — modul dokumentasi dan tutorial (2024).',
        'Sertifikat: Pemrograman Java Lanjut (2022).',
        'Finalis lomba sistem informasi desa tingkat provinsi (2024).',
    ],
];

Route::get('/experience', function () use ($defaultPrestasi) {
    $members = array_keys($defaultPrestasi);
    $prestasi = [];

    foreach ($members as $member) {
        $key = "prestasi_{$member}";
        $prestasi[$member] = session($key, $defaultPrestasi[$member]);
        // Ensure session initializes with defaults on first load
        session([$key => $prestasi[$member]]);
    }

    return view('pages.experience', [
        'prestasi' => $prestasi,
    ]);
});

// Login halaman masih ada rutenya jika dibutuhkan langsung lewat URL
Route::get('/login', fn() => view('pages.login'));


/*
|--------------------------------------------------------------------------
| SIMPLE CRUD WITHOUT DATABASE (SESSION BASED)
|--------------------------------------------------------------------------
*/

Route::post('/experience/{member}/add', function (Request $request, $member) use ($defaultPrestasi) {
    $request->validate(['text' => 'required']);

    $members = array_keys($defaultPrestasi);
    if (!in_array($member, $members)) {
        abort(404);
    }

    $key = "prestasi_{$member}";
    $data = session($key, $defaultPrestasi[$member]);
    $data[] = $request->text;

    session([$key => $data]);

    return back();
});

Route::post('/experience/{member}/update/{index}', function (Request $request, $member, $index) use ($defaultPrestasi) {
    $request->validate(['text' => 'required']);

    $members = array_keys($defaultPrestasi);
    if (!in_array($member, $members)) {
        abort(404);
    }

    $key = "prestasi_{$member}";
    $data = session($key, $defaultPrestasi[$member]);

    if (isset($data[$index])) {
        $data[$index] = $request->text;
        session([$key => $data]);
    }

    return back();
});

Route::post('/experience/{member}/delete/{index}', function (Request $request, $member, $index) use ($defaultPrestasi) {
    $members = array_keys($defaultPrestasi);
    if (!in_array($member, $members)) {
        abort(404);
    }

    $key = "prestasi_{$member}";
    $data = session($key, $defaultPrestasi[$member]);

    if (isset($data[$index])) {
        unset($data[$index]);
        session([$key => array_values($data)]);
    }

    return back();
});

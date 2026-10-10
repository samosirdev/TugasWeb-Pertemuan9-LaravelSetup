<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route 1: Home (data dinamis dari route)
Route::get('/', function () {
    return view('home', [
        'nama'   => 'Holan Kristian Samosir',
        'matkul' => 'Pemrograman Web',
    ]);
});

// Route 2: About (array asosiatif dari route)
Route::get('/about', function () {
    $profil = [
        'nama'   => 'Holan Kristian Samosir',
        'nim'    => '4253550015',
        'kelas'  => 'PSIK 25 B',
        'prodi'  => 'Ilmu Komputer',
        'kampus' => 'Universitas Negeri Medan',
        'ringkasan' => 'Saya adalah mahasiswa Ilmu Komputer di Universitas Negeri Medan yang berusia 18 tahun. '
                         . 'Saya sangat menyukai kegiatan membaca buku karena membaca membuka wawasan baru, '
                         . 'melatih cara berpikir, dan menjadi sumber inspirasi bagi saya. '
                         . 'Saat ini saya terus belajar dan mengembangkan kemampuan di bidang pemrograman.',
    ];
    return view('about', compact('profil'));
});

// Route 3: Contact (array dinamis di-loop di Blade)
Route::get('/contact', function () {
    $kontak = [
        'Email'     => 'holansamosir03@gmail.com',
        'Instagram' => '@holansmsrr',
        'GitHub'    => 'github.com/samosirdev',
    ];
    return view('contact', compact('kontak'));
});

// Route ke Controller (Langkah 6)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// BONUS: route parameter
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, " . e($nama) . "! Selamat datang di Laravel.";
});

<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function dataBio(): array
    {
        return [
            'nama'      => 'Holan Kristian Samosir',
            'nim'       => '4253550015',
            'kelas'     => 'PSIK 25B',
            'prodi'     => 'Ilmu Komputer',
            'kampus'    => 'Universitas Negeri Medan',
            'umur'      => 18,
            'hobi'      => ['Membaca Buku'],
            'ringkasan' => 'Saya adalah mahasiswa Ilmu Komputer di Universitas Negeri Medan yang berusia 18 tahun. '
                         . 'Saya sangat menyukai kegiatan membaca buku karena membaca membuka wawasan baru, '
                         . 'melatih cara berpikir, dan menjadi sumber inspirasi bagi saya. '
                         . 'Saat ini saya terus belajar dan mengembangkan kemampuan di bidang pemrograman.',
        ];
    }

    public function index()
    {
        $bio = $this->dataBio();
        return view('mahasiswa', compact('bio'));
    }

    public function about()
    {
        $bio = $this->dataBio();
        return view('about', compact('bio'));
    }
}
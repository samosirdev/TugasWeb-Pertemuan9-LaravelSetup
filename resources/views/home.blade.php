@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1 class="text-4xl font-bold mb-4">Selamat Datang, {{ $nama }}!</h1>
    <p class="text-slate-300">Ini adalah halaman beranda dari project Laravel Setup (Tugas Rutin 9).</p>
    <p class="mt-2 text-slate-400">Mata Kuliah: {{ $matkul }}</p>
@endsection
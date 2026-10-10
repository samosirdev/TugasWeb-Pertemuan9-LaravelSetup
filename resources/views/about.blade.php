@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="relative overflow-hidden rounded-3xl bg-slate-800 shadow-2xl ring-1 ring-slate-700">

        {{-- Banner gradien --}}
        <div class="h-40 bg-gradient-to-r from-pink-500 via-fuchsia-600 to-indigo-600"></div>

        <div class="px-8 pb-10">

            {{-- Avatar inisial --}}
            <div class="-mt-16 flex flex-col items-center sm:flex-row sm:items-end sm:gap-6">
                <div class="flex h-32 w-32 items-center justify-center rounded-full bg-slate-900 text-4xl font-extrabold text-pink-400 ring-4 ring-slate-800 shadow-xl">
                    {{ collect(explode(' ', $profil['nama']))->take(2)->map(fn ($k) => strtoupper(substr($k, 0, 1)))->implode('') }}
                </div>

                <div class="mt-4 text-center sm:mb-2 sm:mt-0 sm:text-left">
                    <h1 class="text-3xl font-extrabold tracking-tight">{{ $profil['nama'] }}</h1>
                    <p class="text-pink-400 font-medium">Mahasiswa {{ $profil['prodi'] }}</p>
                </div>
            </div>

            {{-- Kartu info --}}
            <div class="mt-10 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl bg-slate-900/70 p-5 ring-1 ring-slate-700">
                    <p class="text-xs uppercase tracking-widest text-slate-400">NIM</p>
                    <p class="mt-1 text-lg font-semibold">{{ $profil['nim'] }}</p>
                </div>
                <div class="rounded-2xl bg-slate-900/70 p-5 ring-1 ring-slate-700">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Kelas</p>
                    <p class="mt-1 text-lg font-semibold">{{ $profil['kelas'] }}</p>
                </div>
                <div class="rounded-2xl bg-slate-900/70 p-5 ring-1 ring-slate-700">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Universitas</p>
                    <p class="mt-1 text-lg font-semibold">{{ $profil['kampus'] }}</p>
                </div>
                <div class="rounded-2xl bg-slate-900/70 p-5 ring-1 ring-slate-700">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Umur</p>
                    <p class="mt-1 text-lg font-semibold">
                        {{ isset($profil['umur']) ? $profil['umur'] . ' Tahun' : '-' }}
                    </p>
                </div>
            </div>

            {{-- Ringkasan diri --}}
            <div class="mt-8">
                <h2 class="mb-3 flex items-center gap-2 text-xl font-bold">
                    <span class="inline-block h-6 w-1.5 rounded-full bg-pink-500"></span>
                    Ringkasan Diri
                </h2>
                <p class="leading-relaxed text-slate-300">
                    {{ $profil['ringkasan'] ?? 'Belum ada deskripsi.' }}
                </p>
            </div>

            {{-- Hobi --}}
            <div class="mt-8">
                <h2 class="mb-3 flex items-center gap-2 text-xl font-bold">
                    <span class="inline-block h-6 w-1.5 rounded-full bg-pink-500"></span>
                    Hobi
                </h2>
                <div class="flex flex-wrap gap-3">
                    @foreach ($profil['hobi'] ?? [] as $hobi)
                        <span class="rounded-full bg-pink-500/15 px-4 py-2 text-sm font-semibold text-pink-300 ring-1 ring-pink-500/40">
                            📚 {{ $hobi }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
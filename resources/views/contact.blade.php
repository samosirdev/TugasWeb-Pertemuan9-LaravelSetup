@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Kontak</h1>
    <ul class="bg-slate-800 rounded-lg p-6 space-y-2">
        @foreach ($kontak as $label => $nilai)
            <li><strong>{{ $label }}:</strong> {{ $nilai }}</li>
        @endforeach
    </ul>
@endsection
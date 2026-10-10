<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tugas P9 Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
    <nav class="bg-slate-800 shadow">
        <div class="max-w-4xl mx-auto px-4 py-4 flex gap-6">
            <a href="/" class="font-bold text-pink-400">Beranda</a>
            <a href="/about" class="hover:text-pink-400">About</a>
            <a href="/contact" class="hover:text-pink-400">Contact</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-slate-500 py-6 text-sm">
        &copy; {{ date('Y') }} Holan Kristian Samosir - Tugas Rutin 9
    </footer>
</body>
</html>
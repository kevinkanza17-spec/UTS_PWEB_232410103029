<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MangaVault ID')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col font-sans">

    <x-navbar />

    <main class="flex-grow max-w-7xl mx-auto w-full p-6">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>

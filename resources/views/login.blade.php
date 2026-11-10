<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MangaVault ID</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen">
  <main class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-slate-900 p-8 rounded-2xl shadow-2xl w-full max-w-md border border-slate-800">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-extrabold tracking-tight text-indigo-400">MangaVault<span class="text-white">.ID</span></h1>
            <p class="text-sm text-slate-400 mt-2">Masukkan nama pembaca (username) untuk masuk</p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-slate-300 mb-1">Username / Nama</label>
                <input type="text" id="username" name="username" required 
                    class="w-full px-4 py-2.5 bg-slate-950 border border-slate-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none text-white"
                    placeholder="Contoh: KavinRabbani">
            </div>
            <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-lg shadow-indigo-600/30">
                Masuk ke Perpustakaan
            </button>
        </form>
    </div>
  </main>
</body>
</html>